<x-app-layout>

    <main class="profile-page">

        <section class="relative block" style="height: 500px;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("{{ Storage::url($post->image->url) }}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>

        <section class="relative py-16 bg-gray-300">

            <div class="container mx-auto px-6">

                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">

                    <div class="px-2 md:px-4 lg:px-4">

                        <div class="container mx-auto px-2 md:px-6 lg:px-6">
                            <div class="flex flex-wrap">

                                <div class="w-full lg:w-2/3 px-2 md:px-6 lg:px-6">

                                    <div class="mt-12">
                                        <h1 class="text-4xl font-semibold leading-normal mb-2 text-black mb-2">
                                            {{ $post->name }}
                                        </h1>
                                        <p class="text-lg text-gray-900 font-bold">
                                            {{ $post->extract }}
                                        </p>
                                        <div class="mt-10 py-10 border-t border-gray-300">
                                            <p class="text-base text-black text-base">
                                                {{ $post->body }}
                                            </p>

                                        </div>
                                    </div>

                                </div>

                                <aside class="w-full lg:w-1/3 px-2 md:px-6 lg:px-6">
                                    <div class="mt-12 mb-10">
                                        <h2 class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                            Publicidad
                                        </h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos at
                                            exercitationem iste incidunt, libero officia eius sunt sed. Id, dolo
                                            consequuntur possimus sequi laudantium neque molestias. Beatae, excepturi
                                            dolorem!
                                        </p>

                                        <br>

                                        <h2 class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                            Post Relacionados
                                        </h2>
                                        <ul>
                                            @foreach ($similares as $similar)
                                                <li class="mb-4">
                                                    <a href="{{ route('posts.show', $similar) }}" class="flex">
                                                        <img src="{{ Storage::url($similar->image->url) }}"
                                                            alt="{{ $similar->name }}"
                                                            class="w-36 h-20 object-cover object-center">
                                                        <span class="ml-2 text-gray-600">{{ $similar->name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <br>

                                        <h2 class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                            Publicidad
                                        </h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos at
                                            exercitationem iste incidunt, libero officia eius sunt sed. Id, dolo
                                            consequuntur possimus sequi laudantium neque molestias. Beatae, excepturi
                                            dolorem!
                                        </p>

                                    </div>
                                </aside>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>

    </main>


    <footer class="relative bg-gray-300 pt-8 pb-6">

        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px; transform: translateZ(0px);">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>

        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-twitter"></i></button><button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-dribbble"></i></button><button
                            class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free">Free Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2019 Tailwind Starter Kit by
                        <a href="https://www.creative-tim.com" class="text-gray-600 hover:text-gray-900">Creative
                            Tim</a>.
                    </div>
                </div>
            </div>
        </div>

    </footer>

</x-app-layout>
