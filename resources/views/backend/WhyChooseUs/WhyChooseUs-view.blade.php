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
                            <th>Question 1</th>
                            <th>Answer 1</th>
                            <th>Question 2</th>
                            <th>Answer 2</th>
                            <th>Question 3</th>
                            <th>Answer 3</th>
                            <th>Question 4</th>
                            <th>Answer 4</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $number = 0; ?>
                        @foreach($Choose as $v_img)
                            <tr>
                                <td>{{$number+1}}</td>
                                <?php $number++; ?>
                                <td>{{$v_img->question_1}}</td>
                                <td>{{$v_img->answer_1}}</td>
                                <td>{{$v_img->question_2}}</td>
                                <td>{{$v_img->answer_2}}</td>
                                <td>{{$v_img->question_3}}</td>
                                <td>{{$v_img->answer_3}}</td>
                                <td>{{$v_img->question_4}}</td>
                                <td>{{$v_img->answer_4}}</td>
                                <td><img src="{{URL::to($v_img->image)}}" style="width:100px; height: 100px;"></td>

                                <td>
                                    <?php if($v_img->status == '1'){ ?>
                                    <a href="{{url('/status-Why-Choose-Us',$v_img->id)}}" class="btn btn-success">Active</a>
                                    <?php }else{ ?>
                                    <a href="{{url('/status-Why-Choose-Us',$v_img->id)}}" class="btn btn-danger">Inactive</a>
                                    <?php } ?>
                                    <a href="WhyChooseUs-Delete/{{$v_img->id}}" role="button" class="btn btn-danger">Delete</a><br>
                                    <a href="WhyChooseUs-Edit/{{$v_img->id}}" role="button" class="btn btn-primary">Edit</a>
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

