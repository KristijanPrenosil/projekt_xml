<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kontakt</title>
    <link href="projekt.css" rel="stylesheet" type="text/css" media="all">
    </head>
        <body>
        <?php $xml = simplexml_load_file("kontakt.xml");?>
            <div id="stranica">
                <div id="menu">
                    <ul>
                        <li><a href="index.html">Početna</a></li>
                        <li><a href="proizvodi.php">Proizvodi</a></li>
                        <li><a href="kontakt.html">Kontakt</a></li>
                    </ul>
                </div>
            </div>
            <div id="sadrzaj">
                <div id="dio">
                    <iframe style="margin:20px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2789.168521752034!2d16.1169105!3d45.6474374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47668db1660e99ff%3A0xe9271d7e4e3ab7b5!2sZagreba%C4%8Dka%20Ul.!5e0!3m2!1sen!2shr!4v1686579983341!5m2!1sen!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div style="font-size:20px;padding:15px;">
                        <?php
                            echo "<br/>";
                            echo $xml->lok[0]->lokacija;
                            echo "<br/>";
                            echo $xml->lok[0]->email;
                            echo "<br/>";
                            echo $xml->lok[0]->broj;
                            echo "<hr/>";
                        ?>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.942014539319!2d55.137080600000004!3d25.0699544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f13435f3abe57%3A0xb4c00b9d46311cd0!2sSheikh%20Zayed%20Rd%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2shr!4v1686581276868!5m2!1sen!2shr" width="600" height="450" style="border:0;margin:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php
                            echo "<br/>";
                            echo $xml->lok[1]->lokacija;
                            echo "<br/>";
                            echo $xml->lok[1]->email;
                            echo "<br/>";
                            echo $xml->lok[1]->broj;
                        ?>
                    </div>
                </div>
                
            </div>
            <div id="footer">
                <p>Kristijan Přenosil</p>
            </div>
        </body>
</html>