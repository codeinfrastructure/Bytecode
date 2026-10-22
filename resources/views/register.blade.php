<x-layout>
    @vite(['resources/css/login.css'])

    <div class="login-container">
        <form method="POST" action="{{ route('register.store') }}" class="login-form">
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

            <div class="form-group">
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required />
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required />
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
            </div>

            <button type="submit" class="btn-submit">Register</button>
        </form>
    </div>
</x-layout>
