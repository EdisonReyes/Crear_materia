      
 while ($evento = $result->fetch_assoc()) {

 echo "<div class='event'> ";
 echo "<h2>". htmlspecialchars($curso ['Materia'])."</h2>";
 echo "<p><strong> Fecha: </strong>" .
htmlspecialchars($curso['materia'])."</p>";
 echo "<p><strong> Lugar: </strong>"
htmlspecialchars($curso ['materia'])."</p>";
 echo "<p> Descripción:" . htmlspecialchars($evento ['descripcion']).
</p>";

  }

