@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <h1>ADD WHAT OTHER SAY ABOUT US</h1>
            </div>
            <form method="post" class="dropzone" action="{{route('Add-OTHER')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="name"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Small Text</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="small_text"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="designation"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Image</label>
                            <div class="card-body">
                                <div class="fallback">
                                    <input name="image" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ADD WHY CHOOSE US</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end col -->
    </div>
@endsection
