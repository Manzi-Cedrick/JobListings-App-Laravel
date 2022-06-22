<x-layout>
            @unless(count($listings)==0)
            @foreach ($listings as $row)
              <x-listCard :row="$row"/>
            @endforeach
            @else
            <p>No listings data</p>
            @endunless
</x-layout>