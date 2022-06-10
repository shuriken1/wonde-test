<html>
    <body>
        <h1>Employees with Classes</h2>

        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        <ul>
            @foreach ($employees as $employee)
                <li><a href="{{ route('employees.show', $employee->id) }}">{{ $employee->title }} {{ $employee->forename }} {{ $employee->surname }}</a></li>
            @endforeach
        </ul>
    </body>

</html>