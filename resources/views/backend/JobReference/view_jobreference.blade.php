@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Job Reference</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>Name of the Company</th>
                            <th>Area of uses</th>
                            <th>Products</th>
                            <th>Areas (SFT)</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $number = 0; ?>
                        @foreach($all as $v_img)
                            <tr>
                                <td>{{$number+1}}</td>
                                <?php $number++; ?>
                                <td>{{$v_img->company}}</td>
                                <td>{{$v_img->area_of_uses}}</td>
                                <td>{{$v_img->products}}</td>
                                <td>{{$v_img->areas}}</td>

                                <td>
                                    <a href="Edit-jobreference/{{$v_img->id}}" role="button" class="btn btn-primary">Edit</a>
                                    <a href="Delete-jobreference/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a>
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

