{{-- user.blade.php --}}
<h1>User Dashboard</h1>
<form method="POST" action="{{ route('logout') }}">@csrf<button type="submit">Logout</button></form>
