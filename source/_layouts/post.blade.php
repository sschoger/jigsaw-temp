@extends('_layouts.master')

@section('body')
<div class="bg-white border-t-4 border-blue mb-12 shadow">
        <div class="container mx-auto py-6 flex justify-between items-center">
            <svg class="ml-6 xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 40 45" width="40" height="45">
                <g>
                    <polygon fill="#338CD6 " points="20 0 40 10 40 35 20 45 0 35 0 10 "></polygon>
                    <polygon fill="#1C3E5A " points="20 20 20 45 0 35 0 10 "></polygon>
                    <polygon fill="#B9DAF5 " points="20 0 40 10 20 20 0 10 "></polygon>
                </g>
            </svg>
            <div class="text-lg font-semibold ">
                <a href="/ " class="block lg:inline-block lg:mt-0 text-grey-darker hover:text-grey-darkest no-underline mr-8 ">
                	Home
                </a>
                <a href="/ " class="block lg:inline-block lg:mt-0 text-grey-darker hover:text-grey-darkest no-underline mr-8 ">
                	Blog
                </a>
                <a href="/ " class="block lg:inline-block lg:mt-0 text-grey-darker hover:text-grey-darkest no-underline mr-8 ">
                    About
                </a>
                <a href="/ " class="block lg:inline-block lg:mt-0 text-grey-darker hover:text-grey-darkest no-underline mr-6 ">
                    Contact
                </a>
            </div>
        </div>
    </div>
    	<div class="max-w-md mx-auto mb-10">
        	<div class="border-b-2 border-grey-light">
          	<h1 class="text-5xl font-black text-black mb-2">
            	{{ $page->title }}
          	</h1>
        	<div class="block mb-6">
          		<div class="inline-block text-lg font-semibold text-grey-darker">
          			{{ $page->author }}
          		</div>
          		<div class="inline-block text-lg font-semibold text-black">
          		•
          		</div>
          		<div class="inline-block text-lg font-semibold text-grey-darker">
					{{ $page->date }}
          		</div>
      		</div>
          	@foreach($page->tags as $tag)
          	<div class="inline-block text-sm font-semibold text-grey-darkest uppercase bg-grey-lighter border border-grey-light rounded py-1 px-2 mb-6">
          		{{ $tag }}
          	</div>
          	@endforeach
          	<div class="markdown">
          		@yield('content')
      		</div>
        </div>
        <div class="clearfix">
        	<a class="float-right no-underline text-blue font-semibold text-xl py-6" href="/">Next Post →</a>
        </div>
    </div>
    <div class="bg-white">
    	<p class="text-grey-darkest text-lg leading-normal py-6 text-center">
    		© Matt Stauffer. Built with Jigsaw and Tailwind CSS.
    	</p>
    </div>
@endsection