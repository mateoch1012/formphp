<?php
// Captura de los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$curso = $_POST['curso'];
$numero = $_POST['numero'];

// Calcular el cubo
$cubo = pow($numero, 3);

// Mostrar resultados
echo "<h2>Resultados</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Curso de formación: " . $curso . "<br>";
echo "El cubo del número $numero es: " . $cubo . "<br>";

// Verificación del mensaje especial
if ($cubo > 100) {
    echo "<p><b>Eres muy afortunado</b></p>";
}
?>

