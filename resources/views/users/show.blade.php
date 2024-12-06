@extends('layouts.app')

@section('title', $user->name . '\'s Page')

@section('content')
<main>
  <div class="container">
    <div class="img"
      style="    background-image: linear-gradient(150deg, rgba(63, 174, 255, .3)15%, rgba(63, 174, 255, .3)70%, rgba(63, 174, 255, .3)94%), url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);height: 350px;background-size: cover;">
    </div>
    <div class="card social-prof">
      <div class="card-body">
        <div class="wrapper">
          <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="user-profile">
          <h3>{{ $user->name }}</h3>
          <p>{{ $user->email }}</p>
        </div>
        <div class="row ">
          <div class="col-lg-12">
            <ul class=" nav nav-tabs justify-content-center s-nav">
              <li><a href="{{ route('users.show', $user->id) }}"
                  class="{{ active_class(if_query('tab', null)) }}">Topics</a></li>
              <li><a href="{{ route('users.show', [$user->id, 'tab' => 'replies']) }}"
                  class="{{ active_class(if_query('tab', 'replies')) }}">Replies</a></li>
              <li><a href="{{ route('users.show', [$user->id, 'tab' => 'edit']) }}"
                  class="{{ active_class(if_query('tab', 'edit')) }}">プロフィールの編集</a></li>
              {{-- <li><a href="#">TimeLine</a></li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <div class="h7 "><strong>Name :</strong> {{ $user->name }}</div>
            <div class="h7"><strong>About :</strong> {{ $user->introduction }}
            </div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="h6 text-muted">Followers</div>
              <div class="h5">5.2342</div>
            </li>
            <li class="list-group-item">
              <div class="h6 text-muted">Following</div>
              <div class="h5">6758</div>
            </li>
            <li class="list-group-item">
              <div class="h6 text-muted">Themes</div>
              <div class="h5">6758</div>
            </li>
          </ul>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Latest Photos</h3>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item active">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="d-block w-100" alt="...">
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
          </div>
        </div>
      </div>
      <div class="col-lg-9 gedf-main">
        <div class="card social-timeline-card">
          <div class="card-body">
            @if (if_query('tab', 'replies'))
            @include('users._replies', [
            'replies' => $user->replies()->with('topic')->recent()->paginate(4),
            ])
            @elseif(if_query('tab', 'edit'))
            @include('users.edit')
            @else
            @include('users._topics', [
            'topics' => $user->topics()->recent()->paginate(8),
            ])
            @endif
          </div>
        </div>

      </div>

    </div>

  </div>
</main>
@stop


<style>
  .card {
    margin-bottom: 35px;
    box-shadow: 0 10px 20px 0 rgba(26, 44, 57, 0.14);
    border: none;
  }



  .social-prof {
    color: #333;
    text-align: center;
  }

  .social-prof .wrapper {
    width: 70%;
    margin: auto;
    margin-top: -100px;
  }

  .social-prof img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
    border: 5px solid #fff;
    /*border: 10px solid #70b5e6ee;*/
  }

  .social-prof h3 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 0;
  }



  .social-prof .nav-tabs {
    border: none;
  }



  .card .nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    font-weight: 300;
    border-radius: 4px;
  }


  .card .s-nav>li>a.active {
    text-decoration: none;
    background-color: #3afe;
    color: #fff;
  }
</style>