<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// returns the home page with all students
Route::get('/', [StudentController::class, 'index'])->name('students.index');
// returns the form for adding a student
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
// adds a student to the database
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
// returns a page that shows a full student
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
// returns the form for editing a student
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
// updates a student
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
// deletes a student
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
// restores a soft deleted student
Route::post('/students/{student}/restore', [StudentController::class, 'restore'])->name('students.restore');