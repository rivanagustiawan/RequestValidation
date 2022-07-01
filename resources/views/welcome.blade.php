<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Request Validation</title>
  </head>
  <body>
    <div class="row justify-content-center">
        <div class="col-md-5 ">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required>
                        <label for="floatingInput">Name</label>
                        @error('name')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
                        <label for="floatingInput">Username</label>
                        @error('username')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a href="/login">Login!</a></small>
              </main>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>