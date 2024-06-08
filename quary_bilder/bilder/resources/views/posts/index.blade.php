<h1>all post</h1>

<button herf="{{route('post.delete.all')}}">delete all</button>
@foreach ($posts as $post)

    <li>{{$post->title}}</li>
    <li>{{$post->body}}</li>
<button herf="{{route('post.edit' , $post->id)}}">Edit</button>
<button herf="{{route('post.delete' , $post->id)}}">Delete</button>
@endforeach