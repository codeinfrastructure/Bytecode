<x-layout> 
    @vite(['resources/css/login.css']) 
    <title>Reset Password page</title> 
    <div class="login-container"> 
        <form method="POST" action="{{ route('password.reset.link.submit') }}" class="login-form">
            @csrf 
            <input type="hidden" name="token" value="{{ $token }}">

            <h1 class='title'>Reset password</h1> 
            
            @if ($errors->any())
                <div style="background: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group"> 
                <input type="password" name="password" placeholder="New password" required />
                @error('password') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group"> 
                <input type="password" name="password_confirmation" placeholder="Confirm password" required />
            </div>

            <button type="submit" class="btn-submit">Reset password</button> 
        </form> 
    </div> 
</x-layout>
