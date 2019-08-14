<div class="title m-b-md">
    welcome to shop!
</div>
<div class="links">
    <a href="/home">Home</a>
    <a href="/introduction">Introduction</a>
    <a href="/products">Products</a>
    <a href="/service">Service</a>
    <a href="/profile">Profile</a>
    @admin
    @if (Route::has('admin'))
        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">{{ __('admin') }}</a>
        </li>
    @endif
</div>
