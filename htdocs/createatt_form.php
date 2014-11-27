<script type="text/javascript" src="js/ajax_functions.js"></script>
<script type="text/javascript">
	var numofattr=0;
	function add_attribute_field (sender) {
		
		var inputs = document.querySelectorAll('#form_create>p');
		numofattr=inputs.length;
		// numofattr++;

		var form=document.getElementById('form_create');
		var i = document.createElement("p"); //input element, text
		/*i.setAttribute('type',"text");
		i.setAttribute('name',"attribute");*/
		i.innerHTML = 'Attribute '+numofattr+': <input type="text" name="attribute'+numofattr+'" />  Description: <input type="text" name="desc'+numofattr+'" />Equality:<select name="equality'+numofattr+'"><option value=" " selected> </option><option value="caseIgnoreMatch">caseIgnoreMatch</option><option value="caseExactMatch">caseExactMatch</option><option value="distinguishedNameMatch">distinguishedNameMatch</option><option value="integerMatch">integerMatch</option><option value="booleanMatch">booleanMatch</option><option value="numericStringMatch">numericStringMatch</option><option value="octetStringMatch">octetStringMatch</option> <option value="objectIdentiferMatch">objectIdentiferMatch</option></select>';
		// form.appendChild(i);
		form.insertBefore(i, form.childNodes[numofattr-1]);
/*		i = document.createElement("input"); //input element, text
		i.setAttribute('type',"text");
		i.setAttribute('name',"desc");
		form.appendChild(i);*/
		console.log(form);
		// body...
	}
	function show_fields () 
	{
		var sender = document.getElementById('form_number')
		console.log(sender);
		// var value = document.getElementById('field_number').value;
		// var parent = document.getElementById('form_number').parentNode;
		return custom_ajSUBMIT('BODY',sender,'Please Wait','createatt_form.php');
	}
	function submit_values()
	{
		var sender = document.getElementById('form_create')
		// return attribute_create_js('BODY',sender,'Creating Attributes','createatt.php');
		return custom_ajSUBMIT('BODY',sender,'Please Wait','createatt.php');

	}

</script>
<?php

/*
echo'<form action="createatt.php" method="post">';
echo " <p>  Select the no of attributes want to add:  ";
echo '<select name="noofattr">';
echo ' <option value="1" selected>1</option>';
echo '  <option value="2">2</option>';
echo '  <option value="3">3</option>';
echo '  <option value="4">4</option>';
echo '  <option value="5">5</option>';
echo '  <option value="6">6</option>';
echo '  <option value="7">7</option>';
echo '  <option value="8">8</option>';
echo '  <option value="9">9</option>';
echo '</select></p>';
echo '<p>Attribute 1: <input type="text" name="attribute1" />  Description: <input type="text" name="desc1" /></p>';
echo '<p>Attribute 2: <input type="text" name="attribute2" /> Description: <input type="text" name="desc2" /></p>';
echo '<p>Attribute 3: <input type="text" name="attribute3" /> Description: <input type="text" name="desc3" /></p>';
echo '<p>Attribute 4: <input type="text" name="attribute4" /> Description: <input type="text" name="desc4" /></p>';
echo '<p>Attribute 5: <input type="text" name="attribute5" /> Description: <input type="text" name="desc5" /></p>';
echo '<p>Attribute 6: <input type="text" name="attribute6" /> Description: <input type="text" name="desc6" /></p>';
echo '<p>Attribute 7: <input type="text" name="attribute7" /> Description: <input type="text" name="desc7" /></p>';
echo '<p>Attribute 8: <input type="text" name="attribute8" /> Description: <input type="text" name="desc8" /></p>';
echo '<p>Attribute 9: <input type="text" name="attribute9" /> Description: <input type="text" name="desc9" /></p>';
echo '<p><input type="submit" /></p>';
echo '</form>';

*/
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

</div></td>*/
echo '
<td class="body" style="width: 100%;">
<div id="ajBODY">
<table class="body">
<tr>
<td>

<div style="text-align: center;"><h3 class="title"><b>Create Attribute</b></h3>
<h3 class="subtitle">Server: <b>My LDAP Server</b></h3>';

if(!isset($_POST['noofattr']))
{
	echo'<form id="form_number" action="javascript:show_fields(this)" method="post">';
	echo " <p>  Select the no of attributes want to add:  ";
	echo '<select name="noofattr" style="width: 50px">';
	echo ' <option value="1" selected>1</option>';
	echo '  <option value="2">2</option>';
	echo '  <option value="3">3</option>';
	echo '  <option value="4">4</option>';
	echo '  <option value="5">5</option>';
	echo '  <option value="6">6</option>';
	echo '  <option value="7">7</option>';
	echo '  <option value="8">8</option>';
	echo '  <option value="9">9</option>';
	echo '</select></p>';
	echo '<p><input type="submit" /></p>';
	echo '</form>';
}

else
{
	echo "<button onclick='add_attribute_field()'>add </button>";
	$numofattr=$_POST['noofattr'];
	echo'<form id="form_create" action="javascript:submit_values()" method="post">';

	// echo '<input type="hidden" name="noofattr" value=numofattr/>';
	for($i=1;$i<=$numofattr;$i++)
	{
		echo '<p>Attribute '.$i.': <input type="text" name="attribute'.$i.'" />  Description: <input type="text" name="desc'.$i.'" />Equality: 
		 <select name="equality'.$i.'">
		 	<option value=" " selected> </option>
		   <option value="caseIgnoreMatch" >caseIgnoreMatch</option>
		   <option value="caseExactMatch">caseExactMatch</option>";
		   <option value="distinguishedNameMatch">distinguishedNameMatch</option>
		   <option value="integerMatch">integerMatch</option>
		   <option value="booleanMatch">booleanMatch</option>
		   <option value="numericStringMatch">numericStringMatch</option>
		   <option value="octetStringMatch">octetStringMatch</option>
		   <option value="objectIdentiferMatch">objectIdentiferMatch</option>
		 </select></p>';
	}
	echo '<p><input type="submit" /></p>';
	echo '</form>';
}

echo'
</div>
</td>
</tr>
</table>
</div>
</td>'
/*
</tr>
<tr class="foot">
<td><small>&nbsp;</small></td>
<td colspan="2">
<div id="ajFOOT">1.2.2</div>
<a href="https://sourceforge.net/projects/phpldapadmin"><img src="http://sflogo.sourceforge.net/sflogo.php?group_id=61828&amp;type=10" alt="SourceForge.net Logo" style="border: 0px;" /></a>
</td>
</tr>
</table>
</body>
</html>';

*/
?>