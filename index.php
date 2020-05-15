<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <!-- Creare una variabile con un paragrafo di testo. -->
    <?php $testo = 'Benvenuti nel mondo PHP alla classe 12 del corso Boolean. Buon divertimento!'  ?>

    <h1>PHP Badwords</h1>
    <!-- Visualizzare a schermo il paragrafo -->
    <p><h3>Testo creato con PHP:</h3>
    <?php echo $testo ?>
    </p>
    <!-- Visualizzare a schermo la relativa lunghezza del paragrafo -->
    <p>La lunghezza del paragrafo è  :
        <strong><?php echo strlen($testo) ?></strong>
     </p>
     <!-- Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con ***  -->
     
     <?php $badword = $_GET['badword']; ?>
     
    <p>
    <h3>Testo modificato:</h3>
    <?php  echo str_replace($badword, '***', $testo ) ?>
    </p>
     
</body>
</html>