<?php

function urutanAngka($angka)
{
    $urutan = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $urutan . " ";
            $urutan++;
        }
        echo "<br>";
    }
}

urutanAngka(5);
