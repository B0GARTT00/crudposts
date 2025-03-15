<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Add Student</title>
</head>
<body>
  <div class="card-glass text-white">
    <h2 class="text-center fw-bold mb-4">📝 Create a New Student</h2>
    
    <form action="{{ route('students.store') }}" method="post">
      @csrf

      <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter student name">
      </div>

      <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter student email">
      </div>

      <div class="mb-3">
        <input type="text" class="form-control" id="course" name="course" required placeholder="Enter student course">
      </div>

      <button type="submit" class="btn btn-custom mb-2" style="font-size: 0.8rem;">✨ Add Student</button>
      <a href="{{ route('students.index') }}" class="btn btn-back text-center" style="font-size: 0.8rem;">🔙 Back to Students</a>
    </form>
  </div>
</body>
</html> 