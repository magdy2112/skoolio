<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Classes and Students</title>
</head>
<body>
    <h1>Classes and Students</h1>

    @if($classes->isEmpty())
        <p>No classes found for this teacher.</p>
    @else
        <ul>
            @foreach($classes as $class)
                <li>
                    <strong>Class:</strong> {{ $class->name }} <!-- Assuming ClassName has a 'name' attribute -->
                    <ul>
                        @if($class->students->isEmpty())
                            <p>No students enrolled in this class.</p>
                        @else
                            @foreach($class->students as $student)
                                <li>{{ $student->name }}</li> <!-- Display student name -->
                            @endforeach
                        @endif
                    </ul>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
