<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="projekt.css">

</head>

<body>
    <div id="sadrzaj">
        <div id="dio">
            <form method="POST" action="">
                <h2>Login</h2>
                <div>
                    <input id="username" name="username" type="text" required>
                    <label for="">Username</label>
                </div>
                <div>
                    <input id="password" name="password" type="password" required>
                    <label for="">Password</label>
                </div>
                <button type="submit">Log in</button>
            </form>
        </div>
     </div>   

     <?php

    $user = "";
    $password = "";
    function provjera($user, $password) {
        $xml = simplexml_load_file("korisnici.xml");
        foreach ($xml->user as $user) {
            $name = $user->username;
            $user_password = $user->password;
            if ($name == $user) {
                if ($user_password == $password) {
                    header('Location: index.html');
                    exit;
                } else {
                    echo "Netočan login.";
                    return;
                }
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"];
        $password = $_POST["password"];
        provjera($user, $password);
    }
?>
        

</body>

</html>