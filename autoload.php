<?php

function autocargador($clase) {
    require_once 'classes/' . $clase . '.php';
}

spl_autoload_register('autocargador');