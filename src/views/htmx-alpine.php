<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>FHA Stack Demo</title>

  <?php include_once(__DIR__ . '/' . '../includes/imports.php'); ?>
</head>

<body class="p-4 font-sans">
  <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6 space-y-6">
    <header class="text-center">
      <h1 class="text-3xl font-bold text-gray-800 mb-2">FHA Stack Demo</h1>
      <p class="text-gray-600">Flight + HTMX + Alpine.js</p>
    </header>

    <div class="space-y-6">
      <!-- HTMX Demo Card -->
      <div class="bg-gray-50 p-5 rounded-lg border border-gray-200">
        <h2 class="text-xl font-semibold text-gray-700 mb-3">HTMX Example</h2>
        <button
          class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors duration-200 flex items-center space-x-2"
          hx-get="/message"
          hx-target="#output"
          hx-swap="innerHTML"
          hx-indicator="#spinner">
          <span>Load Message</span>
          <svg id="spinner" class="htmx-indicator w-5 h-5 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
        </button>
        <div id="output" class="mt-3 p-3 bg-indigo-50 text-indigo-700 rounded-md min-h-12 transition-all duration-300"></div>
      </div>

      <!-- Alpine.js Demo Card -->
      <div x-cloak x-data="{ count: 0 }" class="bg-gray-50 p-5 rounded-lg border border-gray-200">
        <h2 class="text-xl font-semibold text-gray-700 mb-3">Alpine.js Example</h2>
        <div class="flex items-center space-x-4">
          <button
            @click="count--"
            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors duration-200"
            :disabled="count <= 0"
            :class="{'opacity-50 cursor-not-allowed': count <= 0}">
            Decrement
          </button>

          <span class="text-2xl font-mono px-4 py-2 bg-white rounded-md shadow-inner" x-text="count"></span>

          <button
            @click="count++"
            class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors duration-200">
            Increment
          </button>
        </div>
        <div class="mt-3 text-sm text-gray-500" x-show="count >= 5">
          <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-800 rounded">You've clicked 5+ times!</span>
        </div>
      </div>
    </div>

    <footer class="text-center text-sm text-gray-500 mt-8">
      <p>Try interacting with both examples to see the magic of FHA stack!</p>
    </footer>
  </div>
  <?php
  include_once(__DIR__ . '/' . '../includes/esbuild.php');
  esbuild("main", "js", true);
  ?>
  <script src="js/main.js"></script>
</body>

</html>
