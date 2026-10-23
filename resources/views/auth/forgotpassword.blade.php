<x-layout>
    @vite(['resources/css/login.css'])
    <div class="login-container">
        <form method="POST" action="{{ route('password.reset') }}" class="login-form">
            @csrf
            <h1 class='title'> forgot password </h1>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</x-layout>
