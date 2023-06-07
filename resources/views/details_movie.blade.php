@extends("layout.main")



@section("title")
Movie |  {{$movie->title}}
@endsection



@section("content")
<div class="bg-details">
<div class="personal-container">
    <h1 class="text-center">DETAILS MOVIE </h1>
  <div class="d-flex">

    <div class="personal-card">
      <img src="{{$movie->thumb}}" alt="">
    </div>

    <div class="details">
      <div class="title">
        <h1>Title: {{$movie->title}}</h1>
      </div>
      <div class="price">
        <h4>Original Title: {{$movie->original_title}}</h4>
      </div>
      <div class="description">
        <h4>Nazionality: {{$movie->nationality}}</h4>
      </div>
      <div class="description">
        <h4>Release: {{$movie->date}}</h4>
      </div>
      <div class="description ">
        <h4>Vote: {{$movie->vote}}</h4>
      </div>
      <div class="description last">
        <h5>Plot: {{$movie->description}}</h5>
      </div>

        <a class="md-btn" href="{{route ("movies")}}">back to the list of movies</a>
      </div>

    </div>
  </div>
</div>
</div>

@endsection
