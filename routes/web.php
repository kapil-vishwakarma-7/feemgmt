
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



Route::get('/', 'HomeController@index');
Route::resource('institute','InstituteController');
Route::resource('courses','CourseController');
Route::resource('admission','AdmissionController');
Route::resource('enquiry','EnquiryController');
Route::resource('feesmaster','FeesMasterController');
Route::resource('fees','FeesController');
Route::resource('report','ReportController');

Route::post('createacademicyear','AcademicYearController@store');

Route::get('getsemester','FeesMasterController@getSemester')->name('getsemester');

Route::get('getsemesterlist','AdmissionController@getSemester')->name('getsemester');

Route::post('searchstudent','FeesMasterController@searchStudent')->name('searchstudent');
Route::get('getfeetype','FeesMasterController@getFeeType')->name('getfeetype');

Route::get('getfeeamount','FeesMasterController@getFeeAmount')->name('getfeeamount');
Route::get('getduefeeamount','FeesMasterController@getDueFeeAmount')->name('getduefeeamount');

Route::get('enquairyview','EnquiryController@showEnquery');
Auth::routes();

Route::get('/home', 'HomeController@index1')->name('home');



Route::get('feespay/{ID}','FeesController@feesPay')->name('feespay');
Route::get('studentdetail/{ID}','AdmissionController@showStudentDetail')->name('studentdetail');
Route::get('studentupdate/{ID}','AdmissionController@studentUpdate')->name('studentupdate');

Route::get('getfeemaster','FeesMasterController@getFeeMaster');


Route::get('/chart', function () {
    return view('chart');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('refreshcourse','CourseController@refreshCourse');
Route::get('error',function(){
	
	echo "<script> alert('admin') </script>";

	return redirect('/login');
});