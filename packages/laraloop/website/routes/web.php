<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'website::welcome')->name('welcome');
Route::view('/home', 'website::home')->name('home');
Route::view('/download', 'website::download')->name('download');
Route::view('/changelog', 'website::changelog')->name('changelog');

Route::get('/docs/{section?}/{doc?}', function($section = null, $doc = null) {
    $view = 'docs.';
    $view .= $section ?? '';
    $view .= $section && $doc ? ".$doc" : ($doc ? : '');
    $view = empty($view) ? null : "website::$view";

    // Add on session data for shown in alert demo
    if ($doc === 'alert') {
        session()->put('success', 'This is a success message coming from session.');
        session()->put('error', [
            'First error message coming from session.',
            'Second error message coming from session.',
            'Third error message coming from session.',
        ]);
    }

    return $view && view()->exists($view)
        ? view($view, compact('doc', 'section'))
        : view('website::docs.index', compact('doc', 'section'));

})->name('doc');
