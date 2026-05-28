<x-layout>
    @push('styles')
        <style>
            main {
                all: unset;
            }
        </style>
    @endpush

    <div class="min-h-[80vh] flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-md rounded-3xl border border-zinc-200 bg-white p-8 shadow-sm">

            <!-- Cabeçalho -->
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-bold text-zinc-900">
                    Entrar
                </h1>

                <p class="mt-2 text-sm text-zinc-500">
                    Acesse sua conta para continuar.
                </p>
            </div>

            <!-- Formulário -->
            <form action="{{ route("auth.login") }}" method="POST" class="space-y-5">
                @csrf

                <!-- E-mail -->
                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-zinc-700">
                        E-mail
                    </label>

                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="voce@exemplo.com" class="w-full rounded-2xl border @error('email') border-red-300 @else border-zinc-300 @enderror  bg-white px-4 py-3 text-sm text-zinc-900 placeholder:text-zinc-400 outline-none transition focus:border-black focus:ring-4 focus:ring-zinc-100">

                    @error('email')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <!-- Senha -->
                <div>
                    <div class="mb-2 flex items-center justify-between">
                        <label for="password" class="text-sm font-medium text-zinc-700">
                            Senha
                        </label>

                        <a href="#" class="text-sm text-zinc-500 transition hover:text-zinc-900">
                            Esqueci minha senha
                        </a>
                    </div>

                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="••••••••" class="w-full rounded-2xl border @error('password') border-red-300 @else border-zinc-300 @enderror bg-white px-4 py-3 pr-12 text-sm text-zinc-900 placeholder:text-zinc-400 outline-none transition focus:border-black focus:ring-4 focus:ring-zinc-100">

                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-4 text-zinc-400 transition hover:text-zinc-700">
                            <!-- Eye Icon -->
                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>

                            <!-- Eye Slash Icon -->
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="hidden h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.477 10.488a3 3 0 0 0 4.243 4.243"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.88 5.09A9.953 9.953 0 0 1 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639a10.024 10.024 0 0 1-4.02 5.143"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.228 6.228A10.026 10.026 0 0 0 2.037 11.683a1.012 1.012 0 0 0 0 .639C3.423 16.493 7.36 19.5 12 19.5a9.953 9.953 0 0 0 5.09-1.38"/>
                            </svg>
                        </button>
                    </div>

                    @error('password')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <!-- Lembrar de mim -->
                <label class="group flex cursor-pointer items-center gap-3">

                    <div class="relative">
                        <input type="checkbox" name="remember_me" class="peer sr-only" {{ old('remember_me') ? 'checked' : '' }}>

                        <div class="flex h-5 w-5 items-center justify-center rounded-md border border-zinc-300 bg-white transition-all duration-200 peer-checked:border-black peer-checked:bg-black peer-focus:ring-4 peer-focus:ring-zinc-100">
                            <!-- Check Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3.5 w-3.5 scale-75 text-white opacity-0 transition-all duration-200 peer-checked:scale-100 peer-checked:opacity-100">
                                <path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.313a1 1 0 0 1-1.42-.007l-3.25-3.313a1 1 0 1 1 1.428-1.4l2.54 2.588 6.54-6.594a1 1 0 0 1 1.406-.001Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>

                    <span class="text-sm text-zinc-600 transition group-hover:text-zinc-900">
                        Lembrar de mim
                    </span>
                </label>

                <!-- Botão -->
                <button type="submit" class="w-full rounded-2xl bg-black px-4 py-3 text-sm font-medium text-white transition hover:opacity-90 active:scale-[0.99]">
                    Entrar
                </button>

                @error('auth')
                <p class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </p>
                @enderror
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        window.addEventListener('load', function () {
            const passwordInput = $('#password');
            const togglePassword = $('#togglePassword');
            const eyeOpen = $('#eyeOpen');
            const eyeClosed = $('#eyeClosed');

            togglePassword.on('click', function () {
                const isPassword = passwordInput.attr('type') === 'password';
                passwordInput.attr('type', isPassword ? 'text' : 'password');
                eyeOpen.toggleClass('hidden');
                eyeClosed.toggleClass('hidden');
            });
        });
    </script>
    @endpush
</x-layout>
