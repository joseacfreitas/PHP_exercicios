<?php

$nomeCookie = "idade";

$valorCookie - "77";

setcookie($nomeCookie, $valorCookie, time() + 20000);
echo "cookie criado";
