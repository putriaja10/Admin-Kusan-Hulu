<x-layout>

    <div class="w-1/2 flex flex-col px-6 py-8 justify-center items-center rounded-xl shadow-md shadow-gray-500/60">

        <div class="w-full flex flex-col gap-4">
            <h1 class="text-center text-2xl font-semibold">SELAMAT DATANG</h1>

            <x-form.form-layout action="{{ route('login.store') }}">    
                <div class="flex flex-col gap-2">
                    <x-form.input-container>
                        <x-form.form-label for="email">
                            Email
                        </x-form.form-label>
                        <x-form.form-input
                            type="email"
                            name="email"
                            id="email"
                            :value="old('email')"
                            placeholder="Email"
                            required />
                        <x-form.form-error errorFor="email" />
                    </x-form.input-container>
        
                    <x-form.input-container>
                        <x-form.form-label for="password">
                            Password
                        </x-form.form-label>
                        <x-form.form-input
                            type="password"
                            name="password"
                            id="password"
                            :value="old('password')"
                            placeholder="Password"
                            required />
                        <x-form.form-error errorFor="password" />
                    </x-form.input-container>
        
                    <div class="flex flex-col justify-center items-center mt-4">
                        <x-form.form-button type="submit" class="w-1/3">MASUK</x-form.form-button>
                        <a href="{{ url('register') }}" class="text-end text-sm italic hover:underline hover:text-blue-400/80">Belum punya akun?</a>
                    </div>
                </div>
            </x-form.form-layout>
        </div>

    </div>

</x-layout>