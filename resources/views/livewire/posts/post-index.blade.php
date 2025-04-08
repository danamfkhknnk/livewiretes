<section>
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between ">
        <div class="flex">
            <h2 class="uppercase text-xl  font-bold">Post List</h2>
        </div>
        <div class="flex gap-4">
            <div class="pt-2">
                @if (Session::has('message'))
                <div class="flex items-center  p-2 mb-2 text-sm text-blue-800 rounded-lg bg-red-50 " >
                  <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  <p class="alert" {{Session::get('alert-class', 'alert-info')}}>{{Session::get('message')}}</p>
                </div>
                @endif
              </div>
          <div class="pt-2">
              <a href="/posts/create" class="font-medium text-blue-600 button hover:underline">
                  <svg class="w-10 h-10 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                </svg>
              </a>
          </div>
          </div>
        </div>
    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Content
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$post->id}}
                </th>
                <td class="px-6 py-4">
                    {{$post->title}}
                </td>
                <td class="px-6 py-4">
                    {{$post->content}}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ asset('storage/'.$post->image)}}" alt="{{$post->image}}" class="w-12 h-12 rounded-xl" />
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-600 hover:underline">Edit</a>

                </td>
            </tr>
            @empty
            <h2 class="text-center text-2xl">No Post</h2>
            @endforelse

        </tbody>
    </table>
    </div>

</section>
