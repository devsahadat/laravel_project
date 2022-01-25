<!DOCTYPE html>
<html>
<head>
    <title>Laravel Project</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/customize.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <!-- Header Section -->
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a href="" class="navbar-brand"><img src="{{asset('public/frontend/image/logo.png')}}" style="height: 45px;"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav popular">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu" style="background-color: #BADDf8;">
                                <a href="aboutus.html" class="dropdown-item">About Us</a>
                                <a href="mission.html" class="dropdown-item">Mission</a>
                                <a href="" class="dropdown-item">Vission</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">News and Events</a>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                        <a href="" class="nav-item nav-link">Login</a>
                    </div>
                    <div class="navbar-nav">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-success">
                                        Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- Slider Section -->
    <section class="slider_part">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active" ></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active" ></li>
            </div>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active" style="background-image: url('public/frontend/image/slider1.jpg')">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="display-4">First slide label</h2>
                  <p class="lead">Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image: url('public/frontend/image/slider2.jpg')">
                <div class="carousel-caption d-none d-md-block">
                  <Second class="display-4">Second slide label</h2>
                  <p class="lead">Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item" style="background-image: url('public/frontend/image/slider3.jpg')">
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="display-4">Third slide label</h2>
                  <p class="lead">Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>
    <!-- Mission and Vission -->
    <section class="mission-vission">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 style="padding-top:15px; padding-bottom:5px; border-bottom:1px solid; width:70%;">Mission and Vission</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('public/frontend/image/mission.jpg')}}" style="border: 1px solid #ddd; padding: 5px; background:#efee11; border-radius: 25px; float: left; margin-right: 10px; ">
                    <p style="text-align: justify;"><strong>Mission:</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('public/frontend/image/vision.jpg')}}" style="border: 1px solid #ddd; padding: 5px; background:#efee11; border-radius: 25px; float: left; margin-right: 10px; ">
                    <p style="text-align: justify;"><strong>Vision:</strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </section>
    <!-- News and Events -->
    <section class="news_events" style="background-color: #ddd;">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="padding-top: 15px;">
                    <h3 style="border-bottom: 1px solid #000; width: 85%;">News and Events</h3>
                </div>
                <div class="col-md-9" style="padding-top: 15px;">
                    <table class="table table-striped table-bordered table-hover table-md table-warning">
                        <thead class="table-dark">
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>24/12/2021</td>
                                <td><img src="{{asset('public/frontend/image/news 1.jpg')}}"></td>
                                <td>Dummy Content</td>
                                <td><a href="" class="btn btn-success">Details</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>24/12/2021</td>
                                <td><img src="{{asset('public/frontend/image/news 2.jpg')}}"></td>
                                <td>Dummy Content</td>
                                <td><a href="" class="btn btn-success">Details</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>24/12/2021</td>
                                <td><img src="{{asset('public/frontend/image/news 3.jpg')}}"></td>
                                <td>Dummy Content</td>
                                <td><a href="" class="btn btn-success">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="our_services">
        <div class="container" style="padding-top: 15px;">
            <!-- Nav tab -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#service" class="nav-link active" data-toggle="tab">Our Services</a>
                </li>
                <li class="nav-item">
                    <a href="#expertise" class="nav-link" data-toggle="tab">Our Expertise</a>
                </li>
                <li class="nav-item">
                    <a href="#product" class="nav-link" data-toggle="tab">Our Products</a>
                </li>
            </ul>
            <!-- Tab Content -->
            <div class="tab-content">
                <div id="service" class="container tab-pane active">
                    <h3>Our Services</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores iure iste, molestiae officiis ex repudiandae delectus recusandae earum nesciunt inventore eligendi voluptates provident, ullam, magnam unde! Adipisci, deleniti dolor tenetur iusto in consectetur quas, sunt iure dolorum, nostrum tempora inventore.</p>
                </div>
                <div id="expertise" class="container tab-pane fade">
                    <h3>Our Expertise</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores iure iste, molestiae officiis ex repudiandae delectus recusandae earum nesciunt inventore eligendi voluptates provident, ullam, magnam unde! Adipisci, deleniti dolor tenetur iusto in consectetur quas, sunt iure dolorum, nostrum tempora inventore.</p>
                </div>
                <div id="product" class="container tab-pane fade">
                    <h3>Our Product</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores iure iste, molestiae officiis ex repudiandae delectus recusandae earum nesciunt inventore eligendi voluptates provident, ullam, magnam unde! Adipisci, deleniti dolor tenetur iusto in consectetur quas, sunt iure dolorum, nostrum tempora inventore.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Part -->
    <section class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 style="color: white;">Contact Us</h4>
                    <p style="color: white;">
                        Address: Shahi Eidgah, Sylhet, Mobile: 01738309749, Email: cse.devsahadat@gmail.com
                    </p>
                </div>
                <div class="col-md-4">
                    <h4 style="color: white;">Follow Us</h4>
                    <div class="social" style="margin-left: -42px;">
                        <ul>
                            <li><a href="https://facebook.com/sahadat49" target="blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://facebook.com/sahadat49" target="blank"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="https://facebook.com/sahadat49" target="blank"><i class="fab fa-youtube"></i></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p style="color: white;padding: 50px 0px 10px 0px; ">Copyright &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> @Developer Sahadat
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="gotoup">
                    <img src="{{asset('public/frontend/image/gotoup.png')}}" style="width: 40px;height: 40px;">
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/jquery-3.2.1.slim.min.js"></scrip> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"> 
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()>300){
                $('.gotoup').fadeIn();
            }
            else{
                $('.gotoup').fadeOut();
            }
        });
        $('.gotoup').click(function(){
           $('html,body').animate({scrollTop:0},500);
        });
    });
        </script>
    <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
</body>  
</html>     