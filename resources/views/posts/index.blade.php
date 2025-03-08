<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Posts</title>
</head>
<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="text-white">Posts</h1>
      <a href="{{ route('posts.create') }}" class="btn btn-custom" style="max-width: 150px;">Add Post</a>
    </div>

    <div class="row g-4">
      @foreach ($posts as $post)
        <div class="col-md-6 col-lg-4">
          <div class="post-card">
            <div class="card-header">
              <h5 class="mb-0">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
              <p>{{ $post->body }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-custom" style="max-width: 100px;">Edit</a>
              <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-back" style="max-width: 100px;">Delete</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>
