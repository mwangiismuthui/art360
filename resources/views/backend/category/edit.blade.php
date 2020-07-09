@extends('backend_layout.main')
@section('content')
<form action="{{route('category.update')}}" method="POST">
    @csrf
    <div class="modal-body">
        <label>Edit Your Category: </label>
        <div class="form-group ">
            @foreach ($categories as $category)
        <input type="text" placeholder="eg: One Bedroom" class="form-control" name="category_type" value="{{$category->type}}">

        <input type="hidden" name="id" value="{{$category->id}}">
            @endforeach
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
@endsection