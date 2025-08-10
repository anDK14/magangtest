<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>KelolaHR</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 shadow-md flex flex-col p-6 text-white" style="background-color: rgba(4, 82, 87, 1);">
        <a href="/dashboard">
            <img 
                src="https://esdmvascomm.vasdev.co.id/logo/logo.png" 
                style="width: 8rem; height: auto;" 
                alt="logo" 
                class="mb-8" 
            />
        </a>

        <!-- Flex container untuk konten sidebar (nav + logout) -->
        <div class="flex flex-col flex-1">  
            <!-- Navigasi Utama -->
            <nav class="flex flex-col space-y-4">
                <a href="/dashboard" class="flex items-center text-white hover:text-gray-300 font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v7m4 0v-7m5 7h-14" />
                    </svg>
                    Dashboard
                </a>
                <!-- Tambahkan menu lain di sini -->
            </nav>

            <!-- Container Logout (didorong ke bawah dengan mt-auto) -->
            <div class="mt-auto">  
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center text-left text-red-600 hover:text-red-800 font-semibold focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-3xl font-bold mb-6">Welcome to Dashboard</h1>
    </main>
</body>
</html>