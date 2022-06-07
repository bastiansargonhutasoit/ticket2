<?php

function namabulan($bulan)
{
    if ($bulan == 1) return "Januari";
    else if ($bulan == 2) return "Februari";
    else if ($bulan == 3) return "Maret";
    else if ($bulan == 4) return "April";
    else if ($bulan == 5) return "Mei";
    else if ($bulan == 6) return "Juni";
    else if ($bulan == 7) return "Juli";
    else if ($bulan == 8) return "Agustus";
    else if ($bulan == 9) return "September";
    else if ($bulan == 10) return "Oktober";
    else if ($bulan == 11) return "November";
    else if ($bulan == 12) return "Desember";
    else return "<span style='color: #D81B60'>Angka Bulan Tidak Valid</span>";
}

function convert_bulan($var) //format YYYY-mm-dd
{
    $tahun = substr($var, 0, 4);
    $bulan = substr("$var", 5, -3);
    $tanggal = substr($var, 8, 2);

    $namabulan = namabulan($bulan);

    return "$tanggal $namabulan $tahun";
}
