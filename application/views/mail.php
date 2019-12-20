<?php
$messageComfirmMail = '
<html>
<head>
    <title>Verification Code</title>
</head>
<body>
    <h2>Merci de vous être inscrit.</h2>
    <p>Votre compte :</p>
    <p>Email :'.$mail.'</p>
    <p>Merci de cliquer sur le lien.</p>
    <h4><a href="http://localhost/gamestore/index.php/user/activateUser/'.$login.'/'.$code.'">Activer mon compte</a></h4>
</body>
</html>';
?>
