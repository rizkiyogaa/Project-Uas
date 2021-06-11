@if (session()->has('errors'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> {{ $errors->first() }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session()->has('success'))
<div role="alert" class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> {{ session()->get('success') }}
    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif