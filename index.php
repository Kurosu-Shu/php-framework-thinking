<?php

require "bootstrap.php";


$users = $query->selectAll("users");

dd($users);

require "index.view.php";
