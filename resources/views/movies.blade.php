@extends("layout.main")

@section("content")



<div class="container">
  <table class="responsive-table">
    <thead>
      <tr>
        <th scope="col">Film Title</th>
        <th scope="col">Original Title</th>
        <th scope="col">Vote</th>
        <th scope="col">More Info</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $movies as $movie)

      <tr>
        <th scope="row">{{$movie->title}}</th>
        <td data-title="Released">{{$movie->original_title}}</td>
        <td data-title="Studio"><img src="{{$movie->thumb}}" alt=""></td>
        <td data-title="Budget" data-type="currency"><a class="more-info" href="">...</a></td>
      </tr>

      @endforeach

    </tbody>
  </table>
</div>


@endsection
