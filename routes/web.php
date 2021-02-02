<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//SESI 10
//IMPORT MODEL COURSE
use App\Course;
Route::get('/course', function() {
	//all() memanggil seluruh data pada tabel courses
	$courses = Course::all();

	foreach($courses as $course){
		echo $course->course_name . "<br />";
	}
});


//SESI 11
use App\Student;
Route::get('/student', 'StudentController@index');

//SESI 12
Route::get('/student/create', 'StudentController@create');
Route::post('/student/store', 'StudentController@store');
Route::delete('/student/{id}/delete', 'StudentController@destroy');
Route::post('/student/{id}/edit', 'StudentController@update');
//Route::put('/student/update/{id}', 'StudentController@update');
Route::get('/student/edit/{id}', 'StudentController@edit');

//SESI 14 RELASI
Route::resource('student', 'StudentController');
Route::resource('faculty', 'FacultyController');

Route::get('/faculty/create', 'FacultyController@create');
Route::post('/faculty/store', 'FacultyController@store');
Route::delete('/faculty/{id}/delete', 'FacultyController@destroy');
Route::post('/faculty/{id}/edit', 'FacultyController@update');
Route::get('/faculty/edit/{id}', 'FacultyController@edit');
