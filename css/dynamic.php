<?php
 /**
 * Dynamic css and php page.
 *
 * We fetch and insert records through database and implement in css.
 *
 * @category  GTPL
 * @author    Harsha Dhingra <harshadhingra26@gmail.com>
 * @copyright 2013 Eduspace
 * @license   http://eduspace.in/license Eduspace License
 * @version   1.0
 * @link      http://eduspace.in
 * @since     File available since Release 1.5.0
 * @package   protected.views.home
 */	
?>
<?php
header("Content-type: text/css");

	$type_id=$_GET['id'];
	
	$con = mysql_connect("118.139.178.236","eduspace","Adr12e24Eda@1!");
		$i=0;
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("admin_eduspace", $con);
	if ($type_id==0 ||$type_id=='')
	{
		define("headBgColor","#00B3FF", true);
		define("headTextColor","#192EFE", true);
		define("navBgStartColor","#4397E4", true);
		define("navBgEndColor", "#025CBC", true);
		define("navSelectedStartColor","#C8D7EB", true);
		define("navSelectedEndColor", "#000", true);
		define("navNonSelectedColor", "#4E90D3", true);
		define("subMenuBgColor", "#fff", true);
	}
	else
	{
		$result = mysql_query("SELECT * FROM  edu_custom_theme	WHERE bintLoginId=$type_id");
		/*if(is_array(mysql_fetch_array($result)))
		{
			define("headBgColor", "#E8Edc8", true);
		}*/
		if (mysql_num_rows($result)>0)
		{
			while ($row = mysql_fetch_array($result))
			{
				if ( trim($row['varThemeBgHead']) !='')
				{
					define("headBgColor",$row['varThemeBgHead'], true);
				}
				else
				{
					define("headBgColor","#00B3FF", true);
				}
				if (trim($row['varThemeHeadText']) !='')
				{
					define("headTextColor",$row['varThemeHeadText'], true);
				}
				else
				{
					define("headTextColor","#192EFE", true);
				}
				if ( trim($row['varThemeNavBgStartColor']) !='')
				{
					define("navBgStartColor",$row['varThemeNavBgStartColor'], true);
				}
				else
				{
					define("navBgStartColor","#4397E4", true);
				}
				if ( trim($row['varThemeNavBgEndColor']) !='')
				{
					define("navBgEndColor",$row['varThemeNavBgEndColor'], true);
				}
				else
				{
					define("navBgEndColor", "#025CBC ", true);
				}	
				if ( trim($row['varThemeMenuSelectStart']) !='')
				{
					define("navSelectedStartColor",$row['varThemeMenuSelectStart'], true);
				}
				else
				{
					define("navSelectedStartColor","#C8D7EB", true);
				}	
				if ( trim($row['varThemeMenuSelectEnd']) !='')
				{
					define("navSelectedEndColor",$row['varThemeMenuSelectEnd'], true);
				}
				else
				{
					define("navSelectedEndColor", "#000", true);
				}	
				if (trim($row['varThemeMenuUnselect']) !='')
				{
					define("navNonSelectedColor",$row['varThemeMenuUnselect'], true);
				}
				else
				{
					define("navNonSelectedColor", "#4E90D3", true);
				}	
				if (trim($row['varThemeSubMenuBg']) !='')
				{
					define("subMenuBgColor",$row['varThemeSubMenuBg'], true);
				}
				else
				{
					define("subMenuBgColor", "#fff", true);

				}
			}
		}
		else
		{
			define("headBgColor","#00B3FF", true);
			define("headTextColor","#192EFE", true);
			define("navBgStartColor","#4397E4", true);
			define("navBgEndColor", "#025CBC ", true);
			define("navSelectedStartColor","#C8D7EB", true);
			define("navSelectedEndColor", "#000", true);
			define("navNonSelectedColor", "#4E90D3", true);
			define("subMenuBgColor", "#fff", true);
		}
		mysql_close($con);
	}
?>	
/*Start Dynamic CSS*/
#header {
    background-color:<?=headBgColor?>;
}
.headSubName,.headNameText,.signOut{
	color: <?=headTextColor?>;
}
#nav{
	background: -moz-linear-gradient(top,  <?=navBgStartColor?> 0%, <?=navBgEndColor?> 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?=navBgStartColor?>), color-stop(100%,<?=navBgEndColor?>)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  <?=navBgStartColor?> 0%,<?=navBgEndColor?> 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  <?=navBgStartColor?> 0%,<?=navBgEndColor?> 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  <?=navBgStartColor?> 0%,<?=navBgEndColor?> 100%); /* IE10+ */
	background-color:<?=navBgStartColor?>;
	background: linear-gradient(to bottom,  <?=navBgStartColor?> 0%,<?=navBgEndColor?> 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?=navBgStartColor?>', endColorstr='<?=navBgEndColor?>',GradientType=0 ); */
}
#menu li,.help{
	background-color: <?=navNonSelectedColor?>;
}
#menu li:hover,.navMenuOutput,.active{
	background:<?=navSelectedStartColor?>!important;
}
#menu a,#menu li i,.help,.help a,.help i,.help i:hover{
	color:<?=subMenuBgColor?>;
}
#menu a:hover,#menu li i:hover{
	color: <?=navSelectedEndColor?>;
}
.active a{
	color: <?=navSelectedEndColor?>!important;
}
.subMenu,.subMenu a,.link{
	color: <?=navSelectedEndColor?>;
}
.superAdminMenuItem a{
	color:<?=subMenuBgColor?>;
}
.superAdminMenuItem{	
	background:<?=navBgStartColor?>;
	background: linear-gradient(to bottom,  <?=navBgStartColor?> 0%,<?=navBgEndColor?> 100%);
}
.superAdminMenuItem:hover{
	background: linear-gradient(to bottom, <?=navSelectedStartColor?> 0%, <?=navSelectedEndColor?> 100%);
}
.superAdminMenuItem a:hover{
	color:<?=subMenuBgColor?>;
}
/*----------footer----------*/
#footer {
	background:<?=headBgColor?>;
}
.footer-text{
	color: <?=headTextColor?>;
}
#footer_main div {
	color:<?=headTextColor?>;
}
#footer_main li {
    color: <?=headTextColor?>;
}
#footer_main li a {
    color: <?=headTextColor?>;
}