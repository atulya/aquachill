<?php
/*
*************** --------------- *************** --------------- ***************
   Library Name:
           ReadFrom
   Description:  This file is used to check whether folder is in wip or in works and accordingly change
                 library access
   Written by:
           18-09-2010 - Poonam Shah
   Modified by:
           18-09-2010 - Poonam Shah
           This standard comment block was inserted today.

   Code review by:
           18-09-2010 - Poonam Shah
   Tested by:
   Tests:
   Test Results:
           18-09-2010 - Poonam Shah
           The results are in confirmation with requirement.

   Results:
           18-09-2010 - Poonam Shah
               error details entry in ErrorLog.txt file
   More Information:
           18-09-2010 - Poonam Shah

   Caution:

   Assumption:
           18-09-2010 - Poonam Shah
           See module level assumptions for this code module.
   Prerequisites:
   Parameters :
       By Reference -
       By Value -
       Optional -

   External procedures & classes:

   Error handling:
           Genereic error handling
   See also:
   Consumers:
   Remarks:
   Help Id:
   Document ref.no. and location:
*************** --------------- *************** --------------- ***************
*/
	require_once('../ITLibrary/ITLib.php');
	$Lib = new Utilities;
	$txt = read_text('../ReadFrom.txt');
	$asContents = explode("\n", $txt);
	for($i=0;$i<sizeof($asContents);$i++)
	{
		switch($asContents[$i])
		{
			case $asContents[$i] == '[FOLDER]' :
					continue;
					break;
			case $asContents[$i] == 'active' :
					$sLibPath = '../ITLibrary/';
					$sModulePath = '../modules/';
					$sVanshvelPath = '../vanshvel/';
					$sMatrimonyPath = '../matrimony/';
					$sWorkFolder = $asContents[$i];
					break;
			case $asContents[$i] == 'WIP' :
					$sLibPath = '../ITLibrary/';
					$sAdminPath = '../../ITLibrary/';
					$sModulePath = '../modules/';
					$sVanshvelPath = '../vanshvel/';
					$sMatrimonyPath = '../matrimony/';
					$sWorkFolder = $asContents[$i];
					break;
			case $asContents[$i] == 'public_html':
					$sLibPath = '../ITLibrary/';
					$sAdminPath = '../../ITLibrary/';
					$sModulePath = '../modules/';
					$sVanshvelPath = '../vanshvel/';
					$sMatrimonyPath = '../matrimony/';
					$sWorkFolder = $asContents[$i];
					break;
		}
	}
?>