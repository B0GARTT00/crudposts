<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Post</title>
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="card-glass text-white">
    <h2 class="text-center fw-bold mb-4">📝 Create a New Post</h2>
    
    <form action="{{ route('posts.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <input type="text" class="form-control" id="title" name="title" required placeholder="Enter post title">
      </div>

      <div class="mb-3">
        <textarea class="form-control" id="body" name="body" rows="4" required placeholder="Write your post..."></textarea>
      </div>

      <button type="submit" class="btn btn-custom mb-2">✨ Publish Post</button>
      <a href="{{ route('posts.index') }}" class="btn btn-back text-center">🔙 Back to Posts</a>
    </form>
  </div>

</body>
</html>
