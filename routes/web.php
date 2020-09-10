<?php


// pour la page d'acceuil
 Route::get('/','IndexController@index')->name('root_path');
 // pour l'administration
 Route::get('/administration','HomeAdminController@index')->name('admin_path');
 // mon blog
Route::get('/admin-blog','BlogAdminController@index')->name('admin_blog');

// Inscription user
Route::get('/Inscription','InscriptionController@index')->name('Inscription');
// user inscription
Route::post('/save-user', 'InscriptionController@store');
// auth user
Route::post('/auth-user', 'InscriptionController@Auth');

// authenticated user
Route::get('/connected_user', 'InscriptionController@user_authenticate');

// deconnect user

Route::get('/deconnexion', 'InscriptionController@deconnect')->name('deconnexion');




// connexion
// Route::get('/connexion','CustomerController@index')->name('Connexion');

// Route::post('/register','InscriptionController@store')->name('register');

