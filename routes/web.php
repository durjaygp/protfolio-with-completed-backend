<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TeachingController;
use App\Http\Controllers\ProfileController;



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

//----------------FrontEnd Routes------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/services/{slug}',[HomeController::class, 'services'])->name('services');


Route::get('/service/{slug}', [HomeController::class, 'service'])->name('service');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetails'])->name('blog.details');

//Route::get('/teaching', [HomeController::class, 'teaching'])->name('teaching');
Route::get('/photo', [HomeController::class, 'photo'])->name('photo');
Route::get('/cv', [HomeController::class, 'cv'])->name('cv');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send',[ContactController::class, 'sendCont'])->name('send.contact');

Route::get('/teaching', [TeachingController::class, 'teachingDetails'])->name('teaching.details');


Route::get('/teaching/courses', [TeachingController::class, 'coursesDetails'])->name('courses.details');
Route::get('/teaching/philosophy', [TeachingController::class, 'philosophyDetails'])->name('philosophy.details');
Route::get('/teaching/professional-development', [TeachingController::class, 'professionalDetails'])->name('professional.details');











//---------------Admin Panel Routes--------------
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/message/{id}', [AdminController::class, 'message'])->name('message');
    Route::post('/dashboard/delete', [AdminController::class, 'deleteMessage'])->name('delete.message');


    Route::get('/dashboard/edit/', [AdminController::class, 'user_edit'])->name('edit.userdash');
    Route::post('/dashboard/edit/save', [AdminController::class, 'saveUserEdit'])->name('save.useredit');



        //---------Category Routes-----------
    Route::get('/dashboard/category', [CategoryController::class, 'category'])->name('category');
    Route::get('/dashboard/category/add', [CategoryController::class, 'addCategory'])->name('add.category');
    Route::post('/dashboard/category/save', [CategoryController::class, 'saveCategory'])->name('save.category');
    Route::get('/dashboard/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/dashboard/category/update', [CategoryController::class, 'updateCategory'])->name('update.category');
    Route::post('/dashboard/category/delete',[CategoryController::class,'deleteCategory'])->name('delete.category');

        //---------Post Routes--------------
    Route::get('/dashboard/post', [PostController::class, 'post'])->name('post');
    Route::get('/dashboard/post/add', [PostController::class, 'addPost'])->name('add.post');
    Route::post('/dashboard/post/save', [PostController::class, 'savePost'])->name('save.post');
    Route::get('/dashboard/post/edit/{id}', [PostController::class, 'editPost'])->name('edit.post');
    Route::post('/dashboard/post/update', [PostController::class, 'updatePost'])->name('update.post');
    Route::post('/dashboard/post/delete', [PostController::class, 'deletePost'])->name('delete.post');


    //---------------About Me Routes-------------
    Route::get('/dashboard/about',[AboutController::class, 'about'])->name('aboutMe');
    Route::get('/dashboard/about/edit/',[AboutController::class, 'aboutMe'])->name('about.me');
    Route::post('/dashboard/about/update',[AboutController::class, 'updateAbout'])->name('update.about');

    //---------------Social Media Routes-----------
    Route::get('/dashboard/social', [SocialController::class, 'socialMedia'])->name('social');
    Route::get('/dashboard/social/add', [SocialController::class, 'addSocial'])->name('add.social');
    Route::post('/dashboard/social/save', [SocialController::class, 'saveSocial'])->name('save.social');
    Route::get('/dashboard/social/edit/{id}', [SocialController::class, 'editSocial'])->name('edit.social');
    Route::post('/dashboard/social/update/', [SocialController::class, 'updateSocial'])->name('update.social');
    Route::post('/dashboard/social/delete/', [SocialController::class, 'deleteSocial'])->name('delete.social');

    //----------------News Routs-------------------
    Route::get('/dashboard/news', [NewsController::class, 'news'])->name('news');
    Route::get('/dashboard/news/add', [NewsController::class, 'addNews'])->name('add.news');
    Route::post('/dashboard/news/save', [NewsController::class, 'saveNews'])->name('save.news');
    Route::get('/dashboard/news/edit/{id}', [NewsController::class, 'editNews'])->name('edit.news');
    Route::post('/dashboard/news/update', [NewsController::class, 'updateNews'])->name('update.news');
    Route::post('/dashboard/news/delete', [NewsController::class, 'deleteNews'])->name('delete.news');

    //---------------Photo Routes--------------
    Route::get('/dashboard/photo/add',[PhotoController::class,'addPhoto'])->name('add.photo');
    Route::get('/dashboard/photo/manage',[PhotoController::class,'managePhoto'])->name('manage.photo');
    Route::post('/dashboard/photo/save',[PhotoController::class,'savePhoto'])->name('save.photo');


    //---------------Frontend Setting--------------

    Route::get('/dashboard/setting',[SettingsController::class,'setting'])->name('setting.website');
    Route::post('/dashboard/setting/save',[SettingsController::class,'saveSettings'])->name('setting.save');


    //--------------Teaching-------------------------
    Route::get('/dashboard/teaching',[TeachingController::class,'gTeaching'])->name('g.teaching');
    Route::post('/dashboard/teaching/save',[TeachingController::class,'saveTeaching'])->name('save.teaching');



    Route::get('/dashboard/teaching/courses',[TeachingController::class,'coursesTeaching'])->name('courses.teaching');
    Route::post('/dashboard/teaching/courses/save',[TeachingController::class,'saveCoursesTeaching'])->name('save.courses.teaching');

    Route::get('/dashboard/teaching/philosophy',[TeachingController::class,'philosophyTeaching'])->name('philosophy.teaching');
    Route::post('/dashboard/teaching/philosophy/save',[TeachingController::class,'savePhilosophyTeaching'])->name('save.philosophy.teaching');

    Route::get('/dashboard/teaching/professional',[TeachingController::class,'professionalTeaching'])->name('professional.teaching');
    Route::post('/dashboard/teaching/professional/save',[TeachingController::class,'saveProfessionalTeaching'])->name('save.professional.teaching');

    //-------------Profile Image---------------
    Route::get('/dashboard/profile/image',[ProfileController::class, 'profileImage'])->name('profile.image');
    Route::post('/dashboard/profile/image/save',[ProfileController::class, 'saveProfileImage'])->name('save.profile.image');


});
