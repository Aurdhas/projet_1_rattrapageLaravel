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
    <section class="bg-gray-50 flex flex-col items-center justify-center">
        <div
            class="w-full bg-white rounded-lg shadow-lg shadow-blue-700 md:my-20 sm:max-w-md xl:p-0 dark:bg-gray-500 dark:border-gray-700">
            <div class="flex flex-col items-center justify-center px-8 py-8 ">
                <form method="POST" action="{{ route('categories.store') }}" class="space-y-4 md:space-y-6">
                    @csrf
                    <div class="flex justify-center items-center">
                        <h3
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Create Category</h3>
                    </div>

                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>

                        <input type="text" name="name" placeholder="Enter category's name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required autofocus />
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
