<?php

require "Model/snowService.php";

function snows(){
    $snows = getsnows();
    require "view/snows.php";
}

function snow($code)
{
    $snows = getSnow($code);
    $snow = $snows[0];
    require "view/snow.php";
}