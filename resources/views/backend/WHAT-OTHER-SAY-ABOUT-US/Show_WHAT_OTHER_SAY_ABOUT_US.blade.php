@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">View WHY CHOOSE US?</h4><br>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Small Text</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $number = 0; ?>
                        @foreach($other as $v_img)
                            <tr>
                                <td>{{$number+1}}</td>
                                <?php $number++; ?>
                                <td>{{$v_img->name}}</td>
                                <td>{{$v_img->small_text}}</td>
                                <td>{{$v_img->designation}}</td>
                                <td><img src="{{URL::to($v_img->image)}}" style="width:100px; height: 100px;"></td>
                                <td>
                                    <a href="Other_Say-Delete/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a><br>
                                    <a href="Other_Say-Edit/{{$v_img->id}}" role="button" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div>



@endsection

