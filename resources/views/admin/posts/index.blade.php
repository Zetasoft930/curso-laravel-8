
<a href="{{ route('post.create')}}"> Registar Novo Post</a>
<h1>Posts</h1>

@foreach ( $posts as $post)
    <p>{{  $post->title }}</p>
@endforeach
