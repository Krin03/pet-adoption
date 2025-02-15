<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css') <!-- Add Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <ul class="flex space-x-6 text-white">
            <li><a href="/" class="hover:text-gray-300">Dashboard</a></li>
            <li><a href="/services" class="hover:text-gray-300">Services</a></li>
            <li><a href="/contact" class="hover:text-gray-300">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">Contact Us</h1>

        <!-- Contact Information -->
        <div class="space-y-6 mb-8">
            <p class="text-lg">Phone: <span class="font-semibold text-gray-700">+1234567890</span></p>
            <p class="text-lg">Email: <span class="font-semibold text-gray-700">info@petadoption.com</span></p>
        </div>

        <!-- Adoption Inquiries Form -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
            <h2 class="text-2xl font-semibold text-blue-500 mb-4">Adoption Inquiries</h2>
            <form action="/submit-inquiry" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="pet_name" class="block text-sm font-medium text-gray-700">Pet Name</label>
                        <input type="text" name="pet_name" id="pet_name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="inquiry" class="block text-sm font-medium text-gray-700">Your Inquiry</label>
                        <textarea name="inquiry" id="inquiry" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full mt-4 py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit Inquiry</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Shelter Locations -->
        <div class="space-y-4 mb-8">
            <h2 class="text-2xl font-semibold text-blue-500">Shelter Locations</h2>
            <p class="text-gray-700">Our partner shelters and adoption locations:</p>
            <!-- List of locations will go here -->
        </div>

        <!-- Follow Us Section -->
        <div class="space-y-4 mb-8">
            <h2 class="text-2xl font-semibold text-blue-500">Follow Us</h2>
            <p class="text-gray-700">Stay connected through social media:</p>
            <div class="flex space-x-6">
                <a href="https://facebook.com" class="text-blue-600 hover:text-blue-800">Facebook</a>
                <a href="https://instagram.com" class="text-blue-600 hover:text-blue-800">Instagram</a>
                <a href="https://twitter.com" class="text-blue-600 hover:text-blue-800">Twitter</a>
            </div>
        </div>

        <!-- Newsletter Subscription -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-blue-500 mb-4">Newsletter</h2>
            <form action="/subscribe-newsletter" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <button type="submit" class="w-full mt-4 py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
