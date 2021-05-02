@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <h1>EDIT WHY CHOOSE US?</h1>
            </div>
            <form method="post" class="dropzone" action="{{route('Update-Choose')}}"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$Edit->id}}">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Question 1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="question_1" value="{{$Edit->question_1}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Answer 1</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="answer_1" value="{{$Edit->answer_1}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Question 2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="question_2" value="{{$Edit->question_2}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Answer 2</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="answer_2" value="{{$Edit->answer_2}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Question 3</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="question_3" value="{{$Edit->question_3}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Answer 3</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="answer_3" value="{{$Edit->answer_3}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Question 4</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="question_4" value="{{$Edit->question_4}}"
                                       id="example-text-input">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Answer 4</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="answer_4" value="{{$Edit->answer_4}}"
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update WHY CHOOSE US</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- end col -->
    </div>
@endsection
