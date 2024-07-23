<?php

namespace App\Http\Controllers\Api;

use App\Models\Exam;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->user());
        $user=$request->user();
        $courses = Course::where('instructor_id',$user->id)->get();
        return response()->json($courses);
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }

    public function enrollCourse($id)
    {
        $course = Course::findOrFail($id);
        $user = Auth::user();
        $user->enrolledCourses()->attach($course);
        return response()->json(['message' => 'Course enrolled successfully']);
    }


    public function leaveCourse($id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à quitter un cours
        if (!$user->can('leave courses')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Vérifier si l'utilisateur est inscrit au cours
        if (!$user->enrolledCourses->contains($id)) {
            return response()->json(['message' => 'Not enrolled in this course'], 400);
        }

        // Quitter un cours
        $user->enrolledCourses()->detach($id);

        return response()->json(['message' => 'Left course successfully']);
    }

    public function getEnrolledCourses()
    {
        $user = Auth::user();

        // Récupérer les cours auxquels l'utilisateur est inscrit
        $enrolledCourses = $user->enrolledCourses;

        return response()->json($enrolledCourses);
    }
    public function lessons($courseId)
    {
        $lessons = Lesson::where('course_id', $courseId)->get();
        return response()->json($lessons);
    }

    public function showLesson($lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        return response()->json($lesson);
    }

    public function addComment(Request $request)
    {
        $user = Auth::user();
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = $user->id;
        $comment->course_id = $request->input('course_id');
        $comment->lesson_id = $request->input('lesson_id');
        $comment->save();
        return response()->json(['message' => 'Comment added successfully']);
    }
    public function createCourse(Request $request)
    {
        // $user = Auth::user();
        $user=$request->user();
        // dd($user);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required', 
            'level' => 'required', 
            'price' => 'required', 

        ]);
        // Créer un nouveau cours
        $course = new Course();
    
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->duration = $request->input('duration');
        $course->level = $request->input('level');
        $course->price = $request->input('price');
        $course->instructor_id = $user->id;
        // Autres attributs du cours...
        $course->save();

        return response()->json($course, 201);
    }

    public function updateCourse(Request $request, $id)
    {
        $user=$request->user();
        // Vérifier si l'utilisateur est autorisé à mettre à jour des cours
        $course=Course::findOrFail($id);

        $course->update($request->all());

        return response()->json($course, 200);
    }

    public function deleteCourse($id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à supprimer des cours
        if (!$user->can('delete courses')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Supprimer un cours
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(null, 204);
    }


    public function createLesson(Request $request)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à créer des leçons
        if (!$user->can('create lessons')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Créer une nouvelle leçon
        $lesson = new Lesson();
        $lesson->title = $request->input('title');
        // Autres attributs de la leçon...
        $lesson->save();

        return response()->json($lesson, 201);
    }

    public function updateLesson(Request $request, $id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à mettre à jour des leçons
        if (!$user->can('update lessons')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Mettre à jour une leçon existante
        $lesson = Lesson::findOrFail($id);
        $lesson->update($request->all());

        return response()->json($lesson, 200);
    }

    public function deleteLesson($id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à supprimer des leçons
        if (!$user->can('delete lessons')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Supprimer une leçon
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        return response()->json(null, 204);
    }

    public function createExam(Request $request)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à créer des examens
        if (!$user->can('create exams')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Créer un nouvel examen
        $exam = new Exam();
        $exam->title = $request->input('title');
        // Autres attributs de l'examen...
        $exam->save();

        return response()->json($exam, 201);
    }

    public function updateExam(Request $request, $id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à mettre à jour des examens
        if (!$user->can('update exams')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Mettre à jour un examen existant
        $exam = Exam::findOrFail($id);
        $exam->update($request->all());

        return response()->json($exam, 200);
    }

    public function deleteExam($id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à supprimer des examens
        if (!$user->can('delete exams')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Supprimer un examen
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return response()->json(null, 204);
    }

    public function publishCourse(Request $request, $id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à publier un cours
        if (!$user->can('publish courses')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Publier un cours
        $course = Course::findOrFail($id);
        $course->update(['published' => true]);

        return response()->json(['message' => 'Course published successfully']);
    }

    public function unpublishCourse($id)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur est autorisé à dépublier un cours
        if (!$user->can('publish courses')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        // Dépublier un cours
        $course = Course::findOrFail($id);
        $course->update(['published' => false]);

        return response()->json(['message' => 'Course unpublished successfully']);
    }

}
