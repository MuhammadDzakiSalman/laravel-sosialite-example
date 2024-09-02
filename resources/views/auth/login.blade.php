<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mt-5">Login</h2>
            <div class="card mt-3">
                <div class="card-body">
                    <a href="{{ url('/auth/google') }}" class="btn btn-danger btn-block">
                        Login with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
