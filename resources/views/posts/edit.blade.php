<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Post</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
</head>
<body>

  <div class="update-post-container">
    <div class="update-post-card">
      <h3>Edit Post</h3>
      
      <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-floating">
          <input type="text" class="form-control" id="title" name="title" 
            value="{{ $post->title }}" required placeholder="Title">
          <label for="title">Title</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="author" name="author" 
            value="{{ $post->author ?? '' }}" placeholder="Author">
          <label for="author">Author</label>
        </div>

        <div class="form-floating">
          <textarea class="form-control" id="body" name="body" rows="3" required 
            placeholder="Body">{{ $post->body }}</textarea>
          <label for="body">Body</label>
        </div>

        <div class="btn-container">
          <button type="submit" class="btn-update">Update Post</button>
          <a href="{{ route('posts.index') }}" class="btn-back">Cancel</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
