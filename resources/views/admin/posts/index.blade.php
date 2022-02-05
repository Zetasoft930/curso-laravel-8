<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Laravel - Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


    <h1>Posts</h1>
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-success" href="{{ route('post.create')}}"> Novo</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
