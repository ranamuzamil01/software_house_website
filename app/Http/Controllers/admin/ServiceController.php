<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Service;

class ServiceController extends Controller
{
    //

    public function StoreService(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;

        $service->description = $request->description;

        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // dd($imageName);
            if ($imageName) {
                $service->icon = $imageName;
                $image->move(public_path('images'), $imageName);
            } else {
                $service->icon = 'image empty';
            }

            $service->save();
            // You can also store the image path in a database if needed

            // return 'Image uploaded successfully.';
        }

        return redirect()->back();
    }


public function viewServices(){

$service = Service::all();

return view('Admin.view-service',compact('service'));

}

public function deleteService($id){

    $service = Service::find($id);

    $service->delete();
    if($service){
       return redirect()->back()->with("Data deleted successfuly");
    }
    else{
        return "Data not found";
        }
}


public function editService($id){
    $service = Service::find($id);

    $service->edit();
    if($service){
        return redirect()->back()->with("Data updated successfuly");
     }
     else{
         return "Data not found";
         }
}

}
