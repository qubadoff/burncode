<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Burncode LLC – Bring your business to the virtual world</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Burncode LLC helps you build fast, scalable, and secure digital products. Explore our powerful tools and get started today.">
    <meta name="keywords" content="Burncode, Burncode LLC, Web Development, AI Solutions, Startup, SaaS, Hybrid Apps, Business Solutions, Custom Software">
    <meta name="author" content="Burncode LLC">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.burncode.org">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.burncode.org">
    <meta property="og:title" content="Burncode LLC – Bring your business to the virtual world">
    <meta property="og:description" content="Burncode LLC helps you build fast, scalable, and secure digital products.">
    <meta property="og:image" content="https://www.burncode.org/assets/og-image.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.burncode.org">
    <meta name="twitter:title" content="Burncode LLC – Bring your business to the virtual world">
    <meta name="twitter:description" content="Burncode LLC helps you build fast, scalable, and secure digital products.">
    <meta name="twitter:image" content="https://www.burncode.org/assets/og-image.jpg">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('') }}comingSoon/assets/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('') }}comingSoon/assets/css/vendor.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('') }}comingSoon/assets/css/theme.minc619.css?v=1.0">
</head>


<body>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <div class="bg-primary-dark position-relative overflow-hidden min-vh-100">
        <div class="container content-space-2">
            <div class="row justify-content-center align-items-lg-center">
                <div class="col-md-8 col-lg-6 mb-7 mb-lg-0">
                    <!-- Heading -->
                    <div class="pe-lg-3 mb-7">
                        <h1 class="display-3 text-white mb-3 mb-md-5">
                            Bring your business to
                            the virtual world
                            with Burncode
                        </h1>
                        <p class="lead text-white-70">
                            We're here to help — fill out the form and a member of our team will reach out to you within 24 hours.
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-md-8 col-lg-6">
                    <div class="ps-lg-5">
                        <!-- Card -->
                        <div class="card card-lg">
                            <div class="card-body">
                                <div class="row align-items-sm-center mb-5">
                                    <div class="col-sm">
                                        <h5 class="card-title">Burncode LLC</h5>
                                        <p class="card-text">Hundreds of companies using Burncode to build their business.</p>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            \Illuminate\Support\Facades\Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                @if($errors->any())
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                @endif

                                <form method="post" action="{{ route("contactSend") }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="inputName">Name</label>
                                            <input type="text" class="form-control form-control-lg" name="name" id="inputName" placeholder="Enter your name" required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="inputSurname">Surname</label>
                                            <input type="text" class="form-control form-control-lg" name="surname" id="inputSurname" placeholder="Enter your surname" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="inputEmail">E-mail</label>
                                            <input type="email" class="form-control form-control-lg" name="email" id="inputEmail" placeholder="example@gmail.com" required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label class="form-label" for="inputPhone">Phone</label>
                                            <input type="text" class="form-control form-control-lg" name="phone" id="inputPhone" placeholder="+1234567890" required>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="inputMessage">Message</label>
                                        <textarea class="form-control form-control-lg" name="body" id="inputMessage" rows="5" placeholder="Write your message here..." required></textarea>
                                    </div>

                                    <div class="d-grid text-center">
                                        <button name="submit" type="submit" class="btn btn-primary btn-lg">
                                            Send message
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
