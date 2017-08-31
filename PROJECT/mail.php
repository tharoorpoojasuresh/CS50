<html>
    <head>
    </head>
    <body>
        <?php
        $to="sravani.poosa@gmail.com";
        $subject="my subject";
        $txt="hello world";
        $headers="From: donotreply@fmt.com"."\r\n".
            "CC: somebodyelse@example.com";
        mail($to,$subject,$txt,$headers);
        ?>
    </body>
</html>