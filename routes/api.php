<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\User\InstructorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function() {   
    Route::post('/auth/logoutUser', [AuthController::class,'LogoutUser']);
    
});


//login 
Route::get('/csrftoken',[AuthController::class,'csrftoken']);

Route::post('/auth/RegisterUser', [AuthController::class,'RegisterUser']);
Route::post('/auth/loginUser', [AuthController::class,'LoginUser']);
Route::post('/auth/LogoutUser', [AuthController::class,'LogoutUser']);

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
    Route::get('/{id}', [StudentController::class, 'show']);
    Route::post('/', [StudentController::class, 'store']);
    Route::put('/{id}', [StudentController::class, 'update']);
    Route::delete('/{id}', [StudentController::class, 'destroy']);

});
Route::prefix('instructors')->group(function () {
    Route::get('/', [InstructorController::class, 'index']);
    Route::get('/{id}', [InstructorController::class, 'show']);
    Route::post('/', [InstructorController::class, 'store']);
    Route::put('/{id}', [InstructorController::class, 'update']);
    Route::delete('/{id}', [InstructorController::class, 'destroy']);

});
Route::group(['middleware' => ['auth:sanctum','role:Instructor']], function () {

    Route::prefix('course')->group(function () {
        Route::get('/list', [CourseController::class, 'index']);
        Route::get('/{id}', [CourseController::class, 'show']);

        Route::post('/create', [CourseController::class, 'createCourse']);
        Route::put('/update/{id}', [CourseController::class, 'updateCourse']);
        Route::delete('/delete/{id}', [CourseController::class, 'deleteCourse']);
        Route::post('/lessons/create', [CourseController::class, 'createLesson']);
        Route::put('/lessons/update/{id}', [CourseController::class, 'updateLesson']);
        Route::delete('/lessons/delete/{id}', [CourseController::class, 'deleteLesson']);
        Route::post('/exams/create', [CourseController::class, 'createExam']);
        Route::put('/exams/update/{id}', [CourseController::class, 'updateExam']);
        Route::delete('/exams/delete/{id}', [CourseController::class, 'deleteExam']);
        Route::put('/publish/{id}', [CourseController::class, 'publishCourse']);
        Route::put('/unpublish/{id}', [CourseController::class, 'unpublishCourse']);
    
    });
    
});

Route::group(['middleware' => ['auth:sanctum','role:Student']], function () {

    Route::prefix('course')->group(function () {
        Route::post('/{id}/enroll', [CourseController::class, 'enrollCourse']);
        Route::post('/{id}/leave', [CourseController::class, 'leaveCourse']);
        Route::get('/enrolled', [CourseController::class, 'getEnrolledCourses']);
        Route::get('/{courseId}/lessons', [CourseController::class, 'lessons']);
        Route::get('/lessons/{lessonId}', [CourseController::class, 'showLesson']);
        Route::post('/comments', [CourseController::class, 'addComment']);
    
    });
    
});


