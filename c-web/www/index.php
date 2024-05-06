<?php

    $conn = pg_connect("host=localhost port=5432 dbname=dbcensosuas user=postgres password=senha123");
    $result = pg_query($conn, "select * from ibge.estados");
    var_dump(pg_fetch_all($result));