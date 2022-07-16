<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        @foreach ($banners as $key => $banner)
        <li data-target="#myCarousel" data-slide-to="0" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        @foreach ($banners as $key => $banner)
        <div class="item {{ $key == 0 ? 'active' : '' }}">
          <img src="{{ asset('img/banner') }}/{{ $banner->images }}" style="width:100%; height:500px">
        </div>            
        @endforeach
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>