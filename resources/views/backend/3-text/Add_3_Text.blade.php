@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <h1>ADD 3 Text</h1>
            </div>
            <form method="post" class="dropzone" action="{{route('Add_ThreeText')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text Big 1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="text_big_1"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text Small 1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="small_text_1"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text Big 2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="text_big_2"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text Small 2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="small_text_2"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text Big 3</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="text_big_3"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text Small 3</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="small_text_3"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Image 1</label>
                            <div class="card-body">
                                <div class="fallback">
                                    <input name="image_1" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Image 2</label>
                            <div class="card-body">
                                <div class="fallback">
                                    <input name="image_2" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-number-input" class="col-md-2 col-form-label">Image 3</label>
                            <div class="card-body">
                                <div class="fallback">
                                    <input name="image_3" type="file" multiple="multiple">
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ADD 3 Text</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end col -->
    </div>
@endsection
