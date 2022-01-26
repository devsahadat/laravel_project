<!DOCTYPE html>
<html>
<head>
    <title>Laravel Project</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/customize.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
@include('frontend.layouts.header')
@yield('content')
@include('frontend.layouts.footer')
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