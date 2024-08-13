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
    <section class="bg-gray-50 flex flex-col items-center justify-center py-10">
        <div class="lg:w-[80%] md:w-[90%] xs:w-[96%] mx-auto flex gap-4">
            <div
                class="lg:w-[88%] md:w-[80%] sm:w-[88%] xs:w-full mx-auto shadow-2xl p-4 rounded-xl h-fit self-center dark:bg-gray-400">
                <!--  -->
                <div class="text-center">
                    <h1 class="lg:text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2">
                        Profile
                    </h1>

                    <form method="POST" action="{{ route('update') }}">
                        @csrf
                        @method('PUT')
                        <img class="w-32 h-32 rounded-full mx-auto" src="https://loremflickr.com/320/320/girl"
                            alt="">

                        <div
                            class="flex md:flex-col sm:flex-col xs:flex-col gap-2 w-full justify-center items-center ">
                            <div class="w-full  mb-4 mt-6">
                                    <label for="name" class="mb-2 dark:text-gray-900">Name</label><br>
                                <input type="text"
                                    class="mt-2 p-4 w-50 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    value="{{ Auth::user()->name }}" name="name">
                            </div>
                            <div class="w-full  mb-4 mt-0">
                                <label for="email" class="dark:text-gray-900">Email</label><br>
                                <input type="email"
                                    class="mt-2 p-4 w-50 border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                    value="{{ Auth::user()->email }}" name="email">
                            </div>
                        </div>
                        <div class=" w-full flex justify-center items-center  mb-4 lg:mt-6">
                            <button type="submit"
                                class="mt-2 p-4  w-[18rem] text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
