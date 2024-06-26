
    <!DOCTYPE html>
<html lang="en">
    @include('component.header')
<body>
{{-- INSERT DATA --}}
<div class="modal fade" id="insertData" tabindex="-1" aria-labelledby="insertDataLabel" aria-hidden="true">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="insertDataLabel">Add student</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="insertProduct">
              @csrf
            <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="student">First Name:</label>
                        <input type="text"  class="input form-control"  name="fname" id="fname" placeholder="Enter First Name" required>
                    </div>

                    <div class="form-group mb-3">
                      <label for="student">Last Name:</label>
                      <input type="text"  class="input form-control"  name="lname" id="lname" placeholder="Enter Last Name" required>
                  </div>



                    <div class="form-group mb-3">
                        <label for="student">Student Number</label>
                        <input type="number" class="input form-control"  name="snumber" id="snumber"placeholder="Enter student Number" required>
                    </div>


                    <div class="form-group mb-3 ">
                        <label for="student">Academic Year</label>
                        <input type="text" class="input form-control" name="acadYear" id="acadYear" placeholder="Enter Academic Year"required>
                    </div>



                  <div class="form-group mb-3 ">
                    <label for="student">Academic Term</label>
                    <input type="number" class="input form-control" name="acadTerm" id="acadTerm" placeholder="Enter Academic Term" required>
                </div>

                <select class="form-select" aria-label="Default select example" id="course" name="course">
                  <option selected>Open this select course</option>

                  @foreach($courses as $value)
                  <option value="{{ $value->id }}">{{ $value->description }}</option>
                  @endforeach

                </select>




            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit"  name="save_data" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
      </div>
{{-- END INSERT DATA --}}


{{-- INSERT DATA --}}
<div class="modal fade" id="importData" tabindex="-1" aria-labelledby="insertDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="insertDataLabel">Import Students</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="/import" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>File</label>
                    <input type="file" name="file"  class="form-control"/>
                    <BR>
                    <label>Course</label>
                    <select class="form-select" aria-label="Default select example" id="course" name="course">
                        <option selected>Open this select course</option>

                        @foreach($courses as $value)
                        <option value="{{ $value->id }}">{{ $value->description }}</option>
                        @endforeach

                    </select>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"  name="save_data" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- END INSERT DATA --}}



{{-- Edit --}}
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editDataLabel">Update student</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form  id="editDataForm">
            @csrf
            {{method_field('PUT')}}
          <div class="modal-body">

            <div class="form-group mb-3">
              <label for="ID"></label>
              <input type="hidden"  class="input form-control"  name="id" id="editid"  placeholder="Student name" required>
          </div>


                  <div class="form-group mb-3">
                      <label for="Product">First Name</label>
                      <input type="text"  class="input form-control"  name="editfname" id="editfname"  placeholder="Enter First Name:" required>
                  </div>


                  <div class="form-group mb-3">
                    <label for="Product">Last Name</label>
                    <input type="text"  class="input form-control"  name="editlname" id="editlname"  placeholder="Enter Last Name" required>
                </div>



                  <div class="form-group mb-3">
                      <label for="Product">Student number</label>
                      <input type="number" class="input form-control"  name="snumber" id="editsnumber"  placeholder="Enter Student Number" required>
                  </div>


                  <div class="form-group mb-3 ">
                    <label for="student">Academic Year</label>
                    <input type="text" class="input form-control" name="acadYear" id="editacadYear" placeholder="Enter Academic Year" required>
                </div>



              <div class="form-group mb-3 ">
                <label for="student">Academic Term</label>
                <input type="number" class="input form-control" name="acadTerm" id="editacadTerm" placeholder="Enter Academic Term">
            </div>
            <select class="form-select" aria-label="Default select example" id="editcourse" name="editcourse" required>
              <option selected>Open this select course</option>

              @foreach($courses as $value)
              <option value="{{ $value->id }}">{{ $value->description }}</option>
              @endforeach

            </select>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit"  name="edit_data" class="btn btn-primary ">Update</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  {{-- Edit --}}

{{-- DELETE MODAL --}}

<div class="modal" tabindex="-1" id="deleteModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete student?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <p>Are you sure you want to Delete this Student?</p>
        <label for="ID"></label>
        <input type="hidden"   id="delete_pdc" disabled  placeholder="Product name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_btn" >Delete</button>
      </div>
    </div>
  </div>
</div>

{{-- END DELETE MODAL --}}


@include('component.sidebar')

