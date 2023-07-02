<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <center><h1>Latest Posts</h1></center>
        <div
            style="
                border: 1px solid black;
                padding: 2%;
                margin: 4%;
                background-color: dodgerblue;
            "
        >
            @foreach ($posts as $post) @if ($post->latestPost())
            <div
                style="
                    border: 1px solid black;
                    padding: 2%;
                    margin: 5%;
                    background-color: white;
                "
            >
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->description }}</p>
                <h4>
                    Category:
                    <span style="color: green">{{ $post->name }}</span>
                </h4>
            </div>
            @else
            <p>No posts found for this category.</p>
            @endif @endforeach
        </div>
    </body>
</html>
