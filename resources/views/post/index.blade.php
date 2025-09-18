<x-layout>

    <x-slot:heading>
        POSTS:
    </x-slot:heading>

    @foreach($posts as $post)
        <div>    

            <div class="w-full shadow-sm py-5 px-5 mt-5 hover:bg-gray-100 space-y-4 rounded-lg">
                <!-- button       -->
                <div class="flex justify-start items-center gap-5 p-3 shadow-sm ">
                <span class="text-green-400 text-5xl py-auto"> .</span><h1>User: </h1>
                <a href=""
                 class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none 
                 focus:ring-4 focus:ring-gray-300 font-medium 
                 rounded-sm text-sm px-5 py-2.5  dark:bg-blue-500 
                 dark:hover:bg-blue-700 dark:focus:ring-gray-700 dark:border-gray-700"> 
                 
                  {{ $post->User->last_name }}
                </a>
                </div>
             
                    <a href="/posts/{{ $post->id }}" class="mt-5 text-blue-300 block"> 
                    <div class="space-y-3"> 
                        <h2><strong class="text-gray-800 "> title:</strong> {{$post['title']}}</h2> 
                        <h3><strong  class="text-gray-800  "> description:</strong> {{$post['description']}}</h3>  
                    </div>
                    </a>
                    
            </div>
            
        </div>
        
    @endforeach
    <!-- <div class="mt-5 dark:text-white"> {{ $posts->links() }}</div> -->
</x-layout>