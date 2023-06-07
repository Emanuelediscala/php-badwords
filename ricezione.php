<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>
    <?php $paragrafo = $_GET["paragrafo"]; 
    $paroladaCensurare = $_GET["parolaX"];
    $Stelle = "<span style='color:red'>***</span>";
    $parolaX = str_ireplace(
        $paroladaCensurare,
        $Stelle,
        $paragrafo,
    );
    $LunghezzaParagrafo = strlen($paragrafo)
    ?>
    <main>
        <div>
            <h1>Paragrafo</h1>
            <p><?php echo $paragrafo?></p>
            <span><?php echo "il paragrafo è lungo: ".$LunghezzaParagrafo . " parole" ?></span>
        </div>
        <div>
            <h1>Paragrafo con parola censurata</h1>
        <p><?php echo $parolaX?></p>
            
        </div>
    </main>
</body>
</html>