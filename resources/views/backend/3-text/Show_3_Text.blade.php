@extends('master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">View 3 Text</h4><br>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>Text Big 1</th>
                            <th>Small Text 1</th>
                            <th>Text Big 2</th>
                            <th>Small Text 2</th>
                            <th>Text Big 3</th>
                            <th>Small Text 3</th>
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
                                <td>{{$v_img->text_big_1}}</td>
                                <td>{{$v_img->small_text_1}}</td>
                                <td>{{$v_img->text_big_2}}</td>
                                <td>{{$v_img->small_text_2}}</td>
                                <td>{{$v_img->text_big_3}}</td>
                                <td>{{$v_img->small_text_3}}</td>
                                <td><img src="{{URL::to($v_img->image_1)}}" style="width:100px; height: 100px;"></td>
                                <td><img src="{{URL::to($v_img->image_2)}}" style="width:100px; height: 100px;"></td>
                                <td><img src="{{URL::to($v_img->image_3)}}" style="width:100px; height: 100px;"></td>
                                <td>
                                    <a href="Three_text_Delete/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a><br>
                                    <?php if($v_img->status == '1'){ ?>
                                    <a href="{{url('/three-update-about',$v_img->id)}}" class="btn btn-success">Active</a>
                                    <?php }else{ ?>
                                    <a href="{{url('/three-update-about',$v_img->id)}}" class="btn btn-danger">Inactive</a>
                                    <?php } ?>
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

