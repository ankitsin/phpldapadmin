<?php
ignore_user_abort(TRUE);
$numofattr=count($_POST)/3;
 var_dump($_POST);
$k=0;
// echo $numofattr;
 // exit();
for($j=0;$j<$numofattr;$j++)
{
	$k++;
	$attribute[$j]=$_POST['attribute'.$k];
	$desc[$j]=$_POST['desc'.$k];
	$equality[$j]=$_POST['equality'.$k];
}
$my_file = 'att_temp.ldif';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$i=0;
$data[$i] = 'dn: cn=schema,cn=config';
fwrite($handle, $data[$i]);
$i++;
//$data[$i]="\n".'changetype: add';
$data[$i]="\n".'changetype: modify'."\n".'add: olcAttributeTypes';
fwrite($handle, $data[$i]);
$i++;
$date = date_create();
$date_stamp= date_timestamp_get($date);
for ($j=0; $j <$numofattr ; $j++) { 
	if($equality[$j]!=" ")
	{
		$data[$i]="\n"."olcAttributeTypes: (1.3.6.1.4.1.4203.666.1.".$date_stamp."".$i." NAME '".$attribute[$j]."' DESC '".$desc[$j]."' EQUALITY ".$equality[$j]." SYNTAX 1.3.6.1.4.1.1466.115.121.1.15{1024})";
	}
	else
	{
		$data[$i]="\n"."olcAttributeTypes: (1.3.6.1.4.1.4203.666.1.".$date_stamp."".$i." NAME '".$attribute[$j]."' DESC '".$desc[$j]."' SYNTAX 1.3.6.1.4.1.1466.115.121.1.15{1024})";

	}

	fwrite($handle, $data[$i]);
	$i++;
}

$message= shell_exec('ldapmodify -x -D "cn=config" -w q -f att_temp.ldif 2>&1');
//var_dump($message);
if(strpos($message,'error')==false)
	$message="Attribute added";



