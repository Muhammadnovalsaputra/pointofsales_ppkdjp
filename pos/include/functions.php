<?php

// isset artinya ada atau tidak kosong
// !isset :kosong
// jika session kosong

function checkLogin()
{
    if (!isset($_SESSION['ID'])) {
        header("location:index.php?access=failed");
    }
}
