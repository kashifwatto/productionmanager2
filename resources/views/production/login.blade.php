<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Favicons -->
    <link href="{{ asset('assets/images/dashboard/header-logo.svg') }}" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="container-fluid maincontainer">
        <div class="row">
            <div class="col-md-6 logo-part">

                <div class="logo">
                    <img src="{{ asset('assets/images/login/desktoplogo.svg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 form-part">
                <div class="form-part-inner">
                    <h1>Welcome back</h1>
                    <h2>Welcome back! Please enter your details.</h2>
                    <form action="">
                        <div>
                            <label class="label">Email </label>
                            <input type="email" class="input" placeholder="Enter your email" name="email"
                                id="">
                        </div>
                        <div>
                            <label class="label">Password</label>

                            <input type="password" class="input" name="password" id="">
                        </div>
                        <div class="row checkbox-container">
                            <div class="col formcheck d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div>

                                <div class=" forget"><a href=#>Forgot Password</a></div>
                            </div>
                        </div>
                        <div class="button-container">
                            <button type="button"> Sign In</button>
                        </div>
                        <div class="text">
                            <h6>By signing in you agree to our <a href="#"> Terms & Conditions </a>And<a
                                    href="#"> Privacy Policy</a></h6>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