/*echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="auto">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpLDAPadmin (1.2.2) - </title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
<link type="text/css" rel="stylesheet" href="css/default/style.css" />
<link type="text/css" rel="stylesheet" media="all" href="js/jscalendar/calendar-blue.css" title="blue" />
<script type="text/javascript" src="js/ajax_functions.js"></script>
<script type="text/javascript" src="js/jscalendar/calendar.js"></script>
</head>
<body>
<table class="page" border="0" width="100%">
<tr class="pagehead">
<td colspan="3">
<div id="ajHEAD">
<table width="100%" border="0">
<tr>
<td style="text-align: left;"><a href="https://sourceforge.net/projects/phpldapadmin" onclick="target="_blank;">
<img src="images/default/logo-small.png" alt="Logo" class="logo" /></a></td>
<td class="imagetop"><a href="https://sourceforge.net/mailarchive/forum.php?forum_name=phpldapadmin-users" title="Forum" onclick="target="_blank";">
<img src="images/default/forum-big.png" alt="Forum" /></a> 
<a href="https://sourceforge.net/tracker/?func=add&amp;group_id=61828&amp;atid=498549" title="Request feature" onclick="target="_blank";">
<img src="images/default/request-feature-big.png" alt="Request feature" /></a>
<a href="https://sourceforge.net/tracker/?func=add&amp;group_id=61828&amp;atid=498546" title="Report a bug" onclick="target="_blank";"><img src="images/default/bug-big.png" alt="Report a bug" /></a>
<a href="https://sourceforge.net/donate/index.php?group_id=61828" title="Donate" onclick="target="_blank";">
<img src="images/default/smile-big.png" alt="Donate" /></a>
<a href="http://phpldapadmin.sourceforge.net/Documentation" title="Help" onclick="target="_blank";"><img src="images/default/help-big.png" alt="Help" /></a>
</td>
</tr>
</table>
</div>
</td>
</tr>
<tr class="control"><td colspan="3">
<div id="ajCONTROL">
<table class="control" width="100%" border="0">
<tr>
<td><a href="index.php" title="Home">Home</a> | <a href="cmd.php?cmd=purge_cache" onclick="return ajDISPLAY("BODY","cmd=purge_cache","Clearing cache");" title="Purge caches">Purge caches</a> | <a href="cmd.php?cmd=show_cache" onclick="return ajDISPLAY("BODY","cmd=show_cache","Loading);" title="Show Cache">Show Cache</a></td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td class="tree" colspan="2">
<acronym title="Hide/Unhide the tree"><img src="images/default/plus.png" alt="" style="float: right;" onclick="if (document.getElementById("ajTREE").style.display == "none") { document.getElementById("ajTREE").style.display = "block" } else { document.getElementById("ajTREE").style.display = "none" };"/></acronym>
<div id="ajTREE">
<div id="ajSID_1" style="display: block">
<table class="tree" border="0">
<tr class="server">
<td class="icon"><img src="images/default/server.png" alt="Server" /></td>
<td class="name" colspan="3">My LDAP Server <img width="14" height="14" src="images/default/timeout.png" title="Inactivity will log you off at 23:13" alt="Timeout"/></td>
</tr>
<tr>
<td class="spacer"></td>
<td colspan="3" class="links">
<table>
<tr>
<td class="server_links"><a href="cmd.php?cmd=schema&amp;server_id=1" onclick="return ajDISPLAY("BODY","cmd=schema&amp;server_id=1","Loading Schema");" title="View schema for My LDAP Server"><img src="images/default/schema-big.png" alt="schema" /><br />schema</a>
</td>
<td class="server_links"><a href="cmd.php?cmd=query_engine&amp;server_id=1" onclick="return ajDISPLAY("BODY","cmd=query_engine&amp;server_id=1","Loading Search");" title="Search My LDAP Server"><img src="images/default/search-big.png" alt="search" /><br />search</a></td>
<td class="server_links"><a href="cmd.php?cmd=refresh&amp;server_id=1&amp;noheader=1&amp;purge=1" onclick="return ajDISPLAY("SID_1_nodes","cmd=refresh&amp;server_id=1&amp;noheader=1&amp;purge=1","Refreshing Tree");" title="Refresh My LDAP Server"><img src="images/default/refresh-big.png" alt="refresh" /><br />refresh</a></td>
<td class="server_links"><a href="cmd.php?cmd=server_info&amp;server_id=1" onclick="return ajDISPLAY("BODY","cmd=server_info&amp;server_id=1","Loading Info");" title="Info My LDAP Server"><img src="images/default/info-big.png" alt="info" /><br />info</a></td>
<td class="server_links"><a href="cmd.php?cmd=import_form&amp;server_id=1" onclick="return ajDISPLAY("BODY","cmd=import_form&amp;server_id=1","Loading Import");" title="Import My LDAP Server"><img src="images/default/import-big.png" alt="import" /><br />import</a></td>
<td class="server_links"><a href="cmd.php?cmd=export_form&amp;server_id=1" onclick="return ajDISPLAY("BODY","cmd=export_form&amp;server_id=1","Loading Export");" title="Export My LDAP Server"><img src="images/default/export-big.png" alt="export" /><br />export</a></td>
<td class="server_links"><a href="cmd.php?cmd=logout&amp;server_id=1" title="Logout of this server"><img src="images/default/logout-big.png" alt="logout" /><br />logout</a></td>
</tr>
</table>
</td>
</tr>
</table>

<script type="text/javascript" src="js/layersmenu-browser_detection.js"></script>
<script type="text/javascript" src="js/ajax_tree.js"></script>
</div>

</div></td>
*/
echo '<td class="body" style="width: 100%;">
<div id="ajBODY">
<table class="body">
<tr>
<td>
<div style="text-align: center;"><h3 class="title"><b>Create Attribute</b></h3>
<h3 class="subtitle">Server: <b>My LDAP Server</b></h3>
<div style="font-size:30px;">';
print_r($message);
echo'</div></div>
</td>
</tr>
</table>
</div>
</td>
';





?>