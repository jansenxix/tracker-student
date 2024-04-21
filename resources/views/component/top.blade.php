<style>
    .mailbox {
        position: relative;
        font-size: 16px;
        line-height: 2.5em;
        margin: 0.3em;
        background-color: transparent;
        border: none;
    }

    .notification {
        /* circle shape, size and position */
        position: absolute;
        right: -0.7em;
        top: -0.7em;
        min-width: 1.6em; /* or width, explained below. */
        height: 1.6em;
        border-radius: 0.8em; /* or 50%, explained below. */
        border: 0.05em solid white;
        background-color: red;

        /* number size and position */
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.8em;
        color: white;
    }
</style>
<div class="w3-teal" style="margin-bottom: 80px;background-color: #3a3a3a !important;opacity: 0.9;display: flex;">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()" style="background-color: #3a3a3a !important; color: #6b0011;opacity: 0.9">&#9776;</button>
    <div class="w3-container w3-hide-small w3-hide-medium" style="background-color: #3a3a3a; font-weight: bolder; font-size: 40px; opacity: 0.9; padding: 10px">
        Alumni Tracer System
    </div>
    <div class="w3-container w3-hide-large" style="padding: 10px">
        <img src="/image/logo.jpg" style="width: 57px; height: 57px">
    </div>
    <div style="right: 10px; position: absolute; padding: 10px;  cursor: pointer; z-index: 100000000">
        <button class="mailbox" id="mailbox"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="width: 30px; height: 30px;vertical-align: middle;fill: white;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1"><path d="M905.846154 649.846154h-9.846154c-37.415385 0-68.923077-31.507692-68.923077-68.923077V354.461538c0-179.2-149.661538-322.953846-330.830769-315.076923C326.892308 47.261538 196.923077 192.984615 196.923077 364.307692v218.584616c0 37.415385-31.507692 66.953846-68.923077 66.953846H118.153846c-43.323077 0-78.769231 37.415385-78.769231 80.738461v29.538462c0 13.784615 13.784615 27.569231 29.538462 27.569231h886.153846c15.753846 0 29.538462-13.784615 29.538462-29.538462V728.615385c0-43.323077-35.446154-78.769231-78.769231-78.769231zM608.492308 866.461538h-192.984616c-11.815385 0-21.661538 11.815385-19.692307 23.63077 9.846154 55.138462 59.076923 94.523077 116.184615 94.523077s106.338462-41.353846 116.184615-94.523077c1.969231-11.815385-7.876923-23.630769-19.692307-23.63077z"/></svg>
            <div class="notification" role="status" id="notification-count">0</div>
        </button>
        <div class="w3-dropdown-hover" onmouseover="this.style.color='white'">
            <button class="w3-button w3-bar-item" style="background-color: #3a3a3a !important; color: white">
                <img id="top-avatar" src="/image/logo.jpg" alt="Avatar" style="margin-right: 10px;vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
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
        getNotifications();
        function getUser() {
            $.ajax({
                type:"GET",
                url: "/user" ,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
                success: function(response){
                    $("#profile-name").html(response.fName);
                    $("#top-avatar").attr('src', `/image/${response.file}`);
                }
            });
        }
        function getNotifications() {
            const user = JSON.parse(localStorage.getItem("user"))
            $.ajax({
                type:"GET",
                url: "/notification/"+user.id ,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
                success: function(response){
                    $("#notification-count").html(response.count)
                }
            });
        }
        $("#mailbox").on("click", function () {
            location.href = "/notif"
        })
    })
</script>
