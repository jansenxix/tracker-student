<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    {{-- MODAL FOR CHANGE PASSWORD --}}

    <div class="modal fade" id="Changepass" tabindex="-1" aria-labelledby="Changepass" aria-hidden="true">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="Changepass">Change password:</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="uPass">
              @csrf
            <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="student">Enter current password:</label>
                        <input type="password"  class="input form-control"  name="cPass" id="cPass" placeholder="Enter current password:">
                    </div>

                    <div class="form-group mb-3">
                      <label for="student">Enter new password:</label>
                      <input type="password"  class="input form-control"  name="nPass" id="nPass" placeholder="Enter new password:">
                  </div>



                    <div class="form-group mb-3">
                        <label for="student">Confirm password:</label>
                        <input type="password" class="input form-control"  name="conPass" id="conPass" placeholder="Confirm password:">
                    </div>








            </div>
            <div class="modal-footer">
                <button type="submit"  name="save_data" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
            </form>
          </div>
        </div>
      </div>
    {{--END MODAL FOR CHANGE PASSWORD --}}
    <div class="main-container d-flex">
        @include('component.sidebar')
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                     <button class="btn px-1 py-0 open-btn me-2"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                      </svg></i></button>
                        <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">Admin</span></a>

                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>

                </div>
            </nav>
    <div class="container" style="padding-bottom: 10px">
        <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">PERSONAL INFORMATION</h3>
              <div class="card-tools">
              </div>
            </div>

            <form  id="editDataForm">
                @csrf
                {{method_field('POST')}}
                    <input type="hidden" class="form-control" id="id" name="id" >
                    <input type="hidden" class="form-control" id="pass" name="editpass" >
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fullname:</label>
                    <input type="text" class="form-control" id="name" name="editfName">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="uname" name="editUname">
                </div>

                <div class="form-group mb-3 editImg" >
                    <img id="editFileImage" class="img-thumbnail rounded-circle" style="width: 120px; height:120px; margin: auto;"/>
                    <label for="student">Change avatar:</label>
                    <input type="hidden" id="editFileName" name="editfile" />
                </div>
                <div class="mb-3">
                    <input type="file" class="input form-control"  name="editfile" id="editfile"placeholder="Enter avatar" style="width: 250px; margin: auto">
                </div>
            <div class="row">
                <div class="col-lg-6">
                <button type="submit" class="btn btn-success" style="margin-left: 400px; width: 150px;">Update</button>
                </div>

                <div class="col-lg-6">
                    <button type="button" data-bs-target="#Changepass" data-bs-toggle="modal" class="btn btn-info">Change Password</button>
                    </div>
            </div>
            </form>
    </div>

    </div>
    <script>
         $(document).ready(function(){
        $("#editfile").change(function(){

            var fileName = $(this).val().split('\\').pop();
            let path = "image/"+ fileName;
            $("#editFileImage").attr("src", path);
            });


            $("#file").change(function(){

            var fileName = $(this).val().split('\\').pop();
            let path = "image/"+ fileName;
            $("#fileImage").attr("src", path);
            });

        });
        getUser();
        function getUser() {
          $.ajax({
                type:"GET",
                url: "/user" ,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
            success: function(response){
              $("#id").val(response.id)
              $("#name").val(response.fName)
              $("#pass").val(response.pass)
              $("#uname").val(response.Uname)
              $("#editFileName").val(response.file)
              let path = "image/"+ response.file;
              $("#editFileImage").attr("src", path)

              console.log(response);

              $('#success_message').text(response.message);
              $('#deleteModal').modal('hide');

              }
            });
        }


            $('#editDataForm').on('submit', function(e){
                e.preventDefault();


                var formData = new FormData(this);


                $.ajax({
                    type:"POST",
                    url: "/updatecourse",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    dataType: "json",
                    processData: false, // Prevent jQuery from processing the data
                    contentType: false, // Set content type to false
                    success: function(response){
                                window.location.reload();
                            },
                        error: function(data) {

                        }
                    })

            })


            $('#uPass').on('submit', function(e){
                e.preventDefault();
                const currentPassword =  $("#pass").val();
                const enteredCurrent =  $("#cPass").val();
                const password =  $("#nPass").val();
                const confirmPassword =  $("#conPass").val();

                if(currentPassword !== enteredCurrent) {
                  alert("Current Password Incorrect");
                  return;
                }

                if(password != confirmPassword) {
                  alert("Password and Confirm Password is  not Match!")
                  return;
                }

                $.ajax({
                    type:"POST",
                    url: "/change-password" ,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                      password: password
                    },
                    dataType: "json",
                    success: function(response){
                      getUser();
                      $('#Changepass').modal('hide');
                      $("#cPass").val("");
                      $("#nPass").val("");
                      $("#conPass").val("");

                  }
                });

            })



    </script>
</body>
</html>


