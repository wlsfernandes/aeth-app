@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle"></i>
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        <i class="bx bx-error"></i> {{ session('error') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li><i class="bx bx-error"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif