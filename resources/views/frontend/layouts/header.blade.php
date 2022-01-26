<!-- Header Section -->
<section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a href="{{url('')}}" class="navbar-brand"><img src="{{asset('public/frontend/image/logo.png')}}" style="height: 45px;"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav popular">
                        <a href="{{url('')}}" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu" style="background-color: #BADDf8;">
                                <a href="{{route('about.us')}}" class="dropdown-item">About Us</a>
                                <a href="mission.html" class="dropdown-item">Mission</a>
                                <a href="" class="dropdown-item">Vission</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">News and Events</a>
                        <a href="{{route('contact.us')}}" class="nav-item nav-link">Contact Us</a>
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