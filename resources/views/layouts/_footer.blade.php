<section class="mt-12 lg:mt-40">
    @include('layouts._sponsors')
</section>

<div class="bg-gray-900 text-white mt-14 lg:mt-40">
    <div class="container mx-auto pt-7 pb-8 lg:pt-20 lg:px-16">
        <div class="mx-4 md:mx-0">
            <div class="flex flex-col pb-8 mb-8 border-b lg:pb-16 border-gray-800 lg:flex-row">
                <div class="w-full mb-6 lg:w-2/5 lg:pr-20 lg:mb-0">
                    <img loading="lazy" src="{{ asset('images/logo_trans.png') }}" alt="{{ config('app.name') }}" class="block mb-5" />

                    <p class="text-gray-100 lg:leading-loose">
                        Ut totam aut aut atque optio non nisi rerum sed recusandae rerum qui laborum tempore
                    </p>
                </div>

                <div class="lg:w-full lg:flex lg:justify-between">
                    <div class="grow mb-6 lg:mb-0">
                        <p class="text-lg mb-4 lg:mb-6">
                            Footer menu 1
                        </p>

                        <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                            <a href="{{ route('forum') }}" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Forum
                            </a>

                            <a href="{{ route('articles') }}" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                Articles
                            </a>

                        </div>
                    </div>

                    <div class="grow mb-6 lg:mb-0">
                        <p class="text-lg mb-4 lg:mb-6">
                            Footer menu 2
                        </p>

                        <div class="flex flex-wrap lg:flex-col lg:flex-no-wrap">
                            <a href="https://twitter.com/laravelio" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                <x-si-x class="text-white w-4 h-4 inline mr-3.5"/>
                                Twitter
                            </a>

                            <a href="https://github.com/laravelio" class="w-1/2 text-gray-400 mb-4 hover:text-gray-200 lg:mb-6">
                                <x-icon-github class="text-white w-4 h-4 inline mr-3.5"/>
                                GitHub
                            </a>
                        </div>
                    </div>

                    <div class="grow">
                        <p class="text-lg mb-6">
                            Footer menu 3
                        </p>

                        <div class="flex flex-col flex-nowrap">
                            <div class="flex mb-4 lg:mb-6">
                                <a href="https://laravel.com" class="w-1/2 text-gray-400 hover:text-gray-200">
                                    <img loading="lazy" src="{{ asset('images/laravel.png') }}" alt="Laravel" class="w-4 h-4 inline mr-2" />
                                    Laravel
                                </a>

{{--                                <a href="https://laravel-news.com" class="w-1/2 text-gray-400 hover:text-gray-200">--}}
{{--                                    <img loading="lazy" src="{{ asset('images/laravel-news.png') }}" alt="Laravel News" class="w-4 h-4 inline mr-2" />--}}
{{--                                    Laravel News--}}
{{--                                </a>--}}
                            </div>

                            <div class="flex">
                                <a href="https://laracasts.com" class="w-1/2 text-gray-400 hover:text-gray-200">
                                    <img loading="lazy" src="{{ asset('images/laracasts.png') }}" alt="Laracasts" class="w-4 h-4 inline mr-2" />
                                    Laracasts
                                </a>

{{--                                <a href="https://www.laravelpodcast.com" class="w-1/2 text-gray-400 hover:text-gray-200">--}}
{{--                                    <img loading="lazy" src="{{ asset('images/podcast.png') }}" alt="Laravel Podcast" class="w-4 h-4 inline mr-2" />--}}
{{--                                    Laravel Podcast--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-gray-100 flex flex-col lg:flex-row">
                <span class="mb-5 lg:mb-0 lg:mr-5">
                    &copy; {{ date('Y') }} Autistihood.community - All rights reserved.
                </span>

                <div class="flex flex-wrap lg:block">
                    <a href="{{ route('terms') }}" class="w-1/2 mb-4 hover:text-gray-200 lg:w-full lg:mb-0 lg:mr-8">
                        Terms of service
                    </a>
                    <a href="{{ route('privacy') }}" class="w-1/2 mb-4 hover:text-gray-200 lg:w-full lg:mb-0 lg:mr-8">
                        Privacy policy
                    </a>
                    <a href="https://github.com/sponsors/laravelio" class="w-1/2 hover:text-gray-200 lg:w-full lg:mb-0">
                        Advertise
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
