@extends ('layouts.default')

@section ('content')
<section id='slide'>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="banner" style="background-image:url({{asset('images/pointx-1.jpg')}});"></div>
        <div class="carousel-caption">
            <h1>We are <span>PointX & Zest</span></h1>
            <h4>We offer <span>Quality</span></h4>
            <p><a href="#">Contact us</a></p>
        </div>
    </div>
    <div class="carousel-item">
      <div class="banner" style="background-image:url({{asset('images/pointx-2.jpg')}});"></div>
        <div class="carousel-caption">
            <h1>We are <span>PointX & Zest</span></h1>
            <h4>We offer <span>Quality</span></h4>
            <p><a href="#">Contact us</a></p>
        </div>
    </div>
    <div class="carousel-item">
      <div class="banner" style="background-image:url({{asset('images/pointx-3.jpg')}});"></div>
        <div class="carousel-caption">
            <h1>We are <span>PointX & Zest</span></h1>
            <h4>We offer <span>Quality</span></h4>
            <p><a href="#">Contact us</a></p>
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

<section id="tab">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-6  tabbed">
        <span><i class="fas fa-sort-amount-up"></i></span>
        <h2>Software Deployment</h2>
      </div>

      <div class="col-xl-3 col-6  tabbed">
        <span><i class="fas fa-user-cog"></i></span>
        <h2>Brands and Marketing</h2>
      </div>

      <div class="col-xl-3 col-6 tabbed">
        <span><i class="fas fa-user-cog"></i></span>
        <h2>Website Development</h2>
      </div>

      <div class="col-xl-3 col-6 tabbed">
        <span><i class="fas fa-user-cog"></i></span>
        <h2>Result Oriented SEO</h2>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-6  tabbed">
        <span><i class="fas fa-sort-amount-up"></i></span>
        <h2>Software Deployment</h2>
      </div>

      <div class="col-xl-3 col-6  tabbed">
        <span><i class="fas fa-user-cog"></i></span>
        <h2>Brands and Marketing</h2>
      </div>

      <div class="col-xl-3 col-6 tabbed">
        <span><i class="fas fa-user-cog"></i></span>
        <h2 class="text-center">Website Development</h2>
      </div>

      <div class="col-xl-3 col-6 tabbed">
        <span><i class="fas fa-user-cog"></i></span>
        <h2>Result Oriented SEO</h2>
      </div>
    </div>
  </div>

</section>

<section id="portfolio">

  

</section>

<section>
  <div class="jumbotron text-center">
  <h1 class="display-4 text-center">Our Projects</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  

  <div class="row" id="portfolio">
  <div class="col-md-3 col-sm-6 col-6">
    <div class="thumbnail">
      <a href="#">
        <img src="{{asset('images/smats.jpg')}}" alt="Lights" style="width:100%">
        <div class="caption">
          <p href="#" class="btn btn-outline-primary">lorem ipsum..</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6">
    <div class="thumbnail">
      <a href="#">
        <img src="{{asset('images/dazzlings.jpg')}}" alt="Nature" style="width:100%">
        <div class="caption">
          <p href="#" class="btn btn-outline-primary">lorem ipsum..</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-6">
    <div class="thumbnail">
      <a href="#">
        <img src="{{asset('images/smats.jpg')}}" alt="Fjords" style="width:100%">
        <div class="caption">
          <p href="#" class="btn btn-outline-primary">lorem ipsum..</p>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-sm-6 col-6">
    <div class="thumbnail">
      <a href="#">
        <img src="{{asset('images/dazzlings.jpg')}}" alt="Fjords" style="width:100%">
        <div class="caption">
          <p href="#" class="btn btn-outline-primary">lorem ipsum..</p>
        </div>
      </a>
    </div>
  </div>
</div>


  
</div>
</section>

<section id="about-section">

  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-5 col-12">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sapiente illo doloremque id doloribus quidem, cupiditate modi commodi qui, vel, tempore magnam facere voluptatibus aliquam.</p>
       <a type="button" class="btn btn-outline-primary" href="#">About Us</a>
      </div>
      <div class="col-xl-7 col-12">

      </div>

    </div>  
  </div>
</section>





@endsection