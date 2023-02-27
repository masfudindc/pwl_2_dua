<?php

// use App\Http\Controllers\PageController;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

/**Praktikum 2 */

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);



// /** Praktikum 3 */

// /**Halaman Home */
// Route::get('/', [HomeWebController::class, 'home']);




// /**Halaman Products */
// Route::prefix('products')->group(function () {
//     Route::get('/', function(){
//         echo'Daftar Products Educa Studio : <br>
//         <a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games </a> <br>
//         <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a> <br>
//         <a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a> <br>
//         <a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>
//         ';
//     });
//     Route::get('/1', function() {
//         echo '
//         <a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games </a>
//         ';
//     });
//     Route::get('/2', function() {
//         echo '
//         <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a>
//         ';
//     });
//     Route::get('/3', function() {
//         echo '
//         <a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a>
//         ';
//     });
//     Route::get('/4', function() {
//         echo '
//         <a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>
//         ';
//     });
// });



// /**Halaman News */
// Route::get('/news/{id}', function($id){
//     return 'Halaman News '.$id.' <br>
//     <a href="https://www.educastudio.com/news">NEWS</a> <br>
//     <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Educa Studio Berbagi</a>
//     ';
// });



// /**Halaman Program */
// Route::prefix('program')->group(function () {
//     Route::get('/', function(){
//         echo'Daftar Program di Educa Studio : <br>
//         <a href="https://www.educastudio.com/program/karir">Program Karir </a> <br>
//         <a href="https://www.educastudio.com/program/magang">Program Magang</a> <br>
//         <a href="https://www.educastudio.com/program/kunjungan-industri">Program Kunjungan Industri</a> <br>
//         ';
//     });
//     Route::get('/1', function() {
//         echo '
//         <a href="https://www.educastudio.com/program/karir">Program Karir </a>
//         ';
//     });
//     Route::get('/2', function() {
//         echo '
//         <a href="https://www.educastudio.com/program/magang">Program Magang</a>
//         ';
//     });
//     Route::get('/3', function() {
//         echo '
//         <a href="https://www.educastudio.com/program/kunjungan-industri">Program Kunjungan Industri</a>
//         ';
//     });
// });



// /**Halaman About Us */
// Route::get('/about-us', function(){
//     return 'About Us : <br>
//     <a href="https://www.educastudio.com/about-us">About Us</a>
//     ';
// });


// /**Halaman Contact Us */
// Route::resource('contact-us', ContactUsController::class)->only(['index']);



//03_Praktikum_Web_Lanjut_satu

Route::get('/', [HomeController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/', [ProductsController::class, 'index']);
});

Route::get('news/{id}', [NewsController::class, 'index']);

Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'index']);
});

Route::get('about-us', [AboutUsController::class, 'index']);

Route::resource('contact-us', ContactUsController::class)->only(['index']);