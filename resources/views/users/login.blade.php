<x-layout>
    <div class="d-flex flex-column align-items-center">
        <h1>Login</h1>
        <form action="/login" method="POST" class="form-element login-form p-4 border rounded">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control" required />
            @error('email')
                <div id="passwordHelpBlock" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror

            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" value="" class="form-control" required />
            @csrf
            <button type="submit" class="btn btn-primary mt-2">Login</button>
        </form>
    </div>
</x-layout>
