@if (session('success'))
    <div class="alert alert-success py-3 mt-3">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger py-3 mt-3">
        {{ session('error') }}
    </div>
@endif