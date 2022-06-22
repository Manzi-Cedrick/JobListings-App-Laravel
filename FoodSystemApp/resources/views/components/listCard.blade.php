@props(['row'])
<x-card>
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/acme.png"
                            alt="No image"
                        />
                        <div>
                            <h3 class="text-2xl">
                                <a href="/listings/{{$row->id}}">{{$row->title}}</a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$row->company}}</div>
                            <ul class="flex">
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">{{$row->tags}}</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">API</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Backend</a>
                                </li>
                                <li
                                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                >
                                    <a href="#">Vue</a>
                                </li>
                            </ul>
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$row->location}}>
                            </div>
                        </div>
                    </div>
                </x-card>