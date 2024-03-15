<?php

$config = require "config.php";
require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";
require "Router.php";
require "Request.php";

$query = new QueryBuilder(
    Connection::make($config["database"])
);
