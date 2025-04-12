<?php
    session_start();
    
    $text = "";
    $color = "";

    if(isset($_POST['btnSubmit'])){
        $text = $_POST['text'];
        $color = $_POST['color'];

        $_SESSION['text'] = $text;
        $_SESSION['color'] = $color;

        echo "Sparad! <br><br>";
    }
?>     


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick=clicked()>Klicka för att visa resultat</button>
</body>
</html>

<script>
    function clicked(){
        var text = "<?php echo htmlspecialchars($text); ?>";
        var color = "<?php echo htmlspecialchars($color); ?>";

        // Use document.write to show result
        document.write("<p style='color:" + color + "; font-size: 20px;'>" + text + "</p>");
    }
</script>