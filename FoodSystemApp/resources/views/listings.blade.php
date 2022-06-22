@extends ('layout')

@section('content')
    <h1>Listing</h1>
            <ul>
            @unless(count($listings)==0)
            @foreach ($listings as $row)
            <li>{{$row['id']}}</li>
            <li>{{$row['title']}}</li>
            <li>{{$row['description']}}</li>
            @endforeach
            @else
            <p>No listings data</p>
            @endunless
            </ul>
 
@endsection()