<?php

    echo "Se mostrar os estados abaixo funcionou:<p>";
    $conn = pg_connect("host=pgcensosuas port=5432 dbname=dbcensosuas user=postgres password=senha123");
    $result = pg_query($conn, "select * from ibge.estados");
    echo "<pre>";
    var_dump(pg_fetch_all($result));
    echo "</pre>";