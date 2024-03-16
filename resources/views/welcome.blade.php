@extends('layout')

@section('content')
    
    <header>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
          <div class="sm:flex sm:items-center sm:justify-between">
            <div class="text-center sm:text-left">
              <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Welcome Back, Barry!</h1>
      
              <p class="mt-1.5 text-sm text-gray-500">Let's write a new blog post! 🎉</p>
            </div>
      
            <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
              <button
                class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-gray-200 px-5 py-3 text-gray-500 transition hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:ring"
                type="button">
                <span class="text-sm font-medium"><a href="{{route('blogs')}}"> View Posts </a></span>
      
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
              </button>
      
              <button
                class="block rounded-lg bg-green-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-green-700 focus:outline-none focus:ring"
                type="button"> <a href="{{route('create')}}"> Create Post </a></button>
            </div>
          </div>
        </div>
      </header>


    <div class="flex items-center justify-center py-32">
        <div class="w-500 h-500 text-center mx-auto">
          <h1 class="text-4xl antialiased">Hello believers!</h1><br>
          <p class="text-lg w-[700px] text-gray-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</p><br>

          <a
            class="group relative inline-flex items-center overflow-hidden rounded border border-current px-8 py-3 text-green-600 focus:outline-none focus:ring active:text-green-500"
            href="#"
            >
            <span class="absolute -end-full transition-all group-hover:end-4">
                <svg
                class="size-5 rtl:rotate-180"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                />
                </svg>
            </span>

            <span class="text-sm font-medium transition-all group-hover:me-4"> Get started </span>
            </a>
        </div>
      </div>
      
@endsection
      