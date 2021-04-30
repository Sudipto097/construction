@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Hero</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>Text 1</th>
                            <th>Text 2</th>
                            <th>Text 3</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $number = 0; ?>
                        @foreach($all as $v_img)
                            <tr>
                                <td>{{$number+1}}</td>
                                <?php $number++; ?>
                                <td>{{$v_img->text_1}}</td>
                                <td>{{$v_img->text_2}}</td>
                                <td>{{$v_img->text_3}}</td>
                                <td><img src="{{URL::to($v_img->image_1)}}" style="width:100px; height: 100px;"></td>
                                <td><img src="{{URL::to($v_img->image_2)}}" style="width:100px; height: 100px;"></td>
                                <td><img src="{{URL::to($v_img->image_3)}}" style="width:100px; height: 100px;"></td>
                                <td>
                                    <?php if($v_img->status == '1'){ ?>
                                    <a href="{{url('/update-about',$v_img->id)}}" class="btn btn-success">Active</a> ||
                                    <?php }else{ ?>
                                    <a href="{{url('/update-about',$v_img->id)}}" class="btn btn-danger">Inactive</a> ||
                                    <?php } ?>
                                    <a href="Delete-about/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a>
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
