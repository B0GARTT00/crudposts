<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
  <title>Edit Student</title>
</head>
<body>
  <div class="update-post-container">
    <div class="update-post-card">
      <h3>Edit Student</h3>
      
      <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-floating">
          <input type="text" class="form-control" id="name" name="name" 
            value="{{ $student->name }}" required placeholder="Name">
          <label for="name">Name</label>
        </div>

        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" 
            value="{{ $student->email }}" required placeholder="Email">
          <label for="email">Email</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" id="course" name="course" 
            value="{{ $student->course }}" required placeholder="Course">
          <label for="course">Course</label>
        </div>

        <div class="btn-container">
          <button type="submit" class="btn-update">Update Student</button>
          <a href="{{ route('students.index') }}" class="btn-back">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html> 