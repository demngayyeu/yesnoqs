<?php
switch($_GET["file"])
{
	default:
	{
	$TIEUDE="I Love You";
	include_once("tpl/header.php");
	include_once("mylove.html");
	break;
	}
	case "enter":
	{
	$TIEUDE="I Love You";
	include_once("tpl/header.php");
	include_once("enter.html");
	break;
	}
}
?>