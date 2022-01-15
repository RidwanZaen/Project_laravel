<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Register</h5>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register.store') }}" method="POST">
                @method("POST")
                @csrf
                <div class="form-group">
                    <label for="example-todo-title">Name</label>
                    <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label for="example-todo-title">Email</label>
                    <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label for="example-todo-desc">Password</label>
                    <input name="password" type="password" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <label for="example-todo-desc">Confirmation Password</label>
                    <input name="confirmation_password" type="password" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter confirmation password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    already have account? <a href="/login">Login Now</a>
</div>    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
