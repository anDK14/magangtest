<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelolaHR</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="flex flex-col md:flex-row h-screen">
        <!-- kiri -->
        <div class="hidden md:block md:w-1/2" 
     style="
        background-image: url('https://esdm.vascomm.co.id/asset/img-login.png');
        background-repeat: no-repeat;
        background-size: 105%;
        background-position: 45% 20%;
     ">
</div>


        <!-- kanan -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold">
                        <span style="color: #3E5355;">Login</span>
                        <span style="color: #FC9E49;">KelolaHR</span>
                    </h2>

                    <p class="mt-2" style="color: #3E5355;">Silakan masuk ke akun Anda</p>
                </div>

                {{-- pesan error --}}
                @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                        <p>{{ $errors->first() }}</p>
                    </div>
                @endif

                {{-- form login --}}
                <form method="POST" action="{{ url('/login') }}" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            value="admin@example.com" 
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Masukkan email Anda">
                    </div>

                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            value="password" 
                            required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Masukkan password Anda">
                    </div>
                    
                    <!-- bladewind -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <x-bladewind::checkbox 
                                label="Remember me"
                                name="remember"
                                value="1"
                                checked="true" />
                        </div>
                        <a href="#" class="text-sm" style="color: #048287; font-weight: 600;">Lupa password?</a>
                    </div>

                    <!-- bladewind -->
                    <div>
                        <x-bladewind::button 
                            size="big"
                            class="w-full py-2 px-4"
                            type="submit"
                            can_submit="true"
                            style="background-color:#045257; color:#FFFFFF;">
                            Login
                        </x-bladewind::button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Belum punya akun? 
                        <a href="#" class="text-sm font-semibold" style="color: #048287;">Daftar sekarang</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
