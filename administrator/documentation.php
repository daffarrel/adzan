<?php
/*
BISMILLAAHIRRAHMAANIRRAHIIM - In the Name of Allah, Most Gracious, Most Merciful
================================================================================
filename	: 
purpose	: 
create	: 2006/02/24
last edit	: 2006/03/09,2006/03/17
author	: cahya dsn
================================================================================
This program is free software; you can redistribute it and/or modify it under the 
terms of the GNU General Public License as published by the Free Software 
Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

copyright (c) 2006-2007 by cahya dsn; cahyadsn@yahoo.com
================================================================================
*/
session_start();
if ($_SESSION['adzanAdmin']!=1) {
  header("Location: index.php?msg=1");
  exit();
}
include "../class/class.config.php";
$cfg=new config();
$cfg->get_config("../");
$menu=5;
include "admin.header.php";
?>
   <div id="header-title"><?php echo _DOCUMENTATION;?></div>
   <div class="clr"></div>
     <div class="content-form">
        <div class="form-block" style="padding: 0px;">
        <iframe src="../docs/<?php echo $cfg->cfgArray['lang'];?>.docs.html" class="license" frameborder="0" scrolling="auto"></iframe>
        </div>
      </div>
<?php include "admin.footer.php"; ?>