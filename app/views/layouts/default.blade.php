<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-brand">
                {{link_to('/team', 'Prowareness', array('class'=>'well well-sm'))}}
                </div>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    
                </div>
            </div>
        </div>
        <div class="clearfix"></div>        
        <div class="container">
            @yield('content')
        </div> 
        <div class="clearfix"></div>
        <div class="push"></div>
        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">&copy; Prowareness </p>
            </div>
        </div>        
    </body>
</html>