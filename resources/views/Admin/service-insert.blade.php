@extends('Admin.index')
@section('content')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <main id="main" class="main">


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">General Form Elements</h5>

                            <!-- General Form Elements -->
                            <form action="{{ url('/store-service') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputFile" class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <img src="" id="image-preview" alt="Image Preview" style="width: 50px; height:50px; display:none">
                                        <input type="file" name="icon" class="form-control" id="image-input">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" class="form-control">
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control">
                      </div>
                    </div> -->
                                <!-- <div class="row mb-3">
                      <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div> -->



                                <!-- <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                      </div>
                    </div> -->




                                <!-- <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Select</label>
                      <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div> -->



                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <script>
        const imageInput = document.getElementById('image-input');
        const imagePreview = document.getElementById('image-preview');

        imageInput.addEventListener('change', function() {
    // Get the selected file from the input
    const file = imageInput.files[0];

    // Create a FileReader object
    const reader = new FileReader();

    // Set up the reader's onload event
    reader.onload = function(e) {
        // Update the image preview source with the selected image
        imagePreview.src = e.target.result;
        imagePreview.style.display = 'block'; // Show the image preview
    

    };

    // Read the selected file as a data URL
    reader.readAsDataURL(file);
});
    </script>
