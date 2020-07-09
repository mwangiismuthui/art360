@extends('backend_layout.main')
@section('content')

    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Art features</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal" data-target="#iconForm">
                            Add Feature
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Feature Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($features as $feature)
                                <tr>
                                    <th scope="row">{{$feature->id}}</th>
                                    <td>{{$feature->name}}</td>
                                    <td>
                                        <a href="{{route('delete_feature',$feature->id)}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade text-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel34">Enter Feature name</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('store_feature')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label>Art Feature:</label>
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" placeholder="eg: Pencil Drawing" class="form-control" name="name">
                            <div class="form-control-position">
                                <i class="fa fa-house font-medium-5 line-height-1 text-muted icon-align"></i>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
