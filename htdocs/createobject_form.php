<script type="text/javascript" src="js/ajax_functions.js"></script>
<script type="text/javascript">
	var i=2;var j=2;var numinherit=1;var numattribute=0;
	function add_block_inherit (sender) 
	{
		// var parent_id= sender.parentNode.getA/ttribute('id') ;
		var parent = sender.parentNode;

		// var new_id= 'inherit_block'+i;
		// numinherit=i;
		// var input = document.createElement("input");
		// span.setAttribute('id',new_id);
		// input.setAttribute('name','inherit'+i);
		// input.setAttribute('type','text');
		var html='<input type="text" name="inherit"'+i+'/>';
		parent.innerHTML+=html;
		i++;
		// parent.appendChild(input);
		return;
	}
	function add_block_attribute(sender)
	{
		var parent = sender.parentNode;
		// var input = document.createElement("input");
		
		// console.log(parent_id);
		// var span = document.createElement("span");
		// var new_id= 'attribute_block'+j;
		// numattribute=j;
		// span.setAttribute('id',new_id);
		var html = 'Attribute '+j+': <input type="text" name="attribute'+j+'"/>Attribute type: <select name="attributetype'+j+'"><option value="may" selected>MAY</option><option value="must" > MUST </option></select><br>';
		j++;
		parent.innerHTML+=html;
		// span.innerHTML=html;
		// document.getElementById(parent_id).appendChild(span);
		return;

	}
	function submit_values()
	{
		return custom_ajSUBMIT('BODY',document.getElementById('form_class_create'),'Creating Class','createobject.php');

	}
</script>
<?php
/**
 * Show a simple welcome page.
 *
 * @package phpLDAPadmin
 * @subpackage Page
 */

/**
 */

/*$entry = array();
$entry['view'] = get_request('view','GET','false','objectclasses');
$entry['value'] = get_request('viewvalue','GET');
$socs = $app['server']->SchemaObjectClasses();*/
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
echo'
<td class="body" style="width: 100%;">
<div id="ajBODY">
<table class="body">
<tr>
<td>
<div style="text-align: center;"><h3 class="title"><b>Create Object Class with Attribute</b></h3>
<h3 class="subtitle">Server: <b>My LDAP Server</b></h3>';


echo'<form action="javascript:submit_values()" id="form_class_create" method="post">';

$string = "<p>Object Class name: <input type='text' name='objectname' /></p><br>
			<p>Description: <input type='text' name='desc' /></p>

			
			<br>
			<span id='inherit_block1'>
				<button onclick='add_block_inherit(this)'>
				Add Inherit Block
				</button><br>
					Inherit :<br> <input type='text' name='inherit1'/>
			</span>
			<br><br>
			
			<br>
			<span id='attribute_block1'>
				<button onclick='add_block_attribute(this)'>
				Add Attribute Block
				</button>	<br>
				Attribute 1: <input type='text' name='attribute1'/>
				Attribute type: <select name='attributetype1'>
				<option value='may' selected>MAY</option>
				<option value='must' > MUST </option>
				</select>
				<br>
			</span>";
echo $string;

echo '<p><input type="submit" /></p>';
echo '</form>';

echo'</div>
</td>
</tr>
</table>
</div>
</td>'

/*
echo ' <p>Object Class name: <input type="text" name="objectname" />';
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Object class inherited from <small>(give top for default)</small>: ";
echo "  Select:  ";
echo '<select name="noofinherit" style="width: 50px">';
echo ' <option value="1" selected>1</option>';
echo '  <option value="2">2</option>';
echo '  <option value="3">3</option>';
echo '  <option value="4">4</option>';
echo '  <option value="5">5</option>';
echo '</select></p>';

/*echo '<select name="inheritobject" >';
echo '<option value=""> - all -</option>';
	   foreach ($socs as $name => $oclass)
			printf('<option value="%s" %s>%s</option>',
				$name,$name == $entry['value'] ? 'selected="selected" ': '',$oclass->getName(false));
echo '</select></p>';*/
/*echo '<p>Inherit 1: <input type="text" name="inherit1" />  ';
echo 'Inherit 2: <input type="text" name="inherit2" /> </p>';
echo '<p>Inherit 3: <input type="text" name="inherit3" /> ';
echo 'Inherit 4: <input type="text" name="inherit4" />  ';
echo 'Inherit 5: <input type="text" name="inherit5" /> </p> ';
$i=0;$j=0;
echo " <p>  Select the no of attributes to be entered:  ";
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


echo '<p>Attribute 1: <input type="text" name="attribute1" />  Attribute type: <select name="attributetype1">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 2: <input type="text" name="attribute2" />Attribute type: <select name="attributetype2">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 3: <input type="text" name="attribute3" />Attribute type: <select name="attributetype3">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 4: <input type="text" name="attribute4" />Attribute type: <select name="attributetype4">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 5: <input type="text" name="attribute5" />Attribute type: <select name="attributetype5">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 6: <input type="text" name="attribute6" />Attribute type: <select name="attributetype6">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 7: <input type="text" name="attribute7" />Attribute type: <select name="attributetype7">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 8: <input type="text" name="attribute8" />Attribute type: <select name="attributetype8">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
echo '<p>Attribute 9: <input type="text" name="attribute9" />Attribute type: <select name="attributetype9">
<option value="may" selected>MAY</option>
<option value="must" > MUST </option>
</select></p>';
*/
/*</tr>
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