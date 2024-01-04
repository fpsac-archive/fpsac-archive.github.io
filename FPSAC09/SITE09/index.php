<html>
<head>
<title>FPSAC 2009</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<!-- ========================================================== -->
<?php 
$key2fullname = array(
		      "announcements"=>"News",
		      "general"=>"General",
		      "dates"=>"Dates",
		      "committees"=>"Committees",
		      "submission"=>"Submission",
		      //"registration"=>"Registration",
		      "participants"=>"Participants",
		      //"support"=>"Support",
		      "program"=>"Program",
		      "travel"=>"Travel",
		      "pics"=>"Photos",
		      "links"=>"Links",
		      );

if(isset($_REQUEST['content'])
   &&
   array_key_exists($_REQUEST['content'],$key2fullname)
  )
{
      $content = $_REQUEST['content']; 
} else {
      $content = "general";
}

// functions

function typeButton($contentkey) {
  if ($contentkey === $GLOBALS['content']) {
    $class = "selected";
  } else {
    $class = "unselected";
  }
  echo "<td class='".$class."'>".'<a href="?content=', $contentkey, '" class="button">';
  echo $GLOBALS['key2fullname'][$contentkey];
  echo "</a></td>\n";
}
?>
<!-- ========================================================== -->

</head>


<body>
<!-- We wrap everything into a table -->
<table cellspacing="0" cellpadding="0" border="0" width="90%">
<tr>
<td>&nbsp;&nbsp;&nbsp;<!-- left filler --></td>

<td>

<!-- ========================================================== -->

<!-- ((FPSAC LOGO + Text) + Date+Place) + Picture (two columns) -->
<table cellspacing="0" cellpadding="0" border="0">
<tr>
  <!-- (col1) (FPSAC LOGO + Text) + Date+Place (two rows) -->
  <td valign="bottom">
    <table>
    <tr>
      <td>
        <!-- RISC + JKU logos -->
        <table>
        <tr>
          <td><a href="http://www.risc.jku.at/"><img src="risc-logo.gif"
                                                     border="0"></a></td>

          <td style="font-size:14px;">
            <a href="http://www.risc.uni-linz.ac.at/" style="color:black;">
              Research Institute for Symbolic Computation
            </a>
            <br>
            <a href="http://www.jku.at/" style="color:black;">
              Johannes Kepler University Linz
            </a>
          </td>

          <td><a href="http://www.jku.at/"><img src="jku-logo.gif"
                                                border="0"></a></td>

        </tr>
        </table>
        <!-- END RISC + JKU logos -->
      </td>
    <tr>

    <tr><td><!-- make some space --></td></tr>
    <tr><td><!-- make more space --></td></tr>


    <!-- (row1) FPSAC LOGO + Text (two columns) -->
    <tr>
      <td>
        <table cellspacing="0" cellpadding="0" border="0" width="500">
        <tr>
          <!-- (col1) FPSAC LOGO -->
          <td><a href="."><img src="logo.png" border=0></a></td>
          <!-- END (col1) FPSAC LOGO -->

          <!-- (col2) FPSAC Text -->
          <td style="font-size:20px;">
            <p align="center">
              <b>21st International Conference on</b>
              <br>
              <b style="font-size:24px">Formal Power Series</b>
              <br>
              <b>&amp;</b>
              <br>
              <b style="font-size:24px">Algebraic Combinatorics</b>
            </p>
          </td>
          <!-- END (col2) FPSAC Text -->
        </tr>
        </table>
      </td>
    </tr>
    <!-- END (row1) FPSAC LOGO + Text -->

    <tr><td><!-- make some space --></td></tr>
    <tr><td><!-- make more space --></td></tr>
    <tr><td><!-- make more space --></td></tr>

    <!-- (row2) Date+Place -->
    <tr><td>July 20-24, 2009, Hagenberg, Austria</td></tr>
    <!-- END (row2) Date+Place -->
    </table>
  </td>
  <!-- END (col1) (FPSAC LOGO + Text) + Date+Place -->

  <!-- (col2) Picture of Castle -->
  <td valign="bottom" width="355"><img src="castle.jpg"></td>
  <!-- END (col2) Picture of Castle -->
</tr>
</table>
<!-- END ((FPSAC LOGO + Text) + Date+Place) + Picture -->

<!--- menu --->
<table cellspacing=1 cellpadding=3 border=0 width=100% bgcolor="#b0b0b0">
<tr valign="middle" bgcolor=#ffffff>
<?php
while(current($key2fullname)) {
  typeButton(key($key2fullname));
  next($key2fullname);
}
?>
</tr>
</table>

<?php include "./".$content.".php"; ?>

<p style="margin-top:50px;">
<hr>
<a href="mail&#116;o:Ralf.Hemmecke&#64;&#114;isc.jku.at">webmaster</a>
</p>
</td>

<td>&nbsp;&nbsp;&nbsp;<!-- right filler --></td>
</tr>
</table>
</body>
</html>
