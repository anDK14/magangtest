<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Navbar KelolaHR</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <!-- Pastikan Anda sudah menginstal BladewindUI di project Anda -->
</head>
<body>

<nav class="flex items-center justify-between bg-white p-4 shadow">
  <!-- Logo -->
  <a href="/" class="flex items-center">
    <img 
      src="https://www.kelolahr.id/wp-content/uploads/2023/09/new-logo-khr.png" 
      alt="KelolaHR Logo" 
      width="180" 
      height="42" 
      class="object-contain"
    />
  </a>

  <!-- Menu -->
  <ul class="flex space-x-6 text-gray-700 font-semibold">
    <li><a href="/dashboard" class="hover:text-indigo-600">Dashboard</a></li>
    <li><a href="/profile" class="hover:text-indigo-600">Profile</a></li>
    <li><a href="/settings" class="hover:text-indigo-600">Settings</a></li>
  </ul>
</nav>

<!-- BladewindUI Card Section -->
<div class="container mx-auto p-4 max-w-3xl">
    <x-bladewind::card>
        <p class="text-center mt-4">BladewindUI Card.</p>

        <div class="mt-6 text-center">
            <x-bladewind::button
              tag="a"
              href="{{ route('login') }}"
              style="background-color: #048287 !important; border:none;"
              class="px-8 py-4 text-lg rounded-md text-white">
              Go to Login
            </x-bladewind::button>
        </div>
    </x-bladewind::card>
</div>

</body>
</html>