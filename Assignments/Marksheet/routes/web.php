<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/show/{id?}/{eng?}/{urdu?}/{isl?}/{maths?}/{science?}/{obt?}/{per?}/{grade?}/{remarks?}', function (
    $id= "Enter Valid Name",
    $eng= "N/A",
    $urdu= "N/A",
    $isl= "N/A",
    $maths= "N/A",
    $science= "N/A",
    $obt= "N/A",
    $per= "N/A",
    $grade= "N/A",
    $remarks= "N/A"
    ) {

    $obt = $eng + $urdu + $isl + $maths + $science;

    $per = ($obt / 500) * 100;

    if ($per >= 80 && $per <= 100) {
        $grade = 'A+';
        $remarks = 'Excellent';
    }else if ($per >= 70 && $per <= 79) {
        $grade = 'A';
        $remarks = 'Very Good';
    }else if ($per >= 60 && $per <= 69) {
        $grade = 'B';
        $remarks = 'Good';
    }else if ($per >= 50 && $per <= 59) {
        $grade = 'C';
        $remarks = 'Average';
    }else if ($per >= 40 && $per <= 49) {
        $grade = 'D';
        $remarks = 'Satisfactory';
    }else if ($per >= 0 && $per <= 39) {
        $grade = 'F';
        $remarks = 'FAIL';
    }

    return view('info', compact("id","eng","urdu","isl","maths","science","obt","per","grade","remarks"));
});

