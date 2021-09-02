<?php


use Faveo\Installer\Http\Controllers\InstallerController;

Route::group(['middleware' => ['web']], function(){
    Route::get('contact', [InstallerController::class,'index']);
    Route::post('contact', [InstallerController::class,'sendMail'])->name('contact');
});
