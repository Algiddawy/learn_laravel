<h1>create new post</h1>

<form action="{{route('posts.store')}}" method="post">
 @csrf
    <input type="text" name="title" placeholder="Enter title"><br><br>
    <input type="text" name="body" placeholder="Enter body"><br><br>
    <button type="submit">submit</button>
</form>