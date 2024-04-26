<!DOCTYPE html>
<html lang="en">
@include('component.header')





<body>
@include('component.sidebar')

<div class="w3-main" style="margin-left:200px">
    <div class="content">
        @include('component.top')

        <div class="container" style="margin-top: 20px">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Useful competencies</h3>
                    <div class="card-tools">

                      
                    </div>
                </div>


                <div class="card-body">
                    <div class="container-fluid">
                        <table class="table table-hover table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Student #</th>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Year and Term</th>
                                <th>Communication skills</th>
                                <th>Human Relation skills</th>
                                <th>Entrepreneurial skills</th>
                                <th>Information Technology skills</th>
                                <th>Problem Solving skills</th>
                                <th>Critical Thinking skills</th>
                                <th>Others</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                              
                            </tr>
                      
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

              
               
            });
        </script>
</body>
</html>
