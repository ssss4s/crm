<?php
$connet=mysql_connet("localhost","root","jian9109.9");
if(!$connet)
{
	die("could not connet mysql:".mysql_error());
}
mysql_close($connet);
