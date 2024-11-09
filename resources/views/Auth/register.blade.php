@extends('layout.main')
@section('content')

<main>
    <div class="container">
    @include('extra.session-message')

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create A New Account</h5>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('registration') }}" method="post" novalidate>
                    @csrf

                    <div class="col-12">
                      <label for="yourName" class="form-label">Name</label>
                      <div class="input-group has-validation">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="yourName" value="{{ old('name') }}" required>
                        @error('name')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="yourEmail" value="{{ old('email') }}" required>
                        @error('email')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                      @error('password')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{ route('/') }}">Login</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

@endsection