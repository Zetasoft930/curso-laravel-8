
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
    <input type="text" name="title" id="title" placeholder="Titulo do Post" value="{{old('title')}}" >
    <textarea name="content" id="content" cols="30" rows="10"  >
        {{old('content')}}
    </textarea>
    <button type="submit">Reigistar</button>
</form>
