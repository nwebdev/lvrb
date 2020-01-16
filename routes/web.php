<?php

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

Route::get('/', function () {
    return view('login');
});


Route::get('/userProfile', function () {
    return view('user');
});

Route::get('/pastgame', function () {
    return view('welcome');
});

Route::get('/pastlessons', function () {
    return view('welcome');
});

Route::get('/hotelBooking', function () {
    return view('welcome');
});

Route::get('/dining', function () {
    return view('welcome');
});

Route::get('/changepassword', function () {
    return view('welcome');
});

// Route::post('/pastLearGame', function () {
//     return view('welcome');
// });

Route::get('/booknow', function () {
    return view('booknow');
});

/**Booking Route */
Route::prefix('book')->group(function () {
    Route::get('hotel', function () {
        return view('hotelbooking');
    });
    Route::get('golf', function () {
        return view('golfbooking');
    });
    Route::get('dining', function () {
        return view('buffle');
    });
});

Route::get('/book', function () {
    return view('booknow');
});

// Route::get('/hotelbooking', function () {
//     return view('hotelbooking');
// });

// Route::get('/golfbooking', function () {
//     return view('golfbooking');
// });

// Route::get('/bufflebooking', function () {
//     return view('buffle');
// });



Route::get('/offerdetails', function () {
    return view('offerdetails');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/termsandconditions', function () {
    return view('tnc');
});
Route::get('/contactus', function () {
    return view('contactus');
});
