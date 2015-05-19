<?php
    function GameNameKuerzen($GameName)
    {
    if(strlen($GameName)<=27) {
    echo $GameName;
    } else {
    $GameNameKurz=substr($GameName,0,27) . '...';
    echo $GameNameKurz;
    }
    }