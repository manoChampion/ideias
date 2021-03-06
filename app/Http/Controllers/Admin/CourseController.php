<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Field;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();

        return view('admin.esp.course.view-courses', [
            'title' => 'Cursos',
            'path'  => 'Especialização / Cursos',
        ])->with('courses', $courses);
    }

    public function create(Request $request) {

        $fields = Field::all();        

        if ($request->get('name')) {
            $course = new Course();
            $field = Field::find($request->get('field'));

            $course->name = $request->get('name');
            $course->description = $request->get('description');
            $course->field()->associate($field);
            $course->save();
            

            return redirect()->route('view-courses');
        }

        return view('admin.esp.course.create-course', [
            'title' => 'Criar Curso',
            'path'  => 'Especialização / Cursos / Criar Curso',
        ])->with('fields', $fields);
    }

    public function update($course_id, Request $request) {

        $fields = Field::all();
        $course = Course::find($course_id);

        if ($request->get('name')) {
            $course = Course::find($course_id);

            $course->name = $request->get('name');
            $course->description = $request->get('description');
            
            $field = Field::find($request->get('field'));
            
            $course->field()->associate($field);
            $course->save();

            return redirect()->route('view-courses');
        }

        return view('admin.esp.course.update-course', [
            'title' => 'Editar Curso',
            'path'  => 'Especialização / Cursos / Editar Curso',
        ])->with([
            'fields' => $fields,
            'course' => $course,
        ]);

    }

    public function delete($course_id) {
        $course = Course::find($course_id);
        $course->delete();

        return redirect()->route('view-courses');
    }
}
