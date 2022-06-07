<?php

function select_all($koneksi, $table, $method)
{
    $query = "SELECT * FROM $table";
    $sql = mysqli_query($koneksi, $query);
    $row = mysqli_num_rows($sql);
    $fetch = mysqli_fetch_array($sql);

    if ($method == "select") return $sql;
    else if ($method == "row") return $row;
    else if ($method == "fetch") return $fetch;
}

function select_where($koneksi, $table, $parameter, $clause, $method)
{
    $query = "SELECT * FROM $table WHERE $parameter='$clause'";
    $sql = mysqli_query($koneksi, $query);
    $row = mysqli_num_rows($sql);
    $fetch = mysqli_fetch_array($sql);

    if ($method == "select") return $sql;
    else if ($method == "row") return $row;
    else if ($method == "fetch") return $fetch;
}
