<!-- resources/views/results.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="antialiased bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Route Results</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Route ID</th>
                    <th class="py-2">Route Name</th>
                    <th class="py-2">Departure Location</th>
                    <th class="py-2">Destination</th>
                    <th class="py-2">Distance</th>
                    <th class="py-2">Duration</th>
                    <th class="py-2">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($routes as $route)
                <tr>
                    <td class="py-2">{{ $route->route_id }}</td>
                    <td class="py-2">{{ $route->route_name }}</td>
                    <td class="py-2">{{ $route->departure_location }}</td>
                    <td class="py-2">{{ $route->destination }}</td>
                    <td class="py-2">{{ $route->distance }}</td>
                    <td class="py-2">{{ $route->duration }}</td>
                    <td class="py-2">
                        @if ($route->image_path)
                        <img src="{{ asset('storage/' . $route->image_path) }}" alt="Route Image"
                            class="w-16 h-16 object-cover">
                        @else
                        No Image
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>