<div class="w3-main" style="margin-left:200px">
    @include('component.top')
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

                <div class="container">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title">List of Student</h3>
                    <div class="card-tools">
                        <button class="btn btn-dark float-start mb-3" data-bs-toggle="modal" data-bs-target="#importData">Import</button>
                      <button type="button" id="add_user" class="btn btn-dark float-end mb-3 " data-bs-toggle="modal" data-bs-target="#insertData" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="white" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                        </svg> ADD STUDENT
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="container-fluid">
                        <div class="container-fluid">
                      <table class="table table-hover table-striped" id="myTable">
                        <thead>
                          <tr>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="sname" data-sortable="true">First Name</th>
                            <th data-field="sname" data-sortable="true">Last Name</th>
                            <th data-field="snumber" data-sortable="true">Student Number</th>
                            <th data-field="age" data-sortable="true">Academic Year</th>
                            <th data-field="age" data-sortable="true">Academic Term</th>
                            <th data-field="age" data-sortable="true">Course</th>
                            <th data-field="age" data-sortable="true">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                              @foreach($student as $value)
                            <tr class="studentID">

                                <td>{{$value->id}}</td>
                                <td>{{$value->fname}}</td>
                                <td>{{$value->lname}}</td>
                                <td>{{$value->studentNumber}}</td>
                                <td>{{$value->acadYear}}</td>
                                <td>{{$value->acadTerm}}st Term</td>
                                <td>{{$value->courseData->description}}</td>

                                 <td><button type="button" student-id="{{$value->id}}" student-fname="{{$value->fname}}" student-lname="{{$value->lname}}"  student-snumber="{{$value->studentNumber}}"  student-acadYear="{{$value->acadYear}}" student-acadTerm="{{$value->acadTerm}}" student-course="{{$value->course}}" class="btn btn-info editBtn mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="Red" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg></button>
                                <button type="button" id="btn1" class="btn btn-danger mb-2 mr-4 btn btn-primary float-end mb-3 deleteAction bi bi-archive-fill"  student-id="{{$value->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                                  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                </svg></button>
                              </td>

                            </tr>
                             @endforeach
                        </tbody>
                      </table>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>


        <table class="table table-hover table-striped" id="table">
        </table>


<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>


        $(document).ready(function(){
            let table = new DataTable('#myTable');
        $(".sidebar ul li").on('click', function () {
            $(".sidebar ul li.active").removeClass('active');
            $(this).addClass('active');
        });

        $('.open-btn').on('click', function () {
            $('.sidebar').addClass('active');

        });


        $('.close-btn').on('click', function () {
            $('.sidebar').removeClass('active');

        })

        $('#table').DataTable({
                "columnDefs": [
              { "orderable": false, "targets": 0 }
          ]
      });

});




$('.deleteAction').on('click',function(e){
          e.preventDefault();
          $('#deleteModal').modal('show');
          let id = $(this).attr("student-id")
          $('#delete_pdc').val(id);
});

$(document).on('click', '.delete_btn', function(e){
          e.preventDefault();
          var id = $('#delete_pdc').val();

          $.ajax({
              type:"POST",
              url: "/deletestudent" ,
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: {id: id},
              dataType: "json",
          success: function(response){
            location.reload();
            console.log(response);

            $('#success_message').text(response.message);
            $('#deleteModal').modal('hide');

            }
          });

})


$('.editBtn').on('click',function(){
          let id = $(this).attr("student-id")
          let fname = $(this).attr("student-fname")
          let lname = $(this).attr("student-lname")
          let snumber = $(this).attr("student-snumber")
          let editacadYear = $(this).attr("student-acadYear")
          let editacadTerm = $(this).attr("student-acadTerm")
          let course = $(this).attr("student-course")


          $('#editid').val(id);
          $('#editfname').val(fname);
          $('#editlname').val(lname);
          $('#editsnumber').val(snumber);
          $('#editacadYear').val(editacadYear);
          $('#editacadTerm').val(editacadTerm);
          $('#editcourse').val(course);


          $('#editData').modal('show');
});


$('#editDataForm').on('submit', function(e){
      e.preventDefault();
      var id = $('#editid').val();
      var fname = $('#editfname').val();
      var lname = $('#editlname').val();
      var snumber = $('#editsnumber').val();
      var editacadYear = $('#editacadYear').val();
      var editacadTerm = $('#editacadTerm').val();
      var editcourse = $('#editcourse').val();




      $.ajax({
          type:"POST",
          url: "/editstudent",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {id: id,fname: fname, lname: lname, snumber:snumber,editacadYear:editacadYear, editacadTerm:editacadTerm,editcourse:editcourse },
          dataType: "json",
          success: function(response){
                    window.location.reload();
                },
            error: function(data) {

            }
          })

})

$("#insertProduct").submit(function(event){
        event.preventDefault()
      $('add_user').text('adding...');
      $('#insertData').modal('hide');



         var fname = $('#fname').val();
         var lname = $('#lname').val();
         var snumber = $('#snumber').val();
         var acadYear = $('#acadYear').val();
         var acadTerm = $('#acadTerm').val();
         var course = $('#course').val();

          $.ajax({
          type:"POST",
          url: "/studentlist",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data:{fname: fname, lname: lname,snumber:snumber, acadYear:acadYear, acadTerm:acadTerm,course:course},
          dataType: "json",
          success: function(response){
              window.location.reload();
                },
            error: function(data) {

            }
      });

      })
    </script>
</body>
</html>
