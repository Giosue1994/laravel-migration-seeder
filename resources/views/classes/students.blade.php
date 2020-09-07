<h1>Lista Studenti</h1>

<ul>
  @foreach ($students as $student)
    <li><b>Nome: {{ $student->name }}</b></li>
    <li><b>Cognome: {{ $student->lastname }}</b></li>
    <li>Anni: {{ $student->age }}</li>
    <li>Voto: {{ $student->vote }}</li>
    <li>Note: {{ $student->note }}</li>
    <br>
  @endforeach
</ul>
