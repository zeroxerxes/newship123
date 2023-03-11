<?php
session_start();
require_once('library.php');
isUser();
?>

<?php
include("header2.php");
?>


  <tr>
    <td bgcolor="#FFFFFF"><div align="center"> <br>
        <br>
        <table bgcolor="#ECECEC" border="0" cellpadding="2" cellspacing="2" align="center" width="50%">
        <tbody><tr>
          <td class="Partext1" bgcolor="#EEEEEE"><div align="left"><strong>Express Management System </strong></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="add-courier.php" class="REDLink">Add Shipment</a></div></td>
        </tr>
                <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="courier-list.php" class="REDLink">List Shipment</a></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="report.php" class="REDLink">Report</a></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="process.php?action=logOut" class="REDLink">Logout</a></div></td>
        </tr>
        <tr>
            <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="admin%20registration.php" class="REDLink">Add Admin</a></div></td>
        </tr>
      </tbody></table>
            <br>
          <br>
          <br>      
          <br>
    </div></td>
  </tr>
  <tr>
    <td>
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">
	</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>

<?php
include("footer.php");
?>


