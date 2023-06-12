<!doctype html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <head>
        <meta charset="utf-8">
        <link href="projekt.css" rel="stylesheet" type="text/css" media="all">
        <title>Proizvodi</title>
    </head>
    <body>
            <div id="stranica">
                <div id="menu">
                    <ul style="margin:0px;">
                        <li><a href="index.html">Početna</a></li>
                        <li style="font-color:black;font-size:10px">Daa</li>
                        <li><a href="proizvodi.php">Proizvodi</a></li>
                        <li style="font-color:black;font-size:10px">Daa</li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                    </ul>
                </div>
        <?php
            $xml = simplexml_load_file('proizvodi.xml');
        ?>
        <div style="text-align: center;background-color:grey;padding-top:15px;">
        <?php foreach($xml->user as $user):?>
            <div style="margin-top:20px;">
            <?php echo $user->ime?>
            <div class="v1"></div>
            <?php echo $user->cijena?>
            <div class="v1"></div>
            <?php echo $user->datum?>
            <div class="v1"></div>
            <?php echo $user->vrsta?>
            <div class="v1"></div>
            <?php echo '<a href="#">Dodaj u košaricu</a>'?>
            <hr style="margin-top:8px;margin-bottom:0px;"/>
            <?php endforeach;?>
        </div>
        </div>
        
        <div id="footer">
                    <p>Kristijan Přenosil</p>
        </div>
        </div>
  </body>
</html>