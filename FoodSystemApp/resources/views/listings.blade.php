@extends ('layout')

@section('content')
            @unless(count($listings)==0)
            @foreach ($listings as $row)
              
            @endforeach
            @else
            <p>No listings data</p>
            @endunless
@endsection()