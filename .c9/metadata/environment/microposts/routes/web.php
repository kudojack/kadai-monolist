{"filter":false,"title":"web.php","tooltip":"/microposts/routes/web.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":16,"column":0},"end":{"row":18,"column":79},"action":"insert","lines":["// user registration","Route::get('signup', 'Auth\\RegisterController@showRegistrationForm')->name('signup.get');","Route::post('signup', 'Auth\\RegisterController@register')->name('signup.post');"],"id":2}],[{"start":{"row":18,"column":79},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":19,"column":0},"end":{"row":22,"column":72},"action":"insert","lines":["// Login authentication","Route::get('login', 'Auth\\LoginController@showLoginForm')->name('login');","Route::post('login', 'Auth\\LoginController@login')->name('login.post');","Route::get('logout', 'Auth\\LoginController@logout')->name('logout.get');"],"id":4}],[{"start":{"row":22,"column":72},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":23,"column":0},"end":{"row":25,"column":3},"action":"insert","lines":["Route::group(['middleware' => ['auth']], function () {","    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);","});"],"id":6}],[{"start":{"row":25,"column":3},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":7}],[{"start":{"row":25,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["","    ",""],"id":8}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"remove","lines":["    "],"id":9}],[{"start":{"row":17,"column":89},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":46},"action":"insert","lines":["Route::get('/', 'MicropostsController@index');"],"id":11}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "],"id":12}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":93},"action":"insert","lines":[" Route::resource('microposts', 'MicropostsController', ['only' => ['store', 'destroy']]);"],"id":13}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":[" "],"id":14}]]},"ace":{"folds":[],"scrolltop":180.5234375,"scrollleft":0,"selection":{"start":{"row":18,"column":46},"end":{"row":18,"column":46},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529016828298,"hash":"79d24382e5f1e307fd8ebb2b0c0f581dd444d2ad"}