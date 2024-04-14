<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>User sign up!</title>
    <link rel="stylesheet" href="{{ asset('css/userSignup.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="display: flex; justify-content: center;">
    <div class="class" id="test">
        <h1>User sign-up</h1>
           <form action="POST" action="" id="userSignup">
               @csrf
               <div class="mb-3">
                   <label for="exampleFormControlInput1" class="form-label">Firstname:</label>
                   <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Firstname:" required>
                 </div>
   
                 <div class="mb-3">
                   <label for="exampleFormControlInput1" class="form-label">Lastname:</label>
                   <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Lastname" required>
                 </div>

                 <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Student number:</label>
                    <input type="number" class="form-control" id="snumber" name="snumber" placeholder="Enter student number:">
                  </div>
                 
                 <button type="submit" id="btn" class="btn btn-danger ml-40" >Submit</button>

                 <div class="already">
                  Have an account already?&nbsp; <a href="">Login now!</a>
                  </div>
           </div>
       </div>
       
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>


 

  $('#userSignup').on('submit', function(e){
    e.preventDefault();

   var fname = $('#fname').val();
   var lname = $('#lname').val();
   var snumber = $('#snumber').val();
  
    $.ajax({
    type:"POST",
    url: "/usersignUp",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data:{fname: fname, lname: lname,snumber:snumber},
    dataType: "json",
    success: function(response){
      console.log(response)
        if(response.message == 'Success')
        {

          location.href = "/";
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