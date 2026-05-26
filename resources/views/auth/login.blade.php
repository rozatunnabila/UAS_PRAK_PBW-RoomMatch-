<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#f5f7fb] px-4">

        <div class="w-full max-w-md bg-[#0F172A] rounded-[32px] p-10 shadow-[0_20px_80px_rgba(15,23,42,0.35)]">

            <div class="mb-10 text-center">
                
                <h1 class="text-4xl font-bold text-white">
                    Welcome Back
                </h1>

                <p class="text-gray-400 mt-3">
                    Login to your account
                </p>

            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-5">
                    <label class="text-gray-300 text-sm mb-2 block">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        class="w-full rounded-2xl bg-[#1E293B] border border-[#334155] text-white px-5 py-3 focus:border-[#C8A96B] focus:ring-[#C8A96B]"
                        placeholder="Enter your email">
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label class="text-gray-300 text-sm mb-2 block">
                        Password
                    </label>

                    <input type="password"
                        name="password"
                        class="w-full rounded-2xl bg-[#1E293B] border border-[#334155] text-white px-5 py-3 focus:border-[#C8A96B] focus:ring-[#C8A96B]"
                        placeholder="Enter your password">
                </div>

                <button type="submit"
                    class="w-full bg-[#C8A96B] hover:bg-[#b89555] text-[#0F172A] font-semibold py-3 rounded-2xl transition duration-300">
                    Login
                </button>

                <p class="text-center text-gray-400 mt-6">
                    Don't have an account?

                    <a href="{{ route('register') }}"
                        class="text-[#C8A96B] font-medium hover:underline">
                        Register
                    </a>
                </p>

            </form>

        </div>
    </div>
</x-guest-layout>