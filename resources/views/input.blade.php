<!-- resources/views/input.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Route</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="antialiased bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Input Route</h1>
        <form action="{{ route('routes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="route_name" class="block text-gray-700">Route Name</label>
                <input type="text" id="route_name" name="route_name" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="departure_location" class="block text-gray-700">Departure Location</label>
                <input type="text" id="departure_location" name="departure_location" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="destination" class="block text-gray-700">Destination</label>
                <input type="text" id="destination" name="destination" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="distance" class="block text-gray-700">Distance</label>
                <input type="number" id="distance" name="distance" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="duration" class="block text-gray-700">Duration</label>
                <input type="text" id="duration" name="duration" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Route Image</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full" accept="image/*" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</body>


</html>