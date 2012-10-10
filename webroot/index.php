<?php

/************************************************************************/
/* AppServ Open Project                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2001 by Phanupong Panyadee (http://www.appservnetwork.com)         */
/* http://www.appservnetwork.com                                             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
include("appserv/main.php");


print "
<html>
<head>
<title>AppServ Open Project "._APPVERSION."</title>

<meta http-equiv=\"Content-Type\" content=\"text/html; charset=\""._CHARSET."\">
<meta property=\"wb:webmaster\" content=\"7f4cd9b2b835fa26\" />
<style>
<!-- Hide style for old browsers 
BODY          {font-family: MS Sans Serif;font-size=\"10\"}
.headd { font-family: Helvetica,Verdana ; font-size: 13pt; text-decoration:  none; }
.app { font-family: MS Sans Serif ; font-size: 10pt; text-decoration:  none; }
A:link    {text-decoration: none; color: #0000FF}
A:visited {text-decoration: none; color: #0000FF}
A:hover   {text-decoration: none; color: #FF0000}
A:active  {text-decoration: none; color: #FF0000}
-->
</style>
</head>
<body bgcolor=\"#FFFFFF\">
<div align=\"left\"> 
  <table border=\"0\" width=\"100%\" height=\"19\">
    <tr bgcolor=\"#FFD2F8\"> 
      <td width=\"100%\" height=\"19\" valign=\"top\"><font color=\"#000080\">
	  <span class=\"headd\"><strong><big>&nbsp; The AppServ Open Project - "._APPVERSION." "._FOR." "._OS." </big></strong></span></font></td>
    </tr>
  </table>
  
</div>
<div align=\"left\"> 
  <table width=\"100%\" border=\"0\">
    <tr bgcolor=\"#FFF9FD\"> 
      <td height=\"344\"> 
        <blockquote> 
          <p><font color=\"#000080\"><span
    class=\"headd\"><strong><br>
	            <img src=\"appserv/members.gif\" width=\"20\"
    height=\"20\" align=\"absmiddle\"> <span class=\"app\"><a href=\""._LPHPMYADMIN."/\">"._PHPMYADMIN." "._VERSION." "._VPHPMYADMIN."</a><br>
	            <img
    src=\"appserv/annoicon.gif\" width=\"20\" height=\"20\" align=\"absmiddle\"> <a href=\"phpinfo.php\">"._PHPINFO." "._VERSION." "._VPHP."</a> <br>
   </strong></span></font> </p>
          <p><span
    class=\"app\"><u>"._ABOUT." "._APPSERV." "._VERSION." "._APPVERSION." "._FOR." "._OS."</u><br>
            "._APPSERV." "._IS." <br><blockquote>
            <li><b><a href=\"http://www.apache.org\"> "._APACHE."</b> "._VERSION." <b>"._VAPACHE."</b></a><br>
            <li><b><a href=\"http://www.php.net\">"._PHP."</b> "._VERSION." <b>"._VPHP."</b></a><br>
            <li><b><a href=\"http://www.mysql.com\">"._MYSQL."</b> "._VERSION." <b>"._VMYSQL."</b></a><br>
            <li><b><a href=\"http://phpmyadmin.sourceforge.net\">"._PHPMYADMIN."</b> "._VERSION." <b>"._VPHPMYADMIN."</b></a><br>
			</blockquote>
			</span> 
          </p>
        </blockquote>
        <ul>
          <li><a href=\"appserv/ChangeLog.txt\"><span class=\"app\">"._CHANGELOG."</span></a></li>
          <li> <a href=\"appserv/README-$appservlang.php?appservlang=$appservlang\"><span class=\"app\">"._README."</span></a></li>
          <li><a href=\"appserv/AUTHORS.txt\"><span class=\"app\">"._AUTHOR."</span></a></li>
          <li><a href=\"appserv/COPYING.txt\"><span class=\"app\">"._COPYING."</span></a></li>
          <li><span class=\"app\"><a href=\"http://www.AppServNetwork.com\">http://www.AppServNetwork.com</a>  
		 </li> </ul>

&nbsp; &nbsp; &nbsp; &nbsp;<b> "._LANG." : </b><a href=\"index.php?appservlang=th\"><img src=\"appserv/flag-thai.png\" width=\"30\" height=\"16\" align=\"absmiddle\" border=\"0\"></a>&nbsp; <a href=\"index.php?appservlang=en\"><img src=\"appserv/flag-english.png\" width=\"30\" height=\"16\" align=\"absmiddle\" border=\"0\"></a> 
<br><br>
      </td>
    </tr>
    <tr> 
      <td height=\"19\" bgcolor=\"#FFD2F8\"><font color=\"#000080\" class=\"headd\">&nbsp;&nbsp;&nbsp;<img src=\"appserv/softicon.gif\" width=\"20\" height=\"20\" align=\"absmiddle\">&nbsp;<b>"._SLOGAN."</b> </font></td>
    </tr>
  </table>  
</div>
</body>
</html>
";
?>