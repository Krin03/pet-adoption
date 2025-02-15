<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-lg font-bold">Pet Adoption</div>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:text-gray-300">Dashboard</a></li>
                <li class="relative group">
                    <a href="/services" class="hover:text-gray-300">Services</a>
                    <div class="absolute left-0 hidden mt-2 w-48 bg-white rounded-md shadow-lg group-hover:block">
                        <a href="/grooming" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Grooming</a>
                        <a href="/training" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Training</a>
                    </div>
                </li>
                <li><a href="/contact" class="hover:text-gray-300">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Dashboard Content -->
    <div class="container mx-auto px-4 py-8">

        <!-- Welcome Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-gray-800">Welcome to the Pet Adoption Dashboard</h1>
        </div>

        <!-- Search Section -->
        <div class="mb-6">
            <label for="search" class="block text-lg font-medium text-gray-700">Search for Pets:</label>
            <div class="flex mt-2">
                <input type="text" id="search" placeholder="Search by breed, size, age, location" class="p-2 w-full border border-gray-300 rounded-l-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <button class="bg-blue-600 text-white px-4 rounded-r-md hover:bg-blue-700">Search</button>
            </div>
        </div>

        <!-- Available Pets Section -->
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Available Pets</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Pet Item -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="dog_image.jpg" alt="Cute Dog" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-lg font-semibold">Buddy</h3>
                    <p class="text-gray-600">Breed: Labrador | Age: 2 years</p>
                    <p class="text-gray-600 mb-4">Description: Cute and friendly dog available for adoption.</p>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">View Details</button>
                    <button class="w-full mt-2 bg-gray-200 text-gray-800 py-2 rounded-md hover:bg-gray-300">Favorite</button>
                </div>
                <!-- Add more pet items here -->
            </div>
        </div>

        <!-- Upcoming Events Section -->
        <div class="mb-6 bg-white p-4 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Upcoming Adoption Events</h3>
            <ul class="space-y-2">
                <li class="text-gray-600">Adoption Fair - March 15, 2023</li>
                <li class="text-gray-600">Pet Training Workshop - March 22, 2023</li>
                <li class="text-gray-600">Volunteer Day - March 29, 2023</li>
            </ul>
        </div>

        <!-- Donations

    </div>

</body>
</html>
