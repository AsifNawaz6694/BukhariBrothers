@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <div class="col-xs-12">
                @include('general_partials.error_section')
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">About Us</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Heading</th>                                   
                                    <th>Description</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($abouts as $about)
                                    <tr>
                                        <td>{{ $about->heading }}</td>             
                                        <td>{{ $about->description }}</td>          
                                        <td>
                                            <a href="{{route('about_edit',['id'=>$about->id])}}" class=" btn btn-primary">Edit</a></li>  
                                         </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                 {{--    <div class="s_button">
                            <a class="btn btn-primary" href="{{route('create_project')}}">Create</a>
                        </div>  
                    </div> --}}
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
@endsection