
@extends("layout.main")


@section("title")
Movies | Home
@endsection


@section("content")


    <div class="home-bg">
      <div class="text-center">

        <a class="learn-more" href="{{route("movies")}}">
          <span class="circle" aria-hidden="true">
            <span><i class="fa-solid fa-hand-pointer fa-beat"></i></span>
          </span>
          <span class="button-text">Movie List</span>
        </a>
      </div>

    </div>

@endsection
