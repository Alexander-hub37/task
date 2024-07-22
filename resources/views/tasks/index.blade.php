<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto px-4">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-6">
        Create New Task
    </a>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($tasks as $task)
            <div class="bg-white border border-gray-200 rounded-lg shadow white:bg-gray-800 gray:border-gray-700">
            <div class="p-5">  
            <div class="p-5 flex items-center justify-between">
                    
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">{{ $task->name }}</h5>
                    </a>
                    <div>
                    @if ($task->status === 'completed')
                        <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#4cae29;" d="M0,256.006C0,397.402,114.606,512.004,255.996,512C397.394,512.004,512,397.402,512,256.006 C512.009,114.61,397.394,0,255.996,0C114.606,0,0,114.614,0,256.006z"></path> <path style="fill:#4cae29;" d="M512,256.005c0.002-35.02-7.046-68.387-19.772-98.786c-0.291-0.359-0.556-0.738-0.949-1.021 c-0.061-0.045-67.051-66.963-67.113-67.005c-0.419-0.555-0.839-1.115-1.436-1.543c-3.187-2.285-7.595-1.553-9.867,1.622 L184.418,407.711c0,0-4.423-4.423-4.425-4.425c-26.662-26.652-53.315-53.315-79.973-79.972l-1.631-1.632 c-2.762-2.762-7.235-2.762-9.998,0c-2.763,2.762-2.762,7.235,0,9.998c0,0,91.909,91.93,91.913,91.933l86.5,86.5l1.574,1.575 C404.023,505.231,512,393.247,512,256.005z"></path> <path style="fill:#F4F6F9;" d="M422.731,87.65c-3.186-2.285-7.595-1.553-9.867,1.622L184.41,407.724l-86.02-86.041 c-2.762-2.762-7.235-2.762-9.997,0c-2.762,2.762-2.762,7.235,0,9.997l91.909,91.93c1.329,1.332,3.131,2.071,4.998,2.071 c0.19,0,0.383-0.006,0.576-0.02c2.068-0.173,3.959-1.243,5.168-2.927L424.353,97.516C426.627,94.34,425.903,89.929,422.731,87.65z"></path> </g></svg>
                    @elseif ($task->status === 'pending')
                        <svg width="54px" height="54px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M511.9 183c-181.8 0-329.1 147.4-329.1 329.1s147.4 329.1 329.1 329.1c181.8 0 329.1-147.4 329.1-329.1S693.6 183 511.9 183z m0 585.2c-141.2 0-256-114.8-256-256s114.8-256 256-256 256 114.8 256 256-114.9 256-256 256z" fill="#db7f33"></path><path d="M548.6 365.7h-73.2v161.4l120.5 120.5 51.7-51.7-99-99z" fill="#db7f33"></path></g></svg>
                    @endif
                    </div>
                    </div>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $task->description }}</p>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Update
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </a>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
