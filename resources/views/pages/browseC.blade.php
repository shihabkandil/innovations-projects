<html>
    <head>
        //---HTML Head Part
    </head>
    <body>
        @foreach ($categories as $category)
            {{ $category->name }}
        @endforeach
        
    </body>
</html>