 <x-layout>
    <x-slot:heading>
        Edit Jobs: {{ $posts->title }}
    </x-slot:heading>

    <form method="POST" action="/posts/{{ $posts->id }}">
        @csrf
        @method('PATCH')
  <div class="space-y-12 mb-10">
    <div class=" border-b border-gray-900/10 pb-12">
    
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
             
              <input 
                id="title" 
                type="text" 
                name="title" 
                placeholder="job title" 
                value="{{ $posts->title }}"
                class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required />
              
            </div>
            @error('title')
               <p class="text-red-500 mt-5 mb-2"> {{ $message }}</p>
              @enderror
          </div>
          </div>
          </div>

             <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">description</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
             
              <input 
                id="salary" 
                type="text" 
                name="desc" 
                placeholder="random desc" 
                value="{{ $posts->description }}"
                class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
            
            </div>
          @error('desc')
              <p class="text-red-500 mt-5 mb-2"> {{ $message }}</p>
              
            @enderror
            
          </div>
        </div>
        </div>
      </div>

      <div class=" flex items-center justify-between">
        
          <div class=" flex items-center justify-start gap-x-6">
            
            <button 
            
              class=" rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
              form="delete-form"
              >
              delete
            </button>
              
          </div>
    
          <div class="flex items-center justify-end gap-x-5">
            <a href="/posts/{{ $posts->id }}"  class=" text-sm/6 font-semibold text-gray-900 ">Cancel</button>
            <button 
              type="submit" 
              class=" rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">update</button>
          </div>

      </div>
        
  </form>

  <form method="POST" action="/posts/{{ $posts->id }}" id="delete-form" class="hidden">

       @csrf
       @method('delete')
  </form>

</x-layout>