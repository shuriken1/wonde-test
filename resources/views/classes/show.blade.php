<html>
    <body>
        <h1>{{ $class->name }}</h1>

        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        @if (count($class->students->data) == 0)
            No students.
        @else
            <h2>Periods</h2>
            <ul>
            @foreach ($class->lessons->data as $lesson)
                <li>{{ $lesson->period->data->name }}</li>
            @endforeach
            </ul>

            <h2>Students</h2>
            <ul>
            @foreach ($class->students->data as $student)
                <li>{{ $student->forename }} {{ $student->surname }}</li>
            @endforeach
            </ul>
        @endif
    </body>
</html>