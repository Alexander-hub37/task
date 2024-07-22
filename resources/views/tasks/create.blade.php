<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto px-4">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">Create Task</h1>
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 white:bg-gray-800 gray:border-gray-700">
    <form class="max-w-sm mx-auto" action="{{ route('tasks.store') }}" method="POST">
    @csrf
  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
    <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 gray:border-gray-600 white:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Task" required />
  </div>
  <div class="mb-5">
    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
    <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 gray:border-gray-600 white:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a description..."></textarea>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
</form>
</div>
</div>
</body>
</html>
