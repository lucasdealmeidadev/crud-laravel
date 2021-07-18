@if (session()->has('success'))
    <div class="alert alert-success py-3 mt-3">
        {{ session()->get('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger py-3 mt-3">
        {{ session()->get('error') }}
    </div>
@endif