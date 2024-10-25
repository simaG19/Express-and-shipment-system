@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image" 
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <!-- Laravel form setup -->
              <form method="POST" action="{{ route('register') }}">
                @csrf <!-- CSRF token for Laravel -->

                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" required autocomplete="name" autofocus />
                  <label class="form-label" for="name">Your Name</label>

                  @error('name')
                      <span class="text-danger" role="alert">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required autocomplete="email" />
                  <label class="form-label" for="email">Your Email</label>

                  @error('email')
                      <span class="text-danger" role="alert">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="new-password" />
                  <label class="form-label" for="password">Password</label>

                  @error('password')
                      <span class="text-danger" role="alert">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password-confirm" name="password_confirmation" class="form-control form-control-lg" required autocomplete="new-password" />
                  <label class="form-label" for="password-confirm">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="terms" required />
                  <label class="form-check-label" for="terms">
                    I agree to the <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="{{ route('login') }}" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
