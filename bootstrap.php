<?php

require "database/connection.php";
require "database/QueryBuilder.php";

// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);

return new QueryBuilder(
    Connection::make()
);