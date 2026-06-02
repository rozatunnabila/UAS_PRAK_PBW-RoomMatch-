<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#F7F2EF] px-4">

        <div class="w-full max-w-md rounded-[32px] p-10
            bg-gradient-to-br from-[#4A001F] via-[#650024] to-[#2B0010]
            shadow-[0_20px_80px_rgba(74,0,31,0.45)]">

            <!-- Header -->
            <div class="text-center mb-10">

                <div class="flex justify-center mb-5">
                    <div class="w-16 h-16 rounded-2xl border border-[#E0B15C]
                        flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-[#E0B15C]"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.7"
                                d="M2.25 12L12 4.5 21.75 12M4.5 10.5V20.25H19.5V10.5" />

                        </svg>

                    </div>
                </div>

                <h1 class="text-4xl font-bold text-white">
                    Create Account
                </h1>

                <p class="text-[#D6C5C5] mt-3">
                    Register your new account
                </p>

            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-5">
                    <label class="text-[#F3EAEA] text-sm mb-2 block">
                        Full Name
                    </label>

                    <input type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full rounded-2xl
                        bg-[#6B0F2D]/40
                        border border-[#B9874E]
                        text-white
                        px-5 py-3
                        placeholder-[#C7AFAF]
                        focus:border-[#F0C36D]
                        focus:ring-[#F0C36D]"
                        placeholder="Enter your name">

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mb-5">
                    <label class="text-[#F3EAEA] text-sm mb-2 block">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-2xl
                        bg-[#6B0F2D]/40
                        border border-[#B9874E]
                        text-white
                        px-5 py-3
                        placeholder-[#C7AFAF]
                        focus:border-[#F0C36D]
                        focus:ring-[#F0C36D]"
                        placeholder="Enter your email">

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label class="text-[#F3EAEA] text-sm mb-2 block">
                        Password
                    </label>

                    <input type="password"
                        name="password"
                        required
                        class="w-full rounded-2xl
                        bg-[#6B0F2D]/40
                        border border-[#B9874E]
                        text-white
                        px-5 py-3
                        placeholder-[#C7AFAF]
                        focus:border-[#F0C36D]
                        focus:ring-[#F0C36D]"
                        placeholder="Enter your password">

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-7">
                    <label class="text-[#F3EAEA] text-sm mb-2 block">
                        Confirm Password
                    </label>

                    <input type="password"
                        name="password_confirmation"
                        required
                        class="w-full rounded-2xl
                        bg-[#6B0F2D]/40
                        border border-[#B9874E]
                        text-white
                        px-5 py-3
                        placeholder-[#C7AFAF]
                        focus:border-[#F0C36D]
                        focus:ring-[#F0C36D]"
                        placeholder="Confirm your password">
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full
                    bg-[#E0B15C]
                    hover:bg-[#C99845]
                    text-[#4A001F]
                    font-semibold
                    py-3
                    rounded-2xl
                    transition duration-300
                    shadow-lg">
                    Register
                </button>

                <!-- Footer -->
                <p class="text-center text-[#D6C5C5] mt-7">
                    Already have an account?

                    <a href="{{ route('login') }}"
                        class="text-[#F0C36D] font-medium hover:underline">
                        Login
                    </a>
                </p>

            </form>

        </div>

    </div>
</x-guest-layout>