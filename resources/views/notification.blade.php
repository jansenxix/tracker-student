<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
@include('component.sidebar')

    <div class="w3-main" style="margin-left:200px">
        @include('component.top')

        <div class="content">
            <div class="container">
                <h2>Notifications</h2>
                <ul class="list-group" id="notification-list">
                </ul>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function() {
            getNotifications();
            function getNotifications() {
                const user = JSON.parse(localStorage.getItem("user"))
                $.ajax({
                    type:"GET",
                    url: "/notification/"+user.id ,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    dataType: "json",
                    success: function(response){

                        for (const notification of response.notification) {
                            $("#notification-list").append(`<li class="list-group-item notification-item" data-id="${notification.post_id}" data-notif-id="${notification.id}" style="cursor: pointer; font-weight: bold">
                                                ${notification.description} <span style="position: absolute; right: 10px; color: red">${new Date(notification.created_at).toLocaleString()}</span</li>`)
                        }

                        if(response.notification.length === 0)
                            $("#notification-list").append(`<li class="list-group-item" style="text-align: center">No Notification</li>`)



                        $(".notification-item").on("click", function () {
                            const id = $(this).attr("data-id")
                            const notifId = $(this).attr("data-notif-id")
                            location.href = "/post/"+id+"/"+notifId
                        })
                    }
                });
            }
        })
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>


