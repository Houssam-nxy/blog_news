@extends('layout')

@section('content')

<div class="p-8">
<a
class="inline-block rounded-full border border-green-600 p-3 text-green-600 hover:bg-green-600 hover:text-white focus:outline-none focus:ring active:bg-green-500"
href="{{route('home')}}">
    <span class="sr-only"> Go back </span>

    <svg
    class="size-5 rotate-180"
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


<div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg text-center">
      <h1 class="text-2xl font-bold sm:text-3xl">Get started today!</h1>
  
      <p class="mt-4 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
        ipsa culpa autem, at itaque nostrum!
      </p>
    </div>
  
    <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
        <div>
            <label for="name" class="sr-only">You'r name</label>
    
            <div class="relative">
            <input
                type="text"
                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                placeholder="Enter your name"
                style="border: 1px solid #000"
            />
            
            </span>
            </div>
        </div>

        <div>
            <label for="message" class="sr-only">Enter your article</label>
    
            <div class="relative">
            <textarea
                type="text"
                class="w-full rounded-lg border-gray-500 p-4 pe-12 text-sm shadow-sm"
                placeholder="Here your article"
                style="border: 1px solid #000"
            ></textarea>
            
            </span>
            </div>
        </div>

  
      <div class="text-center items-center justify-between">
        <button
          type="submit"
          class="inline-block rounded-lg bg-green-500 px-5 py-3 text-sm font-medium text-white"
        >
          Upload
        </button>
      </div>
    </form>
  </div>
    
@endsection