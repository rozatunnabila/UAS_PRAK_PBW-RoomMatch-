<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#F7F2EF] px-4">

        <div class="w-full max-w-md rounded-[32px] p-10
            bg-gradient-to-br from-[#4A001F] via-[#650024] to-[#2B0010]
            shadow-[0_20px_80px_rgba(74,0,31,0.45)]">

            <!-- Header -->
            <div class="mb-10 text-center">

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
                                d="M3 10.5L12 3L21 10.5V20a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1v-9.5z" />

                        </svg>

                    </div>
                </div>

                <h1 class="text-4xl font-bold text-white">
                    Welcome Back
                </h1>

                <p class="text-[#D6C5C5] mt-3">
                    Login to your account
                </p>

            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-5">
                    <label class="text-[#F3EAEA] text-sm mb-2 block">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        class="w-full rounded-2xl
                        bg-[#6B0F2D]/40
                        border border-[#B9874E]
                        text-white
                        px-5 py-3
                        placeholder-[#C7AFAF]
                        focus:border-[#F0C36D]
                        focus:ring-[#F0C36D]"
                        placeholder="Enter your email">
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="text-[#F3EAEA] text-sm mb-2 block">
                        Password
                    </label>

                    <input type="password"
                        name="password"
                        class="w-full rounded-2xl
                        bg-[#6B0F2D]/40
                        border border-[#B9874E]
                        text-white
                        px-5 py-3
                        placeholder-[#C7AFAF]
                        focus:border-[#F0C36D]
                        focus:ring-[#F0C36D]"
                        placeholder="Enter your password">
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
                    Login
                </button>

                <!-- Footer -->
                <p class="text-center text-[#D6C5C5] mt-6">
                    Don't have an account?

                    <a href="{{ route('register') }}"
                        class="text-[#F0C36D] font-medium hover:underline">
                        Register
                    </a>
                </p>

            </form>

        </div>
    </div>
</x-guest-layout>