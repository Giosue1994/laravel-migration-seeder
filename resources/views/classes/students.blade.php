<h1>Lista Studenti</h1>

<ul>
  @foreach ($students as $student)
    <li><b>Nome: {{ $student->name }}</b></li>
    <li><b>Cognome: {{ $student->lastname }}</b></li>

    <p><a href="{{ route('students.show', $student) }}">Mostra dettagli</a></p>
    <hr>
  @endforeach
</ul>
