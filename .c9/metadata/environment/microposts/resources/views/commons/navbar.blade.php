{"filter":false,"title":"navbar.blade.php","tooltip":"/microposts/resources/views/commons/navbar.blade.php","undoManager":{"mark":18,"position":18,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":9},"action":"insert","lines":["<header>","    <nav class=\"navbar navbar-inverse navbar-static-top\">","        <div class=\"container\">","            <div class=\"navbar-header\">","                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">","                    <span class=\"sr-only\">Toggle navigation</span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                </button>","                <a class=\"navbar-brand\" href=\"/\">Microposts</a>","            </div>","            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">","                <ul class=\"nav navbar-nav navbar-right\">","                    <li><a href=\"#\">Signup</a></li>","                    <li><a href=\"#\">Login</a></li>","                </ul>","            </div>","        </div>","    </nav>","</header>"],"id":1}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":46},"action":"remove","lines":["<a href=\"#\">Signup</a>"],"id":5}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":69},"action":"insert","lines":["{!! link_to_route('signup.get', 'Signup') !!}"],"id":6}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":45},"action":"remove","lines":["<a href=\"#\">Login</a>"],"id":7}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":45},"action":"insert","lines":["<a href=\"#\">Login</a>"],"id":8}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":9},"action":"remove","lines":["<header>","    <nav class=\"navbar navbar-inverse navbar-static-top\">","        <div class=\"container\">","            <div class=\"navbar-header\">","                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">","                    <span class=\"sr-only\">Toggle navigation</span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                </button>","                <a class=\"navbar-brand\" href=\"/\">Microposts</a>","            </div>","            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">","                <ul class=\"nav navbar-nav navbar-right\">","                    <li>{!! link_to_route('signup.get', 'Signup') !!}</li>","                    <li><a href=\"#\">Login</a></li>","                </ul>","            </div>","        </div>","    </nav>","</header>"],"id":9}],[{"start":{"row":0,"column":0},"end":{"row":32,"column":9},"action":"insert","lines":["<header>","    <nav class=\"navbar navbar-inverse navbar-static-top\">","        <div class=\"container\">","            <div class=\"navbar-header\">","                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">","                    <span class=\"sr-only\">Toggle navigation</span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                    <span class=\"icon-bar\"></span>","                </button>","                <a class=\"navbar-brand\" href=\"/\">Microposts</a>","            </div>","            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">","                <ul class=\"nav navbar-nav navbar-right\">","                    @if (Auth::check())","                        <li><a href=\"#\">Users</a></li>","                        <li class=\"dropdown\">","                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ Auth::user()->name }} <span class=\"caret\"></span></a>","                            <ul class=\"dropdown-menu\">","                                <li><a href=\"#\">My profile</a></li>","                                <li role=\"separator\" class=\"divider\"></li>","                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>","                            </ul>","                        </li>","                    @else","                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>","                        <li>{!! link_to_route('login', 'Login') !!}</li>","                    @endif","                </ul>","            </div>","        </div>","    </nav>","</header>"],"id":10}],[{"start":{"row":14,"column":39},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":15,"column":0},"end":{"row":15,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":15,"column":20},"end":{"row":16,"column":78},"action":"insert","lines":["                    @if (Auth::check())","                        <li>{!! link_to_route('users.index', 'Users') !!}</li>"],"id":12}],[{"start":{"row":15,"column":36},"end":{"row":15,"column":40},"action":"remove","lines":["    "],"id":13},{"start":{"row":15,"column":32},"end":{"row":15,"column":36},"action":"remove","lines":["    "]},{"start":{"row":15,"column":28},"end":{"row":15,"column":32},"action":"remove","lines":["    "]},{"start":{"row":15,"column":24},"end":{"row":15,"column":28},"action":"remove","lines":["    "]},{"start":{"row":15,"column":20},"end":{"row":15,"column":24},"action":"remove","lines":["    "]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":39},"action":"remove","lines":["@if (Auth::check())"],"id":14},{"start":{"row":14,"column":16},"end":{"row":14,"column":20},"action":"remove","lines":["    "]},{"start":{"row":14,"column":12},"end":{"row":14,"column":16},"action":"remove","lines":["    "]},{"start":{"row":14,"column":8},"end":{"row":14,"column":12},"action":"remove","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"remove","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":56},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":54},"action":"remove","lines":["                        <li><a href=\"#\">Users</a></li>"],"id":15},{"start":{"row":15,"column":78},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":78},"end":{"row":15,"column":79},"action":"insert","lines":["S"],"id":16}],[{"start":{"row":15,"column":78},"end":{"row":15,"column":79},"action":"remove","lines":["S"],"id":17}],[{"start":{"row":22,"column":33},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":23,"column":0},"end":{"row":23,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":23,"column":28},"end":{"row":27,"column":33},"action":"insert","lines":["                            <ul class=\"dropdown-menu\">","                                <li>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</li>","                                <li role=\"separator\" class=\"divider\"></li>","                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>","                            </ul>"],"id":19}],[{"start":{"row":23,"column":52},"end":{"row":23,"column":56},"action":"remove","lines":["    "],"id":20},{"start":{"row":23,"column":48},"end":{"row":23,"column":52},"action":"remove","lines":["    "]},{"start":{"row":23,"column":44},"end":{"row":23,"column":48},"action":"remove","lines":["    "]},{"start":{"row":23,"column":40},"end":{"row":23,"column":44},"action":"remove","lines":["    "]},{"start":{"row":23,"column":36},"end":{"row":23,"column":40},"action":"remove","lines":["    "]},{"start":{"row":23,"column":32},"end":{"row":23,"column":36},"action":"remove","lines":["    "]}],[{"start":{"row":23,"column":28},"end":{"row":23,"column":32},"action":"remove","lines":["    "],"id":21}],[{"start":{"row":18,"column":0},"end":{"row":22,"column":33},"action":"remove","lines":["                            <ul class=\"dropdown-menu\">","                                <li><a href=\"#\">My profile</a></li>","                                <li role=\"separator\" class=\"divider\"></li>","                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>","                            </ul>"],"id":22},{"start":{"row":17,"column":200},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":133.1953125,"scrollleft":0,"selection":{"start":{"row":25,"column":78},"end":{"row":25,"column":78},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528963365512,"hash":"d922283546ab95b05cde90b2560f33108d731059"}