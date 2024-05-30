<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp8 Grupo XA</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      
      <nav>
      <ul>
        <li><a href="index.php" class="current">CiTIM Grupo XA</a></li>
        
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
        <h2>Problema: Hallar la velocidad lineal del movimiento orbital de la Tierra</h2>
        <p>Descripción: Considerar que la órbita es circular.</p>
        <p>Órbita circular: \(v = \sqrt{\frac{GM_s}{r}}\) donde \(r = 1.5 \times 10^{11}\) m.</p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/orbita_tierra.jpeg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        <p>Velocidad orbital = \(\sqrt{\frac{GM_s}{r}}\)</p>
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        <p>Valor de \(M_s\): \(1.989 \times 10^{30}\) kg (Masa del Sol).</p>
        <p>Valor de \(G\): \(6.674 \times 10^{-11} \, \text{m}^3 \, \text{kg}^{-1} \, \text{s}^{-2}\) (Constante gravitacional).</p>
        <p>Valor de \(r = 1.5 \times 10^{11}\) m (Radio de la órbita).</p>
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>Para resolver este problema, podemos utilizar la fórmula dada y sustituir los valores proporcionados para calcular la velocidad orbital de la Tierra.</p>
        
      </section>
      <?php
function calcula_velocidad_orbital(){
    // Valores proporcionados en el problema
    $G = 6.674 * pow(10, -11); // Constante gravitacional en m^3/kg/s^2
    $Ms = 1.989 * pow(10, 30); // Masa del Sol en kg
    $r = 1.5 * pow(10, 11); // Radio de la órbita en metros

    // Cálculo de la velocidad orbital
    $velocidad_orbital = sqrt(($G * $Ms) / $r);

    // Mostrar el resultado
    echo "La velocidad orbital de la Tierra es de aproximadamente " . number_format($velocidad_orbital, 2) . " m/s.";
}

// Llamada a la función para mostrar el resultado

?>

<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> ".calcula_velocidad_orbital(). " </h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2024
    </footer>
   </section>
</body>
</html>
