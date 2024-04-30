<!DOCTYPE html>
<html lang="en">
@include('component.header')
<body>
@include('component.sidebar')

<div class="w3-main" style="margin-left:200px">
    <div class="content">
        @include('component.top')

        <div class="container">
            @include('form3')
        </div>
    </div>
</div>


</body>
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

        $("#editfile").change(function () {

            var fileName = $(this).val().split('\\').pop();
            let path = "image/" + fileName;
            $("#editFileImage").attr("src", path);
        });


        $("#file").change(function () {

            var fileName = $(this).val().split('\\').pop();
            let path = "image/" + fileName;
            $("#fileImage").attr("src", path);
        });

        $('.deleteAction').on('click', function (e) {
            e.preventDefault();
            $('#deleteModal').modal('show');
            let id = $(this).attr("admin-id")
            $('#delete_pdc').val(id);
        });

        $(document).on('click', '.delete_btn', function (e) {
            e.preventDefault();
            var id = $('#delete_pdc').val();

            $.ajax({
                type: "POST",
                url: "/deleteadmin",
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
            let id = $(this).attr("admin-id")
            let editfName = $(this).attr("admin-fname")
            let editUname = $(this).attr("admin-uname")
            let editpass = $(this).attr("admin-pass")
            let editfile = $(this).attr("admin-file")
            let userType = $(this).attr("admin-userType")
            let path = "image/" + editfile;
            $("#editFileImage").attr("src", path);


            $('#editid').val(id);
            $('#editfName').val(editfName);
            $('#edituName').val(editUname);
            $('#editpass').val(editpass);
            $('#editFileName').val(editfile);
            $('#userType').val(userType);

            $('#editData').modal('show');
        });


        $('#editDataForm').on('submit', function (e) {
            e.preventDefault();
            var editid = $('#editid').val();
            var editfName = $('#editfName').val();
            var editUname = $('#edituName').val();
            var editfile = $('#editfile').val();
            var editpass = $('#editpass').val();

            var formData = new FormData(this);


            $.ajax({
                type: "POST",
                url: "/updatecourse",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                dataType: "json",
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Set content type to false
                success: function (response) {
                    window.location.reload();
                },
                error: function (data) {

                }
            })

        })

        $("#insertProduct").submit(function (e) {
            event.preventDefault()

            var uName = $('#uName').val();
            var fName = $('#fName').val();
            var file = $('#file').val();
            var pass = $('#pass').val();

            var formData = new FormData(this);
            $('add_user').text('adding...');
            $('#insertData').modal('hide');


            $.ajax({
                type: "POST",
                url: "/adminlist",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                dataType: "json",
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Set content type to false
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
