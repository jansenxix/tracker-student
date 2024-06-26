<!DOCTYPE html>
<html lang="en">
@include('component.header')

{{-- INSERT DATA --}}
<div class="modal fade" id="insertData" tabindex="-1" aria-labelledby="insertDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="insertDataLabel">Add course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="insertProduct">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="student">CODE</label>
                        <input type="text" class="input form-control" name="code" id="code" placeholder="Enter code"
                               required>
                    </div>


                    <div class="form-group mb-3">
                        <label for="student">DESCRIPTION</label>
                        <input type="text" class="input form-control" name="description" id="description"
                               placeholder="Enter description" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_data" class="btn btn-primary">Save Data</button>
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
                <h1 class="modal-title fs-5" id="editDataLabel">Update Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editDataForm">
                @csrf
                {{method_field('PUT')}}
                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label for="ID"></label>
                        <input type="hidden" class="input form-control" name="id" id="editid" placeholder="Course"
                               required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="student">CODE</label>
                        <input type="text" class="input form-control" name="editcode" id="editcode"
                               placeholder="Enter code" required>
                    </div>


                    <div class="form-group mb-3">
                        <label for="student">DESCRIPTION</label>
                        <input type="text" class="input form-control" name="editdes" id="editdes"
                               placeholder="Enter description" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="edit_course" class="btn btn-primary ">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Edit --}}

{{-- DELETE MODAL --}}

<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete course?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Are you sure you want to Delete this course?</p>
                <label for="ID"></label>
                <input type="hidden" id="delete_pdc" disabled placeholder="Product name">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary delete_btn">Delete</button>
            </div>
        </div>
    </div>
</div>

{{-- END DELETE MODAL --}}

<body>
@include('component.sidebar')

<div class="w3-main" style="margin-left:200px">
    <div class="content">
        @include('component.top')

        <div class="container" style="margin-top: 20px">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">List of Course</h3>
                    <div class="card-tools">

                        <button type="button" id="add_user" class="btn btn-dark float-end mb-3 " data-bs-toggle="modal"
                                data-bs-target="#insertData">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="white"
                                 class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                            </svg>
                            Add course
                        </button>
                    </div>
                </div>


                <div class="card-body">
                    <div class="container-fluid">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>CODE</th>
                                <th>DESCRIPTION</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course as $value)
                            <tr class="studentID">
                                <td>{{$value->id}}</td>
                                <td>{{$value->code}}</td>
                                <td>{{$value->description}}</td>
                                <td>
                                    <button type="button" course-id="{{$value->id}}" course-code="{{$value->code}}"
                                            course-description="{{$value->description}}"
                                            class="btn btn-info editBtn mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="Red"
                                             class="bi bi-pencil-square"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                    </button>
                                    <button type="button" id="btn1"
                                            class="btn btn-danger mb-2 mr-4 btn btn-primary mb-3 mt-2 deleteAction bi bi-archive-fill"
                                            course-id="{{$value->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
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


                $('.deleteAction').on('click', function (e) {
                    e.preventDefault();
                    $('#deleteModal').modal('show');
                    let id = $(this).attr("course-id")
                    $('#delete_pdc').val(id);
                });

                $(document).on('click', '.delete_btn', function (e) {
                    e.preventDefault();
                    var id = $('#delete_pdc').val();

                    $.ajax({
                        type: "POST",
                        url: "/deletecourse",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {id: id},
                        dataType: "json",
                        success: function (response) {
                            location.reload();
                            console.log(response);

                            $('#success_message').text(response.message);
                            $('#deleteModal').modal('hide');

                        }
                    });

                })


                $('.editBtn').on('click', function () {
                    let editid = $(this).attr("course-id")
                    let editcode = $(this).attr("course-code")
                    let editdes = $(this).attr("course-description")


                    $('#editid').val(editid);
                    $('#editcode').val(editcode);
                    $('#editdes').val(editdes);


                    $('#editData').modal('show');
                });


                $('#editDataForm').on('submit', function (e) {
                    e.preventDefault();
                    var editid = $('#editid').val();
                    var editcode = $('#editcode').val();
                    var editdes = $('#editdes').val();


                    $.ajax({
                        type: "POST",
                        url: "/editcourse",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {id: editid, editcode: editcode, editdes: editdes},
                        dataType: "json",
                        success: function (response) {
                            window.location.reload();
                        },
                        error: function (data) {

                        }
                    })

                })

                $("#insertProduct").submit(function (event) {
                    event.preventDefault()
                    $('add_user').text('adding...');
                    $('#insertData').modal('hide');


                    var code = $('#code').val();
                    var description = $('#description').val();


                    $.ajax({
                        type: "POST",
                        url: "/course",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {code: code, description: description},
                        dataType: "json",
                        success: function (response) {
                            window.location.reload();
                        },
                        error: function (data) {

                        }
                    });

                })
            });
        </script>
</body>
</html>
