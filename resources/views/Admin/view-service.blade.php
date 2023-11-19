@extends('Admin.index')
   @section('content')
   <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Servicestables</h5>
              <p>Add lightweight servicestables to your project with using the <a href="https://github.com/fiduswriter/Simple-ServicesTables" target="_blank">Simple ServicesTables</a> library. Just add <code>.Servicestable</code> class name to any table you wish to conver to a servicestable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($service as $value )
                        
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                    <td><img src="{{asset('images/'.$value->icon)}}" alt="" style="width: 50px; height:50px;"></td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->description}}</td>
                    <td>
                        <a href="{{Route('update-service',$value->id)}}"" class="btn btn-Warning" >Edit</a>
                        <a href="{{url('/delete-service',$value->id)}}" class="btn btn-danger" >Delete</a>
                    </td>
                </tr>
                @endforeach
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
