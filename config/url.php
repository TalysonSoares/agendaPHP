<?php

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['REQUEST_URI'] . '?');
echo $BASE_URL;
echo "<br>";
echo dirname($_SERVER['REQUEST_URI'] . '?');
echo "<br>";
echo $_SERVER['REQUEST_URI'] . '?';