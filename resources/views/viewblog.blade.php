@extends('layout')

@section('content')

<div class="flex items-center justify-between gap-4 bg-green-600 px-4 py-3 text-white">
    <p class="text-sm font-medium">
        I am believer
      <a href="https://github.com/Houssam-nxy/blog_news" class="inline-block underline">Give it a star on GitHub 🎉</a>
    </p>
  
    <button
      aria-label="Dismiss"
      class="shrink-0 rounded-lg bg-black/10 p-1 transition hover:bg-black/20">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path
          fill-rule="evenodd"
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"/>
      </svg>
    </button>
</div>

<div class="p-8">
<a
class="inline-block rounded-full border border-green-600 p-3 text-green-600 hover:bg-green-600 hover:text-white focus:outline-none focus:ring active:bg-green-500"
href="{{route('blogs')}}">
    <span class="sr-only"> Go back </span>

    <svg
    class="size-5"
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor">
    <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M14 5l7 7m0 0l-7 7m7-7H3"/>
    </svg>
</a>
</div>

<div class="flex flex-col justify-center items-center">
    

    <div class="p-4">
        <div>
            <p class="text-2xl antialiased w-96 text-left">Mastering Laravel Accessors and Mutators: Elevating Data Interaction</p>
        </div>
        <br>
        <div class="flex justify-center">
            <img class="rounded" src="https://miro.medium.com/v2/resize:fit:720/format:webp/1*dbeB8jWLnqyXZA0M-uE-8Q.png" alt="laravel" width="500">
        </div>
        <br>
        <div class="">
            <p class="text-lg w-[700px] text-gray-500 text-left">Laravel, a prominent figure in the realm of PHP frameworks, has distinguished itself through a blend of elegance, expressiveness, and robust functionality. Eloquent ORM stands as a beacon for developers, simplifying database interactions with an active record implementation that feels almost magical. In my twelve years as a web developer, I’ve seen many frameworks come and go, but Laravel’s approach to data manipulation, particularly through Accessors and Mutators, has consistently impressed me for its intuitiveness and power. This article dives deeper into these concepts, offering nuanced insights and advanced examples to enrich your Laravel applications.</p>
        </div>
        <br>
        <div>
            <h1 class="text-xl"># Deep Dive into Accessors</h1>
            <p class="text-lg w-[700px] text-gray-500 text-left">Accessors in Laravel serve a pivotal role in data retrieval, allowing you to present data in the format best suited for your application’s needs without altering the raw data in your database. This abstraction layer not only keeps your database interactions clean but also encapsulates presentation logic within your model, adhering to the principles of MVC architecture.</p>
        </div>
        <br><br>
        <div class="text-center">
            <a
            class="group relative inline-block overflow-hidden border border-green-600 px-8 py-3 focus:outline-none focus:ring"
            href="#"
            >
            <span
                class="absolute inset-x-0 top-0 h-[2px] bg-green-600 transition-all group-hover:h-full group-active:bg-green-500"
            ></span>

            <span
                class="relative text-sm font-medium text-green-600 transition-colors group-hover:text-white"
            >
                Read more
            </span>
            </a>
        </div>
        <br><br>
    </div>
</div>
@endsection
