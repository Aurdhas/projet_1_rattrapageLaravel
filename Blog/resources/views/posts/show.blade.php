<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Update Post</title>
</head>

<body>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">



                <div class="w-auto h-[28rem]">
                    <div
                        class=" border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class=" mb-3">
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

                                </p>
                                <a href="#"
                                    class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 inline-block">{{ $post->title }}</a>

                                <p class="text-gray-700 text-sm">{{ $post->content }}</p><br>

                            </div>
                            <div class="flex items-center">

                                <div class="text-sm">

                                    <p class="text-gray-600">{{ $post->created_at }}</p>
                                </div>

                                <a href="{{ route('dashboard') }}"
                                    class="btn font-bold cursor-pointer text-green-900 ml-[38rem]">Back</a>
                            </div>
                        </div>
                    </div>

                </div>

    </div>
</body>

</html>
