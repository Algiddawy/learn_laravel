<h1>show all posts </h1>
<table>
    {{-- <th>#</th> --}}
    <th>id</th>
    <th>title</th>
    <th>body</th>
    <th>proth</th>
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">softdelete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>