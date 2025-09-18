<x-layout>

    <x-slot:heading>
    
    posts Details
    </x-slot:heading>
        
       
       <div class=" flex flex-col gap-5 border border-gray-100 shadow-sm px-5 py-5  rounded-lg">  
        <p class="text-blue-400">title : {{$posts['title'] }} 
       </p>
       <p class="text-blue-400">description :{{ $posts->description }}</p>
        
    <div class="text=green-400">
        <x-button  href="/posts/{{ $posts->id }}/edit" class="bg-green-400 hover:green-500 mb-4">Edit</x-button>
       </div>   
      </div>
   
    </x-layout>