<form class="space-y-6" action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
    @csrf
    @if(isset($task))
        @method('PUT')
    @endif

    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
        <input type="text" name="name" id="name" value="{{ $task->name ?? '' }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-600 gray:border-gray-600 black:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Task" required />
    </div>
    <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
        <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 gray:border-gray-600 gray:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a description...">{{ $task->description ?? '' }}</textarea>
    </div>
    <div class="mb-5">
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Status</label>
        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 white:bg-gray-700 gray:border-gray-600 gray:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="pending" {{ (isset($task) && $task->status == 'pending') ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ (isset($task) && $task->status == 'completed') ? 'selected' : '' }}>Completed</option>
        </select>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{ isset($task) ? 'Update' : 'Create' }}
    </button>
</form>
