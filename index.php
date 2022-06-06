<html>
    <head>
        <title>Meu primeiro site em PHP</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php
            for ($i = 0 ; $i < 10 ; $i++){
                print("<span class=\"linha\">Linha numero ". $i . "<br />");
            }    
        ?>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            alert("Wohoooo");
        }) 
    </script>
</html>