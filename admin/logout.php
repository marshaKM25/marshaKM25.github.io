<?php

/**
 * Scritp para destruir sesión activa del usuario
 * Autor: Marco Robles
 * Web: https://github.com/mroblesdev
 */

require 'config/config.php';

session_destroy();

header('Location: index.php');
