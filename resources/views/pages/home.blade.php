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

<section id="tabbed">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <span><i class="fas fa-user-cog"></i></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>
      </div>

      <div class="col-md-3 col-sm-6">
        <span><i class="fas fa-user-cog"></i></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>

      </div>

      <div class="col-md-3 col-sm-6">
        <span>
          <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
        </span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>

      </div>

      <div class="col-md-3 col-sm-6">
        <span><i class="fas fa-user-cog"></i></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>

      </div>

      
    </div>
  </div>

   <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <span><i class="fas fa-user-cog"></i></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>
      </div>

      <div class="col-md-3 col-sm-6">
        <span><i class="fas fa-user-cog"></i></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>

      </div>

      <div class="col-md-3 col-sm-6">
        <span>
          <svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
        </span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>

      </div>

      <div class="col-md-3 col-sm-6">
        <span><i class="fas fa-user-cog"></i></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis iste iure id nisi facilis harum, repellendus laudantium ducimus optio necessitatibus!</p>

      </div>

      
    </div>
  </div>

  

</section>



@endsection