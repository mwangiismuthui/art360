@if(session('success'))
    <div class="alert alert-success text-center" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning text-center" role="alert">
        {{session('warning')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger text-center" role="alert">
        {{session('error')}}
    </div>
@endif
