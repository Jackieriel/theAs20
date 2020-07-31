<div class="page-header">
    <h3 class="page-title">@yield('title')</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class=" breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
</div>