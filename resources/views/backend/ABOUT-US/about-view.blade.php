@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Job Reference</h4><br>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>About</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $number = 0; ?>
                        @foreach($about as $v_img)
                            <tr>
                                <td>{{$number+1}}</td>
                                <?php $number++; ?>
                                <td>{{$v_img->about}}</td>
                                <td style="width: 15%">
                                    <a href="Edit-About/{{$v_img->id}}" role="button" class="btn btn-primary">Edit</a> <br>
                                    <a href="Delete-About/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a> <br>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

