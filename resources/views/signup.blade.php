<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="login.css">

    <!-- *Remixicon -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-image: url('css/background.jpeg">


     
        <form action="POST" action="" id="signup">
            @csrf
            <div class="container">
            <div class="design">
                <img src="css/logo.png" id="img"   style="margin-left:10%; margin-top:10%; height:700; width:350px; object-fit:scale-down; object-position:center center;   border-radius:100%;" >
           </div>

        <!-- *LOGIN FORM -->
             <div class="login mb-5">
                  <h1 class="title" style="color:white;">Login Now!</h1>
             <div class="mb-3" id="inputTypetest">

                <div class="text-input">
                    <i class="ri-user-fill"></i>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username" size="50px">
                </div>



                <div class="text-input" style="margin-bottom: 20px;"> 
                    <i class="ri-lock-fill"></i>
                    <input type="password" id="password" placeholder="Enter Password">
                            
                    <div class="eye">
                            <span class="Eye" onclick="myFunction()">
                            <i id="hide1" style="display: none" class="ri-eye-line"></i>
                           <i id="hide2" class="ri-eye-off-line"></i>
                    </div>
                </div>
                <button type="submit" class="login-btn"id="btn">LOGIN</button>
        
        <div class="create" style="color:white; ">
            Don't have an account? <a href="../signup/signup.php"> &nbsp; <u>Sign up now!</u></a>
        </div>
        <div>
            <a href="#" class="forgot" style="color:white;">Forgot password?</a>
        </div>

   

 

    
    <div class="create" style="color:white; ">
        Don't have an account? <a href=""> &nbsp; <u>Sign up now!</u></a>
    </div>
</div> <!-- *END CONTAINER -->


<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
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


       
    function myFunction()
{
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type === 'password'){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>
</body>
</html>
