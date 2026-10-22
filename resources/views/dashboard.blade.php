<x-layout>
    @vite(['resources/css/login.css'])

    <div class="login-container">
        
        <div class="dashboard-card">
            <h1 class="dashboard-title">
                Welcome {{ Auth::user()->name }} to the marketplace
            </h1>

            <form method="POST" action="{{ route('logout') }}"> 
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>

    </div>
</x-layout>
