<!DOCTYPE html>
<html lang="en">
@include('component.header')
<body>
@include('component.sidebar')

<div class="w3-main" style="margin-left:200px">
    <div class="content">
        @include('component.top')

        <div class="container">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">List of Student Registered</h3>
                </div>

                <div class="card-body">
                    <div class="container-fluid">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped" id="myTable">

                                <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Full Name</th>
                                    <th>User Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admin as $value)
                                <tr class="studentID">
                                    <td><img src="image/{{$value->file}}"
                                             style=" width:45px; height:45px;  object-fit:cover;  object-position:center center; border-radius:100%;">
                                    </td>
                                    <td>{{$value->fName}}</td>
                                    <td>{{$value->Uname}}</td>
                                    <td>
                                        <button type="button" data-id="{{$value->id}}" class="btn btn-info editBtn mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="Red"
                                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd"
                                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
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


</body>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>


    $(document).ready(function () {
        let table = new DataTable('#myTable');
        $(".editBtn").on("click", function () {
            const id = $(this).attr("data-id")
            location.href = "/registered-student/detail/"+id
        })
    });
</script>
</html>
