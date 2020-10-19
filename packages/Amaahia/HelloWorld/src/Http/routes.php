<?php

    Route::view('/hello-world', 'helloworld::helloworld.helloworld');

    Route::get('hello-dashboard', 'Amaahia\HelloWorld\Http\Controllers\HelloWorldController@index')
    ->defaults('_config', ['view' => 'helloworld::helloworld.index'])->name('helloworld.index');