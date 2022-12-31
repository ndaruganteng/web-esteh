<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\landing\LoginController;
use App\http\Controllers\landing\RegisterController;
use App\http\Controllers\landing\UserController;
use App\http\Controllers\landing\HomeController;
use App\http\Controllers\landing\ContactController;
use App\http\Controllers\landing\CvController;
use App\http\Controllers\landing\BlogController;
use App\http\Controllers\landing\BlogdetailController;
use App\http\Controllers\landing\ServiceController;
use App\http\Controllers\landing\TeamController;
use App\http\Controllers\landing\PortofolioController;
use App\http\Controllers\landing\AboutController;
use App\http\Controllers\landing\CareerController;
use App\http\Controllers\landing\DashboardController;
use App\http\Controllers\landing\UpdateteamController;
use App\http\Controllers\landing\EditteamController;
use App\http\Controllers\landing\UpdateportfolioController;
use App\http\Controllers\landing\InternshipController;
use App\http\Controllers\landing\UpdateblogController;
use App\http\Controllers\landing\EditblogController;
use App\http\Controllers\landing\TambahblogController;
use App\http\Controllers\landing\TambahteamController;
use App\http\Controllers\landing\TambahportfolioController;
use App\http\Controllers\landing\EditportfolioController;
use App\http\Controllers\landing\EditinternshipController;
use App\http\Controllers\landing\TambahinternshipController;



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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/cv', [CvController::class, 'index'])->name('cv.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/tambahportfolio', [TambahportfolioController::class, 'index'])->name('tambahportfolio.index');
Route::get('/editportfolio', [EditportfolioController::class, 'index'])->name('editportfolio.index');
Route::get('/editinternship', [EditinternshipController::class, 'index'])->name('editinternship.index');
Route::get('/tambahinternship', [TambahinternshipController::class, 'index'])->name('tambahinternship.index');
Route::get('/updateportfolio', [UpdateportfolioController::class, 'index'])->name('updateportfolio.index');
Route::get('/internship', [InternshipController::class, 'index'])->name('internship.index');


// blog
Route::get('/blogdetail', [BlogdetailController::class, 'index'])->name('blogdetail.index'); 
Route::get('/updateblog', [UpdateBlogController::class, 'index'])->name('updateblog.index');
Route::get('/tambahblog', [UpdateBlogController::class, 'tambah'])->name('tambahblog.index');
Route::post('/tambahblog', [UpdateBlogController::class, 'store'])->name('Blog.index');
Route::get('/updateblog/edit/{id}', [UpdateBlogController::class, 'edit'])->name('editblog.index');
Route::put('/updateblog/update/{id}', [UpdateBlogController::class, 'update'])->name('updateBlog.index');
Route::get('/updateblog/hapus/{id}', [UpdateBlogController::class, 'hapus'])->name('hapus.index');
Route::get('/blogdetail/{slug}', [UpdateBlogController::class, 'show']);

//  team
Route::get('/updateteam', [UpdateTeamController::class, 'index'])->name('updateteam.index');
Route::get('/tambahteam', [UpdateTeamController::class, 'tambah'])->name('tambahteam.index');
Route::post('/tambahteam', [UpdateTeamController::class, 'store'])->name('Team.index');
Route::get('/updateteam/edit/{id}', [UpdateTeamController::class, 'edit'])->name('editteam.index');
Route::put('/updateteam/update/{id}', [UpdateTeamController::class, 'update'])->name('updateTeam.index');
Route::get('/updateteam/hapus/{id}', [UpdateTeamController::class, 'hapus'])->name('hapus.index');

