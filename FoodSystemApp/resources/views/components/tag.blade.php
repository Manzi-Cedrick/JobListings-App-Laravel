 @props(['tagName'])

 @php 
 $tag= explode(',',$tagName);

 @endphp
 <ul class="flex">
 @foreach ($tag as $tageach)
     
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">{{$row->tags}}</a>
                                </li>
 @endforeach

                            </ul>