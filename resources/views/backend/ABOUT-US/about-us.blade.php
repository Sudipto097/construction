@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add ABOUT US</h1>
            <form method="post" class="dropzone" action="{{route('Add-About')}}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">ABOUT</label>
                            <div class="col-md-10">
                                <textarea name="about" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ADD ABOUT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end col -->
    </div>


@endsection
