@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" class="dropzone" action="{{route('Add-Reference')}}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Name of the Company</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="company" value="Abul khair Ceramic Industries Ltd"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Area of uses</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="area_of_uses" value="Production areas"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Products</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="products" value="Floor Hardener"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Areas (SFT)</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="areas" value="23,000"
                                       id="example-text-input">
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ADD Job Reference</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end col -->
    </div>



@endsection
