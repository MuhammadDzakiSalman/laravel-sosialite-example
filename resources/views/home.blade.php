<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mt-5">Welcome Home</h2>
            <div class="card mt-3">
                <div class="card-body">
                    <p>You are logged in!</p>
                    <a href="{{ url('/logout') }}" class="btn btn-danger btn-block">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
