<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        
        {{-- <h1> Hello World! </h1> --}}
        
        <h1> List of students: </h1>
        <ul>
            @foreach ($class49 as $student)
                <li>
                    <h3> Name:  {{ $student['name'] }}</h3>
                    <h3> Surname:  {{ $student['surname'] }}</h3>
                    <h3> Age:  {{ $student['age'] }}</h3>
                    <h3> City:  {{ $student['city'] }}</h3>
                </li>
            @endforeach
        </ul>


    </body>
</html>