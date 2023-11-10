<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Demo-plot</title>
</head>
<body>
    <h1 class="flex justify-center text-lg">List</h1>
    <div class="bg-red-300 flex justify-center">Title,Content,Deadline</div>
        <div class="bg-green-300 h-40 m-12">
            <span>Link</span>
            <a class="m-8 flex justify-center h-20 bg-orange-500" href="{{ route('start') }}">aaa</a>
        </div>
    <div class="bg-yellow-200 w-auto m-8 flex flex-col">
        <div class="flex justify-center">
            ToDoリストに追加
        </div>
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="flex m-4">
                <span>Title:</span>
                <input  type="text" value="input" name="title">
            </div>
            <div class="flex m-4">
                <span>Content:</span>
                <input  class="w-12" type="text" value="内容" name="content">
            </div>
            <div class="flex m-4">
                <span>Deadline:</span>
                <input type="date" name="date">
            </div>
            <div class="flex m-4">
                <span>Deadline:</span>
                <input type="time" name="time">
            </div>
            <div class="flex justify-center p-4">
                <button class="border border-green-400">Button</button>
            </div>
        </form>    
    </div>
</body>
</html>