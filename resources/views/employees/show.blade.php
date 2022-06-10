<html>
    <body>
        <h1>{{ $employee->title }} {{ $employee->forename }} {{ $employee->surname }}</h1>

        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        @if (count($employee->classes->data) == 0)
            No classes.
        @else
            <ul>
            @foreach ($employee->classes->data as $class)
                <li><a href="{{ route('classes.show', $class->id) }}">{{ $class->name }}</a></li>
            @endforeach
            </ul>
        @endif
    </body>
</html>