 <?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if
require_once('database.php');
 $server = "localhost";
  $user ="root";
  $pass ="";
  $dbname ="courier_db";
  //create connection 
  $conn =mysqli_connect($server, $user, $pass, $dbname);
  //check connection
  if(!$conn) {
     die ("connection failed : ". mysqli_connect_error());
  } else {
     echo "";
  }
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);
if(isset ($_POST['Submit'])) {
    $name = $_POST['txtname'];
       $address= $_POST['txtadd'];
	      $email = $_POST['txtemailid'];
		     $contact = $_POST['txtnumber'];
			    $pass = $_POST['txtpassword'];
	         $office=$_POST['OfficeName'];
    

	$sql = "INSERT INTO tbl_courier_officers (officer_name,off_pwd,address,email,ph_no,office)
VALUES ('$name', '$pass', '$address','$email','$contact','$office')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



?>



<html><head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62538bad7b967b117989f02c/1g0b5j8g1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registration</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script></head>


<body onLoad="document.form1.txtusername.focus();">
<table id="Outer" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td><table id="inner" border="0" cellpadding="3" cellspacing="3" height="500" align="center" width="96%">
      <tbody><tr>
        <td>
		<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
<table border="0" cellpadding="0" cellspacing="0" width="782">
<tbody><tr>
<td colspan="15"><img src="images/trheader.jpg" height="109" width="780"></td>
</tr>

		



      
      <tr>
        <td><div align="center">
          <span class="redtext"><strong>          </strong></span><br>  
              <br>
        </div>
          <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
            <tbody><tr>
              <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
              <td background="images/boxtopBG.gif" width="734"></td>
              <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
            </tr>
            <tr>
              <td background="images/boxleftBG.gif"></td>
              <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                  <tbody><tr>
                    <td colspan="2" height="4"></td>
                  </tr>
                  <tr>
                    <td height="18"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody><tr>
                        <td colspan="3" class="smalltextgrey" width="378">
						</td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="500">
                      <tbody><tr>
                        <form name="form2" id="form2" method="post">
                          <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%">
                              <tbody><tr>
                                <td colspan="3" class="smalltextgrey">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" class="smalltextgrey">
								<div class="headtext13" align="center"><strong>Administrator Registration Area </strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" height="10">
								<font color="#FF0000" style="font-size:12px;">
								<?php echo $error; ?>
								</font>
								</td>
                                </tr>
                              <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Name</font></td>
                                <td width="">:</td>
                                <td width="160">
								<input name="txtname" class="forminput" id="txtname" maxlength="20" type="text" placeholder="enter your  name" size="30" required></td>
                              </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Address</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtadd" class="forminput" id="txtadd" maxlength="20" type="text" placeholder="enter your address" size="30" required></td>
                              </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">E-mail Id</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtemailid" class="forminput" id="txtemailid" maxlength="30" type="text" placeholder="enter your e-mail id" size="30" name="Confirm E-mail Id"required></td>
                              
							 </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Confirm E-mail Id</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtemailid" class="forminput" id="txtemailid" maxlength="20" type="text" placeholder="re-enter your e-mail id" size="30" name="Confirm E-mail Id-repeat"required></td>
 </tr>
							   <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Contact No.</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtnumber" class="forminput select" id="txtcontact no." maxlength="20" type="number" placeholder="enter your contact no." size="30" required></td>
                              </tr>
							  <tr>
                                <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Confirm Contact No.</font></td>
                                <td width="">:</td>
                                <td width="">
								<input name="txtnumber" class="forminput select" id="txtcontact no." maxlength="20" type="number" placeholder="re-enter your contact no." size="30" required></td>
                              </tr>
                              <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password" placeholder="enter your password" size="30" required></td>
                              </tr>
							  <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Re-enter Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password" placeholder="re-enter your password" size="30" required></td>
                              </tr>
							  <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Office</font></td>
                                <td>:</td>
                                <td>
								<select class="select"name="OfficeName">
			<?php 
			while($data = dbFetchAssoc($result)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
			</select>
								</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
								<td><input name="Submit" class="green-button" value="Submit" type="submit" style="padding:5px 10px;font-weight:bold;"></td>
                              </tr>
                          </tbody>
						  </table>
						  </form>
						  </td>
                        
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </tbody></table></td>
              <td background="images/boxrightBG.gif"></td>
            </tr>
            <tr>
              <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
              <td background="images/boxbtmBG.gif" width="734"></td>
              <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
            </tr>
          </tbody></table>
          <br>
          <br></td>
      </tr>
      <tr>
        <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
      </tr>
      
    </tbody></table></td>
  </tr>
</tbody></table>
</td></tr></tbody></table></body></html>