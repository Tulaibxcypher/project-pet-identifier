<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    
</head>

<body class="bg-blue-800">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl text center  text-white mb-4">Add User</h1>
        <form action="add_plant_process.php" method="POST" class="max-w-lg bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-md px-3 py-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-gray-700 font-bold mb-2">Phone:</label>
                <input type="number" name="phone" id="phone" class="border border-gray-300 rounded-md px-3 py-2 w-full" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Email:</label>
                <textarea name="email" id="description" class="border border-gray-300 rounded-md px-3 py-2 w-full" required></textarea>
            </div>
            
                <button type="submit" class="bg-blue-800 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add</button>
            </div>
        </form>
    </div>
</body>

</html>
