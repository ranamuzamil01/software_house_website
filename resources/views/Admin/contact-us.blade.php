@extends('Admin.index')
@section('content')
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

 @section('content')

     <main id="main" class="main">

         <div class="pagetitle">
             <h1>Contact</h1>
             <nav>
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item">Pages</li>
                     <li class="breadcrumb-item active">Contact</li>
                 </ol>
             </nav>
         </div><!-- End Page Title -->



         <section class="section">
             <div class="row">
                 <div class="col-lg-12">

                     <div class="card">
                         <div class="card-body">
                             <h5 class="card-title">Contacttables</h5>
                             <p>Add lightweight Contacttables to your project with using the <a
                                     href="https://github.com/fiduswriter/Simple-sontactTables" target="_blank">Simple
                                     ContactTables</a> library. Just add <code>.Contacttable</code> class name to any
                                 table you wish to conver to a Contacttable</p>

                             <!-- Table with stripped rows -->
                             <table class="table datatable">
                                 <thead>
                                     <tr>
                                         <th scope="col">#</th>
                                         <th scope="col">Name</th>
                                         <th scope="col">E-mail</th>
                                         <th scope="col">Subject</th>
                                         <th scope="col">Message</th>
                                         <th scope="col">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($contact as $value)
                                         <tr>
                                             <th scope="row">{{ $value->id }}</th>
                                             {{-- <td><img src="{{asset('images/'.$value->icon)}}" alt="" style="width: 50px; height:50px;"></td> --}}
                                             <td>{{ $value->name }}</td>
                                             <td>{{ $value->email }}</td>
                                             <td>{{ $value->subject }}</td>
                                             <td>{{ $value->message }}</td>
                                             <td>
                                                 {{-- <a href="" class="btn btn-Warning">Edit</a> --}}
                                                 <a href="{{url('/deleteContact',$value->id)}}" class="btn btn-danger">Delete</a>
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


     
         
