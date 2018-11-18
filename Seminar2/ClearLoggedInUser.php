<?php
/**
 * Created by PhpStorm.
 * User: Rikard
 * Date: 2018-11-18
 * Time: 11:43
 */
session_start();
session_unset();

header("Location: index.php");