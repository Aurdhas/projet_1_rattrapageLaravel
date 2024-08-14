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
        <div class="w-full bg-white rounded-lg shadow-lg shadow-gray-700 md:my-20 sm:max-w-md xl:p-0 dark:bg-gray-400 dark:border-gray-500">
            <div class="flex flex-col items-center justify-center px-8 py-8 ">
                <form action="{{ route('register.custom') }}" method="POST" class="space-y-4 md:space-y-6">
                    @csrf
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name
                        </label>

                        <input type="text" name="name" id="name" placeholder="Enter your name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required autofocus />
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email_address" placeholder="Enter your email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required autofocus />
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div>

                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>

                        <input type="password" name="password" placeholder="Enter your password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required />
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                        Password</label>

                    <input type="password" name="password_confirmation" placeholder="Confirm your password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600" />

                    <button type="submit"
                        class="w-full text-white bg-black hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Sign up
                    </button>
                    <p class="text-sm font-light text-gray-900 dark:text-gray-800">
                        Already have an account? <a href="#"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                    <br />
                </form>
            </div>
        </div>
    </section>
</body>

</html>
