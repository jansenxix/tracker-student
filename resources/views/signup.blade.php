<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>

 <div class="class" id="test">
     <h1>Admin login</h1>
        <form action="POST" action="" id="signup">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username:</label>
                <input type="username" class="form-control" id="username" placeholder="Enter Username">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password">
              </div>
              
              <button type="submit" id="btn" class="btn btn-danger ml-40" >Submit</button>
        </div>
    </div>
    
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
 $(document).ready(function () {
        $('#signup').submit(function (e) {
            e.preventDefault();
            var username = $('#username').val();
             var pass = $('#password').val();





             
            $.ajax({
                type: "POST",
                url: "/signup",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:{Uname: username, pass:pass},
                success: function (response) {
                    if (response === 'Success') {
                        window.location.href = "/dashboard";
                    } else {
                        alert("Login failed: " + response.message);
                    }
                }
            });
        });
    });
</script>