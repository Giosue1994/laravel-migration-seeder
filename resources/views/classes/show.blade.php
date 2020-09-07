<h1>Dettagli Studente</h1>

<h2>{{ $student->name }} {{ $student->lastname }}</h2>
<ul>
  <li>Anni: {{ $student->age }}</li>
  <li>Voto: {{ $student->vote }}</li>
  <li>Note: {{ $student->note }}</li>
</ul>

<p><a href="{{ route('students.index') }}">Torna alla home</a></p>
