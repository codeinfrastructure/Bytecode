<x-layout>
    <!-- We laden je custom login.css in via Vite -->
    @vite(['resources/css/login.css'])

    <div class="login-container">
        
        <form method="POST" action="{{ route('login.attempt') }}" class="login-form">
            @csrf

            @if ($errors->any())
            <div class="error-container">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @session("succes")
            <div class="alert alert-succes">{{ $value }}</div>
            @endsession



            <div class="form-group">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required />
            </div>

            <button type="submit" class="btn-submit">login</button>

           <div class="form-links">
            <a href="{{ route('register') }}" class="register-link">Register</a>
            <a href="{{ route('password.forgot') }}" class="register-link">Forgot password?</a>
           </div>


        </form>

    </div>
</x-layout>
