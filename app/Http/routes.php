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

//
Route::get('/', 'ViidiaController@index');


Route::get('/about', 'ViidiaController@about');

//Route::get('/projects', function () {
//    return view('projects');
//});
Route::get('/projects', 'ViidiaController@projects');
Route::get('/skip/{take}', 'ViidiaController@projectsTake');
Route::get('/skipindex/{take}', 'ViidiaController@indexTake');
Route::get('/projects/{id}', 'ViidiaController@projectsId');

Route::get('/services', 'ViidiaController@services');
Route::get('/services/{id}', 'ViidiaController@serviceCard');
Route::get('/technologies/take/{id}/my/{tech}', 'ViidiaController@methodunicim');
Route::get('/technologies', 'ViidiaController@technology');
Route::get('/technologies/{id}', 'ViidiaController@technologyCard');

Route::get('/contacts', 'ViidiaController@contacts');


/*Mail Order*/
Route::post('/orderprice','ViidiaController@orderPrice');
Route::post('/mailsave','ViidiaController@mailSave');
Route::post('/modalcall','ViidiaController@modalCall');
/*Mail Order*/

/* Administration route*/

Route::auth();

Route::get('/admin-viidia', 'HomeController@index');

// ** TECHNOLOGIES ** //

Route::get('/admin/technologies', 'HomeController@technologiesAll');
Route::get('/admin/technologies/{id}/edit', 'HomeController@technologiesGetId');
Route::post('/admin/technologies/{id}/update', 'HomeController@technologiesUpdateId');

// ** END TECHNOLOGIES ** //
// ** THE TECHNOLOGIES ** //

Route::get('/admin/thetechnologies', 'HomeController@theTechnologiesAll');
Route::get('/admin/thetechnologies/{id}/edit', 'HomeController@theTechnologiesGetId');
Route::post('/admin/thetechnologies/{id}/update', 'HomeController@theTechnologiesUpdateId');

Route::get('/admin/thetechnologies/create', 'HomeController@theTechnologiesGetCreate');
Route::post('/admin/thetechnologies/create', 'HomeController@theTechnologiesCreateDB');
Route::get('/admin/thetechnologies/{id}/delete', 'HomeController@theTechnologiesDelete');

// ** END THE TECHNOLOGIES ** //


Route::any('/register',function (){
   return redirect('/login');
});

// ** PROJECTS ** //

Route::get('/admin/projects', 'HomeController@projectsAll');
Route::get('/admin/projects/{id}/edit', 'HomeController@projectsGetId');
Route::post('/admin/projects/{id}/update', 'HomeController@projectsUpdateId');
Route::get('/admin/projects/{id}/delete', 'HomeController@projectsDelete');
Route::post('/admin/projects/create', 'HomeController@projectsCreateDb');
Route::get('/admin/projects/create', 'HomeController@projectsCreate');


Route::post('/admin/project/gl/{project_id}/add', 'HomeController@projectsAdGl');
Route::get('/admin/gl/{project_id}/del', 'HomeController@projectsSingleImgGl');

// ** END PROJECTS ** //

// ** PARTNERS 1** // status in db in column project_id=00
Route::get('/admin/partners', 'HomeController@partnersGet'); //-
Route::post('/admin/parnters/gl/{project_id}/add', 'HomeController@partnersAdGl'); //-
// ** END PROJECTS 1** //

// ** Достижения** // status in db in column project_id=00
Route::get('/admin/achivements', 'HomeController@achivementsAll'); //-

Route::get('/admin/achivement/create', 'HomeController@achivementGetCreate');
Route::post('/admin/achivement/create', 'HomeController@achivementCreateDB');

Route::get('/admin/achivement/{id}/edit', 'HomeController@achivementGetId');
Route::post('/admin/achivement/{id}/update', 'HomeController@achivementUpdateId');
Route::get('/admin/achivement/{id}/delete', 'HomeController@achivementDelete');
// ** END Достижения ** //


//**  SETTING **//
Route::get('/admin/settings', 'HomeController@getSettings');
Route::post('/admin/settings/{id}/update', 'HomeController@UpdateSettings');

//** END SETTING **//


//**  EVENTS **//

Route::get('/admin/events/', 'HomeController@eventsAll');
Route::post('/admin/events/change', 'HomeController@eventsChange');

Route::get('/admin/event/create', 'HomeController@eventCreate');
Route::post('/admin/event/create', 'HomeController@eventCreateDB');
Route::get('/admin/events/{id}/edit', 'HomeController@getIdEvent');

Route::post('/admin/event/{id}/update', 'HomeController@updateIdEvent');
Route::get('/admin/event/{id}/delete', 'HomeController@eventDelete');



////** END EVENTS **//

// ** SERVICES ** //
Route::get('/admin/services', 'HomeController@servicesAll');

Route::get('/admin/services/{id}/edit', 'HomeController@serviceGetId');
Route::post('/admin/services/{id}/update', 'HomeController@serviceUpdateId');
Route::get('/admin/service/{id}/remove', 'HomeController@servicesDelete');

Route::get('/admin/service/create', 'HomeController@serviceCreate');
Route::post('/admin/services/create', 'HomeController@serviceCreateDb');
// ** END SERVICES ** //
