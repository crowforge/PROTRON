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
 *	DATABASE FUNCTIONALITY
 *
 * **************************************** */

$link_id=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if($link_id)
{
	//echo "<p>Successful Connection</p>";
} 
else
{
	echo "<p>UnSuccessful Connection: " . DB_HOST . "</p>";
	EXIT;
}

if(mysql_select_db(DB_DATABASE,$link_id)) 
{
	//echo "<p>Connection to database successful </p>";
} 
else 
{
	echo "<p>Connection to database failed  </p>";
}