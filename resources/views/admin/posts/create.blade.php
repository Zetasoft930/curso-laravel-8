
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <h1>Registar Post</h1>

    @if ($errors->any())
        <h4>Errors</h4>
        <ul style="color: red">
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('create') }}" method="POST">
    @csrf
        <div class="row">
            <div class="col-6">
                <input class="form-control" type="text" name="title"
                        id="title" placeholder="Titulo do Post"
                        value="{{old('title')}}" >
            </div>
        </div>
         <div class="row">
            <div class="col-6">
                <textarea class="form-control"
                name="content" id="content"
                cols="30" rows="10"  >
                    {{old('content')}}
                </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button class="btn btn-primary" type="submit">Reigistar</button>
            </div>
        </div>
    </form>

</body>
</html>


