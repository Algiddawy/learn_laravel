<h1>edit post</h1>

{{-- <form action="{{url('post/insert)'}}" method="POST"> --}}
<form action="{{route('post.update',$post->id)}}" method="POST">
    @csrf
    <input type="text" name="title" id="" value="{{$post->title}}"> <br>
    <input type="text" name="body" id="" value="{{$post->body}}"> <br>
    <button type="submit">submit</button>
</form>