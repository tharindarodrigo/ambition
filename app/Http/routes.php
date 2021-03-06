<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('home');
//});
Route::get('/', 'HomeController@index');
Route::post('/user-profile/update', 'HomeController@updateUser');


Route::post('/user/employment/store', 'EmploymentsController@createEmployment');
Route::post('/user/employment/delete', 'EmploymentsController@deleteEmployment');
Route::get('/user/employment/get', 'EmploymentsController@getEmployments');

Route::post('/user/interests/store', 'InterestsController@createInterest');
Route::post('/user/interests/delete', 'InterestsController@deleteInterest');
Route::get('/user/interests/get', 'InterestsController@getInterests');

Route::post('/user/memberships/store', 'MembershipsController@createMembership');
Route::get('/user/memberships/get', 'MembershipsController@getMemberships');
Route::post('/user/memberships/delete', 'MembershipsController@deleteMembership');

Route::post('/user/achievements/store', 'AchievementsController@createAchievement');
Route::post('/user/achievements/delete', 'AchievementsController@deleteAchievement');
Route::get('/user/achievements/get', 'AchievementsController@getAchievements');

Route::post('/user/educational-goals/store', 'EducationalGoalsController@createEducationalGoal');
Route::post('/user/educational-goals/delete', 'EducationalGoalsController@deleteEducationalGoal');
Route::get('/user/educational-goals/get', 'EducationalGoalsController@getEducationalGoals');

Route::post('/user/professional-skills/store', 'ProfessionalSkillsController@createProfessionalSkill');
Route::post('/user/professional-skills/delete', 'ProfessionalSkillsController@deleteProfessionalSkill');
Route::get('/user/professional-skills/get', 'ProfessionalSkillsController@getProfessionalSkills');

Route::post('/user/languages/store', 'LanguagesController@createLanguage');
Route::post('/user/languages/delete', 'LanguagesController@deleteLanguage');
Route::get('/user/languages/get', 'LanguagesController@getLanguages');

Route::post('/user/schools/store', 'SchoolsController@createSchool');
Route::post('/user/schools/delete', 'SchoolsController@deleteSchool');
Route::get('/user/schools/get', 'SchoolsController@getSchools');


Route::post('/user/lived-places/store', 'LivedPlacesController@createLivedPlace');
Route::post('/user/lived-places/delete', 'LivedPlacesController@deleteLivedPlace');
Route::get('/user/lived-places/get', 'LivedPlacesController@getLivedPlaces');

Route::post('/user/degrees/store', 'DegreesController@createDegree');
Route::post('/user/degrees/delete', 'DegreesController@deleteDegree');
Route::get('/user/degrees/get', 'DegreesController@getDegrees');

Route::post('/user/certifications/store', 'CertificationsController@createCertification');
Route::post('/user/certifications/delete', 'CertificationsController@deleteCertification');
Route::get('/user/certifications/get', 'CertificationsController@getCertifications');

Route::auth();

