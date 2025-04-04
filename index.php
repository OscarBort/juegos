<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adivina el juego</title>
    <meta name="description" content="Practica de php adivinando juegos">
    <meta name="author" content="Oscar Bort">
</head>
<body>
    <header>
        <h1>Adivina el juego</h1>
    </header>
    <main>
        <div id="fotos">
            <img src="img/animal crossing.png" alt="">
        </div>
        <div id="pistas">
            <h4 id="p1" class="hidden">Tienes vecinos que son animales muy cuquis.</h4>
            <h4 id="p2" class="hidden">El alcalde te sangrará el dinero hasta que te arruines.</h4>
            <h4 id="p3" class="hidden">Juego de nintendo.</h4>
        </div>
        <div id="formulario">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="text" name="respuesta" id="respuesta">
            </form>
        </div>
    </main>
    <footer>

    </footer>
    <script>
        const paragraphs = [
        document.getElementById('p1'),
        document.getElementById('p2'),
        document.getElementById('p3')
        ];

        let index = 0;

        function showNextParagraph() {
        if (index < paragraphs.length) {
            paragraphs[index].classList.remove('hidden');
            index++;
            setTimeout(showNextParagraph, 3000); // 3 segundos
        }
        }

        // Iniciar la secuencia
        setTimeout(showNextParagraph, 3000);
  </script>
  <?php
    if (isset($_POST["respuesta"]) == "animal crossing") echo "<script>document.getElementById('respuesta').style.backgroundColor = 'green';</script>"
  ?>
</body>
</html>