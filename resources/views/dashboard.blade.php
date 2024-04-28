<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
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
                <div class="row">

                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body" style="background-color:beige;">
                                <form id="post" method="post">
                                    @csrf
                                    <textarea id="description" name="w3review" rows="3" cols="50" placeholder="Share What's New?"></textarea>
                                        <br>
                                    <input type="file" id="fileInput" name="files" style="display: none" multiple accept="image/*" />
                                    <button type="button" class="btn btn-light mt-2" id="chooseImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/>
                                    </svg></button>
                                    <button type="button" data-type="0" class="btn btn-light mt-2 post-type" style="color: red"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                                    </svg></button>
                                    <button type="button" data-type="1" class="btn btn-light mt-2 post-type"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                                    </svg></button>
                                    <div id="imageList" class="row mt-2">
                                    </div>
                                    <div style="text-align: right">
                                        <button type="submit" class="btn btn-success mt-1" style=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                                        </svg> Post</button>
                                    </div
                                </form>
                            </div>
                          </div>
                          <div class="row mt-5 post-content">

                          </div>
                          <div id="loading-content" class="card" style="text-align: center; font-size: 20px; margin-top: 10px">
                          </div>
                    </div>

                    <div class="col-lg-4 mt-5">


                                <div class="month">
                                    <ul>
                                      <li class="prev">&#10094;</li>
                                      <li class="next">&#10095;</li>
                                      <li>
                                        April<br>
                                        <span style="font-size:18px">2024</span>
                                      </li>
                                    </ul>
                                  </div>

                                  <ul class="weekdays">
                                    <li>Mo</li>
                                    <li>Tu</li>
                                    <li>We</li>
                                    <li>Th</li>
                                    <li>Fr</li>
                                    <li>Sa</li>
                                    <li>Su</li>
                                  </ul>

                                  <ul class="days">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>

                                    <li>9</li>
                                    <li>10</li>
                                    <li>11</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                    <li>15</li>
                                    <li><span class="active">16</span></li>
                                    <li>17</li>
                                    <li>18</li>
                                    <li>19</li>
                                    <li>20</li>
                                    <li>21</li>
                                    <li>22</li>
                                    <li>23</li>
                                    <li>24</li>
                                    <li>25</li>
                                    <li>26</li>
                                    <li>27</li>
                                    <li>28</li>
                                    <li>29</li>
                                    <li>30</li>
                                    <li>31</li>
                                  </ul>

                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let selectedFiles = []; // Array to store selected files
            let selectedPostType = 0;
            let postCount = 0;
            $(".post-content").html("")
            let isRequest = false;
            getPosts();
            window.addEventListener('scroll', function() {
                let scrollPosition = window.innerHeight + window.scrollY;
                let documentHeight = document.documentElement.scrollHeight;

                if (scrollPosition >= documentHeight - 100) {
                    getPosts()
                }
            });

            $('#fileInput').on('change', function(event) {
                const files = event.target.files; // Get the selected files

                // Loop through each selected file
                for (let i = 0; i < files.length; i++) {
                    selectedFiles.push(files[i]); // Add file to the array
                }

                // Display selected images
                displaySelectedImages();
            });

            function displaySelectedImages() {
                const $imageList = $('#imageList');
                $imageList.empty(); // Clear previous list

                // Loop through selectedFiles array and display images
                $.each(selectedFiles, function(index, file) {
                    const imageType = /^image\//;

                    if (imageType.test(file.type)) { // Check if it's an image file
                        $imageList.append(`<div class="col-lg-3">
                                    <div>
                                        <img src="${URL.createObjectURL(file)}" style="width: 100%; height: 100%"/>
                                   </div>
                                    <button class="btn btn-secondary form-control remove-image" data-index="${index}">Remove</button>
                                   </div>`);
                    }
                });
                $('.remove-image').on('click', function() {
                    const index = $(this).attr("data-index");
                    console.log("test")
                    selectedFiles.splice(index, 1); // Remove file from selectedFiles array
                    displaySelectedImages(); // Update the displayed images
                });

            }

            $("#post").submit(function(event){
                event.preventDefault()
                const formData = new FormData();
                const description = $("#description").val();
                formData.append("description", description);
                formData.append("post_type", selectedPostType);
                $.each(selectedFiles, function(index, file) {
                    formData.append('images[]', file); // Append each selected file to formData
                });
                $.ajax({
                    url: '/post', // Replace with your server endpoint
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert('Posted successfully!');
                        selectedPostType = 0;
                        changeColor()
                        selectedFiles = [];
                        displaySelectedImages()
                        $("#description").val("")
                        postCount = 0;
                        $(".post-content").html("")
                        getPosts();
                    },
                    error: function(error) {
                        alert('Error uploading images.');
                    }
                });
            })

            $(".post-type").on('click', function() {
                selectedPostType = $(this).attr("data-type")
                changeColor();
            })

            function changeColor()
            {
                $(".post-type").each(function () {
                    const itype = $(this).attr("data-type")
                    if(itype == selectedPostType) {
                        $(this).css("color", "red")
                    } else {
                        $(this).css("color", "black")
                    }
                })
            }


            function getPosts()
            {

                if(isRequest === true)
                    return;

                isRequest = true
                const content = $(".post-content")
                $("#loading-content").html("Loading..............")
                $.ajax({
                    url: '/posts', // Replace with your server endpoint
                    type: 'GET',
                    data: {
                        count: postCount
                    },
                    dataType: "json",
                    success: function(response) {
                        isRequest = false
                        for (const post of response) {
                            postCount++;
                            content.append(postContent(post))
                        }

                        if(response.length === 0)
                        {
                            $("#loading-content").html("Nothing More")
                        }

                        $(".post-view").on("click", function () {
                            const id  = $(this).attr("data-id")
                            location.href = "/post/"+id
                        })

                        $(".post-remove").on("click", function () {
                            const id = $(this).attr("data-id")
                            if(isRequest === true)
                                return;

                            isRequest = true
                            $.ajax({
                                url: '/post/delete', // Replace with your server endpoint
                                type: 'POST',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: {
                                    id
                                },
                                success: function (response) {
                                    isRequest = false;
                                    const id  = $(this).attr("data-id")
                                    location.reload()

                                }
                            })

                        })

                        $(".comment-remove").on("click", function () {
                            const id = $(this).attr("data-id")
                            if(isRequest === true)
                                return;

                            isRequest = true
                            $.ajax({
                                url: '/comment/delete', // Replace with your server endpoint
                                type: 'POST',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: {
                                    id
                                },
                                success: function (response) {
                                    isRequest = false;
                                    const id  = $(this).attr("data-id")
                                    location.reload()

                                }
                            })

                        })

                        $(".comment").on("click", function () {

                            if(isRequest === true)
                                return;

                            isRequest = true
                            const id = $(this).attr("data-id")
                            const description = $("#description"+id).val()

                            if(!description)
                            {
                                alert("Enter Comment!");
                                return
                            }

                            $.ajax({
                                url: '/comment', // Replace with your server endpoint
                                type: 'POST',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: {
                                    id,
                                    description
                                },
                                success: function (response) {
                                    isRequest = false;
                                    alert("Comment Successfully!")
                                    location.href = "/post/"+id
                                }
                            })
                        })
                    },
                    error: function(error) {
                        alert('Error uploading images.');
                    }
                });
            }

            function postContent(post) {
                let user = localStorage.getItem("user");
                if(user)
                    user = JSON.parse(user);

                let remove = "";

                if(user.id === post.admin_id) {
                    remove = `<div style="margin-top: -15px"><a href="javascript:void(0)" class="post-remove" data-id="${post.id}">Remove</a></div>`;
                }

                let postType = `Announcement <svg style="margin-top: -10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                                    </svg> `

                if(post.post_type == 1)
                {
                    postType = `Job Posting <svg style="margin-top: -8x" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                                    </svg>`
                }

                return `<div class="col-lg-12" style="padding-top: 10px">
    <div class="card">
 <div class="card-body">
        <div class="mt-3 mb-2">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <img src="/image/${post.admin.file}" style="width: 60px; height: 60px"
                         class="img-thumbnail rounded-circle  mb-2">
                    <label class="mb-2">${post.admin.fName}</label>
                </div>
                <div class="col-lg-6 col-sm-6" style="font-weight: bold; text-align: right">
                        ${remove}
                        <div style="color: green">${postType}</div>
                       ${new Date(post.created_at).toLocaleString()}
                </div>
            </div>
            <p class="card-text post-view" data-id="${ post.id }" style="cursor: pointer">${post.description}</p>
        </div>

        <div class="row">
            <div class="col-lg-12"  style="margin-bottom: 10px">
                ${postImage(post)}
            </div>
            <div class="col-lg-12"  style="margin-bottom: 10px">
                <div style="border-top: 1px solid #23ffd3; margin-top: 10px"></div>
            </div>

            <div class="col-lg-12" style="overflow-y: scroll; max-height:400px; padding-top: 10px;">
                ${postComment(post.comments)}
            </div>
            <div class="col-lg-12" style="padding-top: 20px">
                        <textarea type="text" class="input" placeholder="Write a comment" rows="3" id="description${post.id}"></textarea>
                        <div style="float: right">
                            <button class='primaryContained comment' style="width: 150px;" data-id="${post.id}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" fill="currentColor"
                                     class="bi bi-send-arrow-up-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M15.854.146a.5.5 0 0 1 .11.54L13.026 8.03A4.5 4.5 0 0 0 8 12.5c0 .5 0 1.5-.773.36l-1.59-2.498L.644 7.184l-.002-.001-.41-.261a.5.5 0 0 1 .083-.886l.452-.18.001-.001L15.314.035a.5.5 0 0 1 .54.111M6.637 10.07l7.494-7.494.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154z"/>
                                    <path fill-rule="evenodd"
                                          d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354a.5.5 0 0 0-.722.016l-1.149 1.25a.5.5 0 1 0 .737.676l.28-.305V14a.5.5 0 0 0 1 0v-1.793l.396.397a.5.5 0 0 0 .708-.708z"/>
                                </svg>
                            </button>
                        </div>
                </div>
        </div>

    </div>
</div>
</div>
`
            }



            function postComment(comments) {
                let display = "";


                let user = localStorage.getItem("user");
                if(user)
                    user = JSON.parse(user);


                for (const comment of comments) {

                    let remove = "";

                    if(user.id === comment.admin_id) {
                        remove = `<div style="margin-top: -15px"><a href="javascript:void(0)" class="comment-remove" data-id="${comment.id}">Remove</a></div>`;
                    }

                    display += `<div class="col-lg-12 mb-2 row" style="border:#23ffd3 1px solid; padding: 15px; margin-left: 6px">
                    <div class="col-lg-6">
                            <img src="/image/${comment.admin.file}" style="width: 60px; height: 60px" class="img-thumbnail rounded-circle  mb-2">
                            <label class="mb-2">${comment.admin.fName}</label>
                    </div>
                    <div class="col-lg-6" style="text-align: right; font-weight: bold">
                            ${remove}
                            ${new Date(comment.created_at).toLocaleString()}
                    </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-8" style="border:#23ffd3 1px solid; padding: 15px">
                            ${comment.description}
                    </div>
                </div>`
                }

                return display;
            }

            function postImage(post){
                const images = post.images.split("|")

                if(images.length === 1 && !images[0])
                    return "";

                let li = "";
                let imageDev = "";

                let index = 0;

                for (const image of images) {
                    li += `<li data-target="#myCarousel${post.id}" data-slide-to="${index}" class="${index === 0 ? 'active' : ''}"></li>`
                    imageDev += `<div class="item ${index === 0 ? 'active' : ''}">
                            <img src="/image/${image}" alt="Los Angeles" style="width:100%; height: 450px">
                          </div>`
                    index++;
                }

                let controls = "";
                if(images.length > 1)
                    controls = `<a class="left carousel-control" href="#myCarousel${post.id}" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel${post.id}" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>`;

                return `
                      <div id="myCarousel${post.id}" class="carousel slide" data-ride="carousel" >
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          ${li}
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="border-radius: 10px !important;">
                               ${imageDev}
                        </div>

                        <!-- Left and right controls -->
                        ${controls}
                      </div>`
            }




        });
        $('#chooseImages').on('click', function() {
            $('#fileInput').click();
        });



    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>


