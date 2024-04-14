<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="main-container d-flex">
        @include('component.sidebar')


        <div class="content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body" style="background-color:beige; height:150px">
                                    <textarea id="w3review" name="w3review" rows="3" cols="50" placeholder="Share What's New?"></textarea>
                                    <br>
                                <button type="button" class="btn btn-light mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
                                    <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086z"/>
                                </svg></button>
                                <button type="button" class="btn btn-light mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/>
                                </svg></button>
                                <button type="button" class="btn btn-light mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                                </svg></button>
                                <button type="button" class="btn btn-light mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                                </svg></button>
                                <button type="button" class="btn btn-light mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                                </svg></button>
                                <button type="button"class="btn btn-success mt-1" style="margin-left: 415px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                                </svg> Post</button>
                            </div>
                          </div>
                          <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="container mt-3 mb-2">
                                        <img src="/css/test.jpg" width="60" class="img-thumbnail rounded-circle  mb-2">
                                        <label class="mb-2">Jansen Tan</label>

                                     <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
                                     </div>
                                     <div class="container">
                                    <img src="/css/user.jpg" class="card-img-top" alt="..." style="border-radius:30px;">
                                    <div class="card-body">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12" style="padding-bottom: 10px">
                                            <button type="button"  class="btn btn-outline-primary mb-100"><svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                            </svg></button>
                                        </div>

                                        <div class="col-lg-12 mb-2 row" >
                                            <div class="col-lg-3">
                                                <img src="/css/test.jpg" width="60" class="img-thumbnail rounded-circle  mb-2">
                                                <label class="mb-2">Jansen Tan</label>
                                            </div>
                                            <div class="col-lg-9" style="border:black 1px solid;1">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis odio nec est placerat porta. Integer congue dui nec nisl venenatis, vel faucibus nunc consequat. Ut mattis ex vel bibendum cursus. Ut quis aliquet augue. Ut nec orci non quam viverra condimentum. Suspendisse eu egestas nunc, sed dignissim tellus. Aliquam erat volutpat. Aliquam arcu turpis, accumsan eget lorem pellentesque, tristique faucibus lorem. Suspendisse est velit, interdum sed nibh eu, ultricies aliquam massa. Nam pretium ornare urna, ut dictum felis porttitor a. Phasellus quis tincidunt turpis. Etiam finibus est sem, vel dictum est faucibus eget. Nulla laoreet, risus et pretium aliquet, erat justo dictum nisi, dignissim dapibus turpis est ut est. Fusce luctus ipsum nisl, a vulputate augue sodales vitae.
                                            </div>
                                        </div>



                                        <div class="col-lg-12 mb-2 row" >
                                            <div class="col-lg-3">
                                                <img src="/css/test.jpg" width="60" class="img-thumbnail rounded-circle  mb-2">
                                                <label class="mb-2">Jansen Tan</label>
                                            </div>
                                            <div class="col-lg-9" style="border:black 1px solid;1">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis odio nec est placerat porta. Integer congue dui nec nisl venenatis, vel faucibus nunc consequat. Ut mattis ex vel bibendum cursus. Ut quis aliquet augue. Ut nec orci non quam viverra condimentum. Suspendisse eu egestas nunc, sed dignissim tellus. Aliquam erat volutpat. Aliquam arcu turpis, accumsan eget lorem pellentesque, tristique faucibus lorem. Suspendisse est velit, interdum sed nibh eu, ultricies aliquam massa. Nam pretium ornare urna, ut dictum felis porttitor a. Phasellus quis tincidunt turpis. Etiam finibus est sem, vel dictum est faucibus eget. Nulla laoreet, risus et pretium aliquet, erat justo dictum nisi, dignissim dapibus turpis est ut est. Fusce luctus ipsum nisl, a vulputate augue sodales vitae.
                                            </div>
                                        </div>


                                        <div class="col-lg-11">
                                            <textarea type="text" class="input" placeholder="Write a comment"rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-1">
                                            <button class='primaryContained mb-10' style="width: 100%" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="16" fill="currentColor" class="bi bi-send-arrow-up-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15.854.146a.5.5 0 0 1 .11.54L13.026 8.03A4.5 4.5 0 0 0 8 12.5c0 .5 0 1.5-.773.36l-1.59-2.498L.644 7.184l-.002-.001-.41-.261a.5.5 0 0 1 .083-.886l.452-.18.001-.001L15.314.035a.5.5 0 0 1 .54.111M6.637 10.07l7.494-7.494.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154z"/>
                                            <path fill-rule="evenodd" d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354a.5.5 0 0 0-.722.016l-1.149 1.25a.5.5 0 1 0 .737.676l.28-.305V14a.5.5 0 0 0 1 0v-1.793l.396.397a.5.5 0 0 0 .708-.708z"/>
                                            </svg></button>
                                        </div>
                                     </div>
                                    </div>
                                  </div>
                            </div>

                          </div>
                    </div>

                    <div class="col-lg-4 mt-5">


                                <div class="month">
                                    <ul>
                                      <li class="prev">&#10094;</li>
                                      <li class="next">&#10095;</li>
                                      <li>
                                        August<br>
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
                                    <li><span class="active">10</span></li>
                                    <li>11</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                    <li>15</li>
                                    <li>16</li>
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


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>


