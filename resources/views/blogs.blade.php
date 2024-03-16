@extends('layout')

@section('content')

<div class="p-8">

    <a
    class="inline-block rounded-full border border-green-600 p-3 text-green-600 hover:bg-green-600 hover:text-white focus:outline-none focus:ring active:bg-green-500"
    href="{{route('home')}}">
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
    
<div class="py-8 grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
    <div class="h-32 rounded-lg bg-gray-200">
        <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-56 w-full object-cover"
            />
          
            <div class="p-4 sm:p-6">
              <a href="#">
                <h3 class="text-lg font-medium text-gray-900">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h3>
              </a>
          
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
              </p>
          
              <a href="{{route('read')}}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                Find out more
          
                <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                  &rarr;
                </span>
              </a>
            </div>
          </article>
    </div>
    <div class="h-32 rounded-lg bg-gray-200">
        <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-56 w-full object-cover"
            />
          
            <div class="p-4 sm:p-6">
              <a href="#">
                <h3 class="text-lg font-medium text-gray-900">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h3>
              </a>
          
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
              </p>
          
              <a href="{{route('read')}}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                Find out more
          
                <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                  &rarr;
                </span>
              </a>
            </div>
          </article>
    </div>
    <div class="h-32 rounded-lg bg-gray-200">
        <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
            <img
              alt=""
              src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
              class="h-56 w-full object-cover"
            />
          
            <div class="p-4 sm:p-6">
              <a href="#">
                <h3 class="text-lg font-medium text-gray-900">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h3>
              </a>
          
              <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                dignissimos. Molestias explicabo corporis voluptatem?
              </p>
          
              <a href="{{route('read')}}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                Find out more
          
                <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                  &rarr;
                </span>
              </a>
            </div>
          </article>
    </div>
  </div>
      

</div>
@endsection
      