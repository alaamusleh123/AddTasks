<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-conter font-blod text-xl">Register</h1>
            <form method="post" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="blok mb-2 uppercase font-bold text-gray-700" for="email">

                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-red-500">{{$massege}}}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label class="blok mb-2 uppercase font-bold text-gray-700" for="password">

                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" value="{{old('password')}}">
                    @error('password')
                    <p class="text-red-500">{{$massege}}}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"> LogIn</button>

                </div>
            </form>
        </main>
    </section>
</x-layout>
