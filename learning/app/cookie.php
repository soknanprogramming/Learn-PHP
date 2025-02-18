<?php
    echo "{$_COOKIE['sn']}";

    setcookie("sp", "sreypin", time() + 1000, "/");
?>