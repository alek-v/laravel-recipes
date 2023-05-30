<x-layout>
    <div class="d-flex flex-column align-items-center">
        <h1>Register</h1>
        <form action="/register" method="POST" class="form-element login-form p-4 border rounded">
            <label for="email" class="form-label">Name</label>
            <input id="name" name="name" value="{{ old('name') }}" class="form-control" required />
            @error('name')
                <div class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control" required />
            @error('email')
                <div class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" value="" class="form-control" required />
            @csrf
            <button type="submit" class="btn btn-primary mt-2">Register</button>
        </form>
    </div>
</x-layout>
