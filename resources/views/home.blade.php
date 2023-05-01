@extends('layouts.app')
@section('content')

@include('partials.side-nav')

<section class="content active" id="home">
    <div class="home-section">
      <h2>Web. & App. <span>Development</span></h2>
      <div class="text-box">
        <h3>Hi, I'm <span>Mohamed Chakib Mastouri</span></h3>
        <p>
          This is my official portfolio webside related to my workline.
          I provide services as front- & back- end web. developement and maintaining the technical issues.
          <br>
          <i class="fa-solid fa-arrow-right"></i> to Read More <a href="./cv.html">click hier...</a>
        </p>
        <div class="media-icons">
          <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
          <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
          <a href="#" class="icon"><i class="fab fa-google"></i></a>
          <a href="#" class="icon"><i class="fab fa-yahoo"></i></a>
      </div>
      </div>
    </div>
</section>





@endsection
