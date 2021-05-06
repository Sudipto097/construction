@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <h1>Galleries Image 3 Add</h1>

            </div>
            <form method="post" class="dropzone" action="{{route('Galleries_Add_Three')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="text"
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ADD Image</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end col -->
    </div>
@endsection
