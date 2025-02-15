<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Services</title>
    @vite('resources/css/app.css') <!-- Add Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-lg font-bold">Pet Adoption</div>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:text-gray-300">Dashboard</a></li>
                <li><a href="/services" class="hover:text-gray-300">Services</a></li>
                <li><a href="/contact" class="hover:text-gray-300">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">Our Services</h1>

        <div class="space-y-8">
            <!-- Adoption Process Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="adoption_icon.png" alt="Adoption Process" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Adoption Process Information</h2>
                </div>
                <p class="mt-2 text-gray-700">Our adoption process is designed to help you find the perfect pet. From filling out an application to meeting your future companion, we guide you every step of the way.</p>
            </div>

            <!-- Available Pets Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="available_pets_icon.png" alt="Available Pets" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Available Pets</h2>
                </div>
                <p class="mt-2 text-gray-700">Explore our listings of pets currently available for adoption. Each pet has a profile with photos and details about their personality, breed, age, and special needs.</p>
            </div>

            <!-- Pet Care Resources Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="pet_care_icon.png" alt="Pet Care Resources" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Pet Care Resources</h2>
                </div>
                <p class="mt-2 text-gray-700">Access a wealth of resources on pet care, including articles, videos, and tips on feeding, grooming, training, and general well-being.</p>
            </div>

            <!-- Veterinary Services Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="veterinary_icon.png" alt="Veterinary Services" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Veterinary Services</h2>
                </div>
                <p class="mt-2 text-gray-700">We provide information on local veterinarians, including contact details and services offered. Learn how to find affordable veterinary care for your new pet.</p>
            </div>

            <!-- Foster Programs Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="fostering_icon.png" alt="Foster Programs" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Foster Programs</h2>
                </div>
                <p class="mt-2 text-gray-700">Become a hero by fostering a pet! Our foster program allows you to provide temporary care for animals in need while they await adoption.</p>
            </div>

            <!-- Volunteer Opportunities Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="volunteering_icon.png" alt="Volunteer Opportunities" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Volunteer Opportunities</h2>
                </div>
                <p class="mt-2 text-gray-700">Join our dedicated team of volunteers! We have various opportunities for people who want to help with events, care for pets, and support our mission.</p>
            </div>

            <!-- Events and Fundraisers Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="events_icon.png" alt="Events and Fundraisers" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Events and Fundraisers</h2>
                </div>
                <p class="mt-2 text-gray-700">Stay informed about our upcoming events, including adoption days and fundraising activities. Participate and help us make a difference in the lives of pets!</p>
            </div>

            <!-- Support Services Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <img src="support_icon.png" alt="Support Services" class="w-10 h-10 mr-3">
                    <h2 class="text-2xl font-semibold text-blue-500">Support Services</h2>
                </div>
                <p class="mt-2 text-gray-700">We offer behavioral support for pets and resources for those who need to rehome their animals. Our goal is to ensure every pet finds a loving home.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center p-4">
        <p>&copy; 2025 Pet Adoption. All rights reserved.</p>
    </footer>
</body>
</html>