<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>User sign up!</title>
    <link rel="stylesheet" href="{{ asset('css/userSignup.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-image: url('css/background.jpeg">

          <form action="POST" action="" id="userSignup">
            @csrf
            <div class="container">
              <div class="design">
                  <img src="css/logo.png" id="img"   style="margin-left:10%; margin-top:10%; height:700; width:350px; object-fit:scale-down; object-position:center center;   border-radius:100%;" >
              </div>

              <div class="login mb-5">
                    <h1 class="title" style="color:white;"> Sign-Up Now!</h1>
              <div class="mb-3" id="inputTypetest">


              <div class="text-input">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                <input type="text" class="form-control"  id="fname" name="fname" placeholder="Enter First Name:" required size="50 px">
              </div>


              <div class="text-input" style="margin-bottom: 5px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                <input type="text" id="lname" name="lname" placeholder="Enter Last Name">
              </div>

              <div class="text-input" style="margin-bottom: 20px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                <input type="text" id="snumber" name="snumber" placeholder="Enter Student Number:">
              </div>


               <button type="submit" id="btn" class="btn btn-primary login-btn">Submit</button>
               <div class="create" style="color:white;">
                Have an account already?&nbsp; <a href="/">Login now!</a>
                </div>


        </div>
      </div>
    </div> <!-- *END CONTAINER -->


{{-- test --}}

{{-- test --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>




  $('#userSignup').on('submit', function(e){
    e.preventDefault();

   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var snumber = $('#snumber').val();

    $.ajax({
    type:"POST",
    url: "/checkStudent",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:{fname: fname, lname: lname,snumber:snumber},
    dataType: "json",
    success: function(response){
      console.log(response)
        if(response.message == 'Success')
        {

          location.href = "/form/"+response.user.id;
        }
        else
        {
          alert("Credential not exist!")
        }
      },
      error: function(data) {
        console.log(data)
      }
    });
});
</script>
</body>
</html>
