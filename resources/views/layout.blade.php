<!DOCTYPE html>
<html lang="en" itemscope="" itemtype="person">
    <head>
        <title>{{ isset($title) ? $title . ' | ' : '' }}Mohammad Ali Sharpasand</title>
        <style type="text/css">
            @import "/css/reset.min.css";
            @import 'https://fonts.googleapis.com/css?family=Lobster|Raleway';
            @import "/css/main.min.css";
        </style>
    </head>
    <body>
        <div class="container">
            <div class="page" id="banner">
                @include('banner')
            </div>
            <div class="page" id="dream">
                <h2>Dream</h2>
                @include('dream')
           </div>
            <div class="page" id="resume">
                <h2>Resume</h2>
                @include('resume')
            </div>
            <div class="page" id="projects">
                <h2>Projects</h2>
                @include('projects')
            </div>
            <div class="page" id="story">
                <h2>Story</h2>
                @include('story')
            </div>
        </div>
        <script type="text/javascript" src="/script/MooTools-Core-1.6.0.js"></script>
        <script type="text/javascript" src="/script/main.js"></script>
    </body>
</html>
