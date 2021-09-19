<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="text-center card-header">
                <a class="h1">The<b>BM</b>Admin</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <div class="mb-3 input-group">
                        <input type="text" class="form-control" value="{{ old('identity') }}" name="identity"
                            placeholder="{{ __('Username/Email') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 input-group">
                        <input type="password" class="form-control" value="{{ old('password') }}" name="password"
                            placeholder="{{ __('Password') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember_me" name="remember">
                                <label for="remember_me">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>