<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

/*
 * Checks that the constant is defined this include
 * will only run if it recieves the defined constent
 */
defined('MY_INC_CODE') or die('Access to this file is restricted');

/* ****************************************
 *	SESSION FUNCTIONALITY
 *
 * **************************************** */

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != 1) {

header("Location: index.php");

}