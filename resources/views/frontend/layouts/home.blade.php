@extends('frontend.layouts.master')
@section('content')
@include('frontend.layouts.slider')
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
@endsection