<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TS Counter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-md text-center w-80">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Page Counter</h1>

    <div class="text-5xl font-mono mb-6 text-blue-600" id="counter">0</div>

    <div class="flex justify-center space-x-3">
      <button id="decrement" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
        -
      </button>
      <button id="reset" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition">
        Reset
      </button>
      <button id="increment" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition">
        +
      </button>
    </div>
  </div>
  <?php
  include_once(__DIR__ . '/' . '../includes/esbuild.php');
  esbuild("counter", "ts", true);
  ?>
</body>

</html>
