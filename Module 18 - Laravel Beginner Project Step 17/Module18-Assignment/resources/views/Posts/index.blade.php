<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <center><h1>Posts</h1></center>
        <div style="border: 1px solid black; padding: 2%; margin: 4%; background-color: dodgerblue;">
            @foreach ($posts as $post)
            <div style="border: 1px solid black; padding: 2%; margin: 5%; background-color: white;">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->description }}</p>
            </div>

            @endforeach
        </div>
    </body>
</html>
