<div class="w3-teal" style="margin-bottom: 80px;background-color: #3a3a3a !important;opacity: 0.9;display: flex;">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()" style="background-color: #3a3a3a !important; color: #6b0011;opacity: 0.9">&#9776;</button>
    <div class="w3-container w3-hide-small" style="background-color: #3a3a3a; font-weight: bolder; font-size: 40px; opacity: 0.9; padding: 10px">
        Tracer System
    </div>
    <div class="w3-container w3-hide-large" style="padding: 10px">
        <img src="/image/logo.jpg" style="width: 50px;">
    </div>
    <div style="right: 10px; position: absolute; padding: 10px;  cursor: pointer; z-index: 100000000" ">
        <div class="w3-dropdown-hover" onmouseover="this.style.color='white'>
            <button class="w3-button w3-bar-item" style="background-color: #3a3a3a !important; color: white" ">
                <img id="avatar" src="/image/logo.jpg" alt="Avatar" style="margin-right: 10px;vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
                <span id="profile-name"></span>
            </button>
            <div class="w3-dropdown-content w3-bar-block" style="background-color: #3a3a3a; color: white; z-index: 100000000">
                <a class="w3-bar-item w3-button" href="/profile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                    </svg> Profile Information</a>
                <a class="w3-bar-item w3-button" href="/logout"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                    </svg> Logout</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        getUser();
        function getUser() {
            $.ajax({
                type:"GET",
                url: "/user" ,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
                success: function(response){
                    $("#profile-name").html(response.fName);
                    $("#avatar").attr('src', `image/${response.file}`);
                }
            });
        }
    })
</script>
