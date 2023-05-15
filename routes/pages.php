<?php

use App\Http\Controllers\Pages\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('index');

Route::get('/faq', function () {
    return view('pages.static.faq.index');
})->name('faq');

Route::get('/faq/item', function () {
    return view('pages.static.faq.item');
})->name('faq.item');

Route::get('/news', function () {
    return view('pages.static.news.index');
})->name('news');

Route::get('/news/item', function () {
    return view('pages.static.news.item');
})->name('news.item');



Route::get('/gb', function () {
    return view('pages.static.gb');
})->name('gb');

Route::group(['as'=>'static.', 'prefix' => 'pages'], function() {

    Route::get('/about', function () {
        return view('pages.static.about');
    })->name('about');

    Route::get('/loyalty-referral', function () {
        return view('pages.static.loyalty-referral');
    })->name('loyalty-referral');

    Route::get('/garantsite', function () {
        return view('pages.static.garantsite');
    })->name('garantsite');

    Route::get('/video-review', function () {
        return view('pages.static.video-review');
    })->name('video-review');

    Route::get('/bloggers', function () {
        return view('pages.static.bloggers');
    })->name('bloggers');

    Route::get('/api-docs', function () {
        return view('pages.static.api-docs');
    })->name('api-docs');

    Route::get('/tools', function () {
        return view('pages.static.tools.index');
    })->name('tools.index');

    Route::get('/tools/save-preview', function () {
        return view('pages.static.tools.save-preview');
    })->name('tools.save-preview');

    Route::get('/tools/utm', function () {
        return view('pages.static.tools.utm');
    })->name('tools.utm');

    Route::get('/tools/ideas', function () {
        return view('pages.static.tools.ideas');
    })->name('tools.ideas');

    Route::get('/contacts', function () {
        return view('pages.static.contacts');
    })->name('contacts');

    Route::get('/rules', function () {
        return view('pages.static.rules');
    })->name('rules');

    Route::get('/public-offer', function () {
        return view('pages.static.public-offer');
    })->name('public-offer');

    Route::get('/partner-program', function () {
        return view('pages.static.partner-program');
    })->name('partner-program');

    Route::get('/social-subscription', function () {
        return view('pages.static.social-subscription');
    })->name('social-subscription');

    Route::get('/ways-of-earning', function () {
        return view('pages.static.ways-of-earning');
    })->name('ways-of-earning');

    Route::get('/warranty-garantii', function () {
        return view('pages.static.warranty-garantii');
    })->name('warranty-garantii');

    Route::get('/promo-banners', function () {
        return view('pages.static.promo-banners');
    })->name('promo-banners');

    Route::get('/affiliate-program', function () {
        return view('pages.static.affiliate-program');
    })->name('affiliate-program');

    Route::get('/oplata', function () {
        return view('pages.static.oplata');
    })->name('oplata');
});
