<h1>create new post</h1>

{{-- <form action="{{url('post/insert)'}}" method="POST"> --}}
<form action="{{route('post.insert')}}" method="POST">
    @csrf
    <input type="text" name="title" id="" placeholder=" enter title"> <br>
    <input type="text" name="body" id="" placeholder="enter body"> <br>
    <button type="submit">submit</button>
</form>