<?php
/*
BISMILLAAHIRRAHMAANIRRAHIIM - In the Name of Allah, Most Gracious, Most Merciful
================================================================================
filename  : 
purpose  : 
create  : 2007/05/01
last edit  : 070501,0525,0611,080810,120116
author  : cahya dsn
================================================================================
This program is free software; you can redistribute it and/or modify it under the 
terms of the GNU General Public License as published by the Free Software 
Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

copyright (c) 2007-2012 by cahya dsn; cahyadsn@yahoo.com
================================================================================
*/
include "../class/class.config.php";
$pathChk="../";
$cfg=new config($pathChk);
$algo=$cfg->cfgArray['algo']?$cfg->cfgArray['algo']:1;
include "../class/class.html.ajax.php";
$dtFile="../data/".$cfg->cfgArray['country'].".txt";
$Adzan1=new html_ajax($dtFile,isset($_GET['id'])?$_GET['id']:83,$pathChk,$pathChk,"",1);
$d=isset($_GET['d'])?$_GET['d']:date("j");
$m=isset($_GET['m'])?$_GET['m']:date("n");
$y=isset($_GET['y'])?$_GET['y']:date("Y");
$p=isset($_GET['p'])?$_GET['p']:1;
$Adzan1->generate_data($cfg->cfgArray['period'],$d,$m,$y,$cfg->cfgTime,$pathChk,$p);
?>