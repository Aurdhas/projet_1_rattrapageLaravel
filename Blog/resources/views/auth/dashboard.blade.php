<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header>
        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
                <div class="flex items-center px-4">
                    <!-- profile -->
                    <a href="{{ URL::route('profile') }}"
                        class="flex items-center px-4 py-2 mt-2  text-gray-600 hover:text-gray-800"
                        style="margin-bottom: 8px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32"
                            style="margin-bottom: 8px">
                            <path fill="currentColor"
                                d="M12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7m10 28h-2v-5a5 5 0 0 0-5-5H9a5 5 0 0 0-5 5v5H2v-5a7 7 0 0 1 7-7h6a7 7 0 0 1 7 7zm0-26h10v2H22zm0 5h10v2H22zm0 5h7v2h-7z" />
                        </svg>
                        Profile
                    </a>

                </div>


                <!-- notification -->
                <div class="flex items-center space-x-4 mr-4">

                    <a href="{{ route('posts.create') }}" class="btn font-bold cursor-pointer text-gray-900 ml-2">Create
                        a post</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M6.429 2.413a.75.75 0 0 0-1.13-.986l-1.292 1.48a4.75 4.75 0 0 0-1.17 3.024L2.78 8.65a.75.75 0 1 0 1.5.031l.056-2.718a3.25 3.25 0 0 1 .801-2.069z" />
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M6.237 7.7a4.214 4.214 0 0 1 4.206-3.95H11V3a1 1 0 1 1 2 0v.75h.557a4.214 4.214 0 0 1 4.206 3.95l.221 3.534a7.376 7.376 0 0 0 1.308 3.754a1.617 1.617 0 0 1-1.135 2.529l-3.407.408V19a2.75 2.75 0 1 1-5.5 0v-1.075l-3.407-.409a1.617 1.617 0 0 1-1.135-2.528a7.377 7.377 0 0 0 1.308-3.754zm4.206-2.45a2.714 2.714 0 0 0-2.709 2.544l-.22 3.534a8.877 8.877 0 0 1-1.574 4.516a.117.117 0 0 0 .082.183l3.737.449c1.489.178 2.993.178 4.482 0l3.737-.449a.117.117 0 0 0 .082-.183a8.876 8.876 0 0 1-1.573-4.516l-.221-3.534a2.714 2.714 0 0 0-2.709-2.544zm1.557 15c-.69 0-1.25-.56-1.25-1.25v-.75h2.5V19c0 .69-.56 1.25-1.25 1.25"
                                clip-rule="evenodd" />
                            <path fill="currentColor"
                                d="M17.643 1.355a.75.75 0 0 0-.072 1.058l1.292 1.48a3.25 3.25 0 0 1 .8 2.07l.057 2.717a.75.75 0 0 0 1.5-.031l-.057-2.718a4.75 4.75 0 0 0-1.17-3.024l-1.292-1.48a.75.75 0 0 0-1.058-.072" />
                        </svg>
                    </a>
                    <!-- parametre -->
                    <a href="#" class="text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17ZM18.41 14l.8.9l-1.28 2.22l-1.18-.24a3 3 0 0 0-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 0 0-3.45-2l-1.18.24l-1.3-2.21l.8-.9a3 3 0 0 0 0-4l-.8-.9l1.28-2.2l1.18.24a3 3 0 0 0 3.45-2L10.36 4h2.56l.38 1.14a3 3 0 0 0 3.45 2l1.18-.24l1.28 2.22l-.8.9a3 3 0 0 0 0 3.98m-6.77-6a4 4 0 1 0 4 4a4 4 0 0 0-4-4m0 6a2 2 0 1 1 2-2a2 2 0 0 1-2 2" />
                        </svg>
                    </a>
                    <!-- logout -->
                    <a href="{{ route('signout') }}" class="flex items-center text-gray-600 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 11h8v2H5v3l-5-4l5-4zm-1 7h2.708a8 8 0 1 0 0-12H4a9.985 9.985 0 0 1 8-4c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4" />
                        </svg>
                        <span class="font-bold">Logout</span>
                    </a>

                </div>
            </div>

            <div class="p-4">
                <h1 class="text-2xl font-bold">Bienvenue, {{ Auth::user()->name }} !</h1>

            </div>
        </div>

        </div>
    </header>

    <body>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

            <div class="grid grid-cols-4 gap-4">
                @foreach ($posts as $post)
                    <div class=" h-[28rem]">
                        <div
                            class=" border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-[15rem] mb-3">
                            @endif
                            <div class="p-4 pt-2">
                                <div class="mb-8">
                                    <p class="text-sm text-gray-600 flex items-center">
                                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z">
                                            </path>
                                        </svg>
                                        @foreach ($categories as $category)
                                            @if ($post->category_id == $category->id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </p>
                                    <a href="#"
                                        class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">{{ $post->title }}</a>

                                    <p class="text-gray-700 text-sm">{{ Str::words($post->content, 5) }}</p><br>
                                    <a href="{{ route('posts.show', $post->id) }}"
                                        class="btn font-bold cursor-pointer text-blue-900 ml-[10rem]">Read more</a>
                                </div>
                                <div class="flex items-center">
                                    <a href="#"><img class="w-10 h-10 rounded-full mr-4"
                                            src="https://tailwindcss.com/img/jonathan.jpg"
                                            alt="Avatar of Jonathan Reinink"></a>
                                    <div class="text-sm">
                                        @foreach ($users as $user)
                                            <a href="#"
                                                class="text-gray-900 font-semibold leading-none hover:text-indigo-600">{{ $user->name }}</a>
                                        @endforeach
                                        <p class="text-gray-600">{{ $post->created_at }}</p>
                                    </div>
                                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-5 text-red-900">Delete</button>
                                    </form>
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="btn font-bold cursor-pointer text-green-900 ml-2">Edit</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </body>

</body>

</html>
