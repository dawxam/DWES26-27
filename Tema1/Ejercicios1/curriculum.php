<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idioma = "es";
        $estudios_es = "He estudiado un grado medio y también un grado superior.";
        $estudios_va = "He estudiat un grau mitjà i també un grau superior.";
        $estudios_en = "I have studied software development and also a higher degree.";
        $estudios = "estudios_" . $idioma;

        $idiomas_es = "Hablo español, valenciano e inglés.";
        $idiomas_va = "Parle espanyol, valencià i anglés.";
        $idiomas_en = "I speak spanish, valencian and english.";
        $idiomas = "idiomas_" . $idioma;
    ?>  

<p><?php echo $$estudios; ?></p> </br>
<p><?php echo $$idiomas; ?></p>
</body>
</html>