<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card -->
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter email" required autofocus>
                            </div>

                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter password" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>

                            <hr>

                            <div class="text-center mt-3">
                                <a href="/">Go to Homepage</a>
                            </div>
                        </form>

                        @if ($errors->any())
                            <div class="mt-3 alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p class="mb-0">{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /Card -->
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS (optional, for future needs) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
