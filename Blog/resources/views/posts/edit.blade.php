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
    <div class="bg-white shadow p-4 py-8">
            <div class="heading text-center font-bold text-2xl m-5 text-gray-800 bg-white">Update Post</div>
            <form method="POST" action="{{ route('posts.update',$post->id) }} " enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div
                    class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
                    <label for="title" class="mb-2 dark:text-gray-900">Title</label><br>
                    <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" name="title"
                        spellcheck="false" value="{{ $post->title }}" type="text">
                    @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <label for="content" class="mb-2 dark:text-gray-900">Content</label><br>
                    <textarea name="content" class="content bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false"
                    value="{{ $post->content }}">{{ $post->content }}</textarea>
                    @if ($errors->has('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                    @endif
                    <div>
                        <label for="image" class="mb-2 dark:text-gray-900">Image</label><br>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="w-full mb-3">
                        @endif
                        <label for="image">Select a file:</label>

                        <input type="file" name="image" id="image" value="{{ $post->image }}">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <!-- Buttons -->
                    <div class="buttons flex justify-end">
                        <button
                            class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Update</button>
                    </div>
                </div>
            </form>
    </div>


</body>

</html>
