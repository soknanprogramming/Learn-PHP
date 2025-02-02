<?php
    setcookie("sn", "soknan", time() + 1000, "/app/");
    //setcookie("sn", "soknan", time() - 0, "/");
    echo "{$_COOKIE['sp']}";


?>