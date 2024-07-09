<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrequestController;
use App\Http\Middleware\CheckRequest;
use App\Http\Middleware\checkproblem;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AcceptRequestController;
use App\Http\Controllers\SendDocumentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\AddReqestController;
use App\Http\Controllers\AddFieldController;
use App\Http\Controllers\collagedeanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
})->name('welcome');

Route::get('/main', function () {
    return view('Main');
})->middleware(['auth', 'verified'])->name('main');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('complete_information',[StudentController::class,'store'])->name('complete');
    Route::get('requeststatus',[OrequestController::class,'requeststatus'])->name('requeststatus');
    Route::get('collageliferequest',[OrequestController::class,'collagelife']);
    Route::post('collageliferequest',[OrequestController::class,'store'])->name('collageliferequest');
    Route::get('timedocument',[OrequestController::class,'timedocument']);
    Route::post('timedocument',[OrequestController::class,'store'])->name('timedocument');
    Route::get('stop',[OrequestController::class,'stop'])->name('stop');

});

Route::get('inputpersonalinformation',[StudentController::class,'show']);
Route::get('requests',[OrequestController::class,'index'])->middleware('CheckRequest');
Route::post('/acceptReq',[AcceptRequestController::class,'updatereq'])->middleware('CheckRequest')->name('accept');
Route::get('/accept',[AcceptRequestController::class,'show'])->middleware('CheckRequest');
Route::post('/send',[SendDocumentController::class,'store'])->middleware('CheckRequest')->name('send');
Route::get('/send',[SendDocumentController::class,'index'])->middleware('CheckRequest');
Route::get('collagelifedocument',[DocumentController::class,'collagelife']);
Route::post('collagelifedocument',[DocumentController::class,'show'])->name('collagelifedocument');
Route::get('timedocumentD',function(){
    return view('profile.timedocumentD');
})->name('t');
Route::get('sendproblem',[ProblemController::class,'index']);
Route::post('sendproblem',[ProblemController::class,'store'])->name('sendproblem');
Route::get('readproblem',[ProblemController::class,'create']);
Route::post('acceptproblem',[ProblemController::class,'accept'])->name('acceptproblem');
Route::post('replayproblem',[ProblemController::class,'send'])->name('replayproblem');
Route::get('/gn',function(){
    return view('profile.GN');
})->name('gn');
Route::get('inputyear',[YearController::class,'index']);
Route::post('inputyear',[YearController::class,'store'])->name('year');

Route::post('/AddDocument', [AddDocumentController::class, 'store'])->name('AddDocument');

Route::post('/AddREquest',[AddReqestController::class,'store'])->name('addrequest');
Route::get('/addfield',[AddReqestController::class,'create']);
Route::get('/ActiveNewRequest',[AddReqestController::class,'index']);
Route::post('/addfield',[AddFieldController::class,'store'])->name('addfield');
Route::Post('/addrequest',[AddFieldController::class,'index'])->name('adr');
Route::post('/changecollagedean',[CollagedeanController::class,'store'])->name('collagedean');
Route::get('/m',function(){
    return view('replayofmyproblem');
})->name('m');
Route::get('document/collagelife/{id}',function($id){
    return view('profile.collagelifedocument');
})->name('cld');
Route::get('document/timedocument/{id}',function($id){
    return view('profile.timedocumentD');
})->name('td');
require __DIR__.'/auth.php';
