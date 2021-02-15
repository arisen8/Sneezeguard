<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>You are now banned from this web site</title>
<meta name="Author" content="http://www.linuxuk.co.uk">
</head>
<body bgcolor="#333333" text="black" link="blue" vlink="purple" alink="red">
<p><font face="Arial Narrow">&nbsp;</font></p>
<table cellpadding="0" cellspacing="0" width="900" bgcolor="white" align="center" height="659">
    <tr>
        <td bgcolor="black" height="129">
            <p align="center"><b><font face="Arial Narrow" color="white"><span style="font-size:18pt;">You have triggered our security program</span></font></b><font face="Arial Narrow"></font></p>
        </td>
    </tr>
    <tr>
        <td width="900" height="123">
            <table align="center" cellpadding="0" cellspacing="0" width="100%" bgcolor="white">
                <tr>
                    <td width="268">
                        <p align="center"><font face="Arial Narrow"><img src="images/stop.png" width="150" height="150" border="0"></font></p>
                    </td>
                    <td width="632">
                        <p><font size="6" face="Arial Narrow">You are now banned from this web site</font><font size="4" face="Arial Narrow"><br />
                            If you are here by accident please mail webmaster@this URL<br />to have your IP number removed.<br /></font><font face="Arial Narrow" color="#3B608D"><b><?php echo date("d/m/y");?></b></font></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="70">
            <h1>
                <center>
                    <ul>
                        <p align="justify"><font face="Arial Narrow">
<?php
                   $ip= $_SERVER['REMOTE_ADDR'];
?>
                  </font><i><font size="3" face="Arial Narrow">Please note:<br />
                   This system is in place to protect you and us from malicious attacks, do not be offended if you<br />
                   are here by accident.<br />
                  </font><font size="3" face="Arial Narrow" color="#FF0033">The store owner has been notified.</font></i><font face="Arial Narrow"></font></p>
                    </ul>
                </center>
            </h1>
            <h2 align="center"><font face="Arial Narrow">Please quote your IP Number in any correspondence</font></h2>
            <table border="0" align="center" cellspacing="0">
                <tr>
                    <td width="176px">
                        <p align="center"><font face="Arial Narrow"><span style="font-size:20pt;"><b>
<?php // shows IP Number on Page
			            echo $ip;
?>                       </b></span></font></p>
                    </td>
                </tr>
            </table>
            <p align="center"><font face="Arial Narrow"><?php
             // Show the user agent
     	    	echo 'Your user agent is: <b>'.$_SERVER['HTTP_USER_AGENT'].'</b><br />';?></font></p>
            <p><font face="Arial Narrow">&nbsp;</font></p>
            <p><font size="1" face="Arial Narrow">IP Trap by </font><a href="http://www.linuxuk.co.uk"><font size="1" face="Arial Narrow">Linuxuk</font></a><font size="1" face="Arial Narrow">, bringing web site security to you.</font></p>
        </td>
    </tr>
</table>
</body>
</html>