<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geek Label</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:141px;
	top:16px;
	width:805px;
	height:8172px;
	z-index:1;
}
.blackborder {
	border: 1px solid #000000;
}
.style1 {
	font-size: small;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #CCCCCC;
}
.greyborder {
	border: 1px solid #CCCCCC;
}
-->
</style>
<script src="Scripts/SpryMenuBar.js" type="text/javascript"></script>
<link href="Scripts/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style4 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: small;}
.style5 {color: #FF0000}
.style9 {	color: #000033;
	font-weight: bold;
}
.style10 {color: #000033; font-weight: bold; font-size: medium; }
.style11 {
	color: #000000;
	font-size: small;
}
.style12 {font-size: x-small}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="Scripts/SpryValidationTextField.js" type="text/javascript"></script>
<link href="Scripts/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style13 {color: #FFFFFF}
.style14 {font-size: medium}
.style15 {color: #FFFFFF;
	font-size: small;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style17 {color: #FFFFFF;
	font-size: x-small;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style18 {color: #009900}
.style23 {color: #000000}
-->
</style>
</head>

<body>
<div align="center">
  <table width="951" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="blackborder">
    <!--DWLayoutTable-->
    <tr>
      <td width="274" height="180" align="center" valign="middle" bgcolor="#CCCCCC"><a href="index.php"><img src="images/logo.jpg" alt="Geek Label" width="250" height="69" longdesc="Geek Label" /></a></td>
      <td colspan="2" align="right" valign="bottom" bgcolor="#CCCCCC"><blockquote>
        <p><span class="style4"><strong>Cart Items</strong>: 003  = <span class="style5">52,800</span></span><br />
          <span class="style4"><a href="checkout.php" class="style23">Check Out</a><span class="style12"> &gt;&gt;</span></span></p>
      </blockquote></td>
    </tr>
    
    <tr>
      <td height="32" colspan="2" align="left" valign="middle" bgcolor="#000000" class="blackborder"><blockquote>
        <p><a href="index.php" class="style15">Home</a> <span class="style17">&gt;&gt;</span> <a href="gents.php" class="style15">Registration</a></p>
      </blockquote></td>
      <td width="474" align="right" valign="middle" bgcolor="#000000" class="blackborder"><blockquote>
        <p class="style1">Logged in as <span class="style18">Group B</span> I <a href="register.php" class="style13">Register</a></p>
      </blockquote></td>
    </tr>
    <tr>
      <td height="153" valign="top" bgcolor="#000000"><ul id="MenuBar1" class="MenuBarVertical">
        <li><a href="index.php">Home</a>            </li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a class="MenuBarItemSubmenu" href="#">Products</a>
            <ul>
              <li><a href="ladies.php">Ladies T-Shirts</a>                </li>
              <li><a href="gents.php">Gents T-Shirts</a></li>
              <li><a href="custom_order.php">Custom Order</a></li>
            </ul>
          </li>
          <li><a href="contact_us.php">Contact Us</a></li>
      </ul></td>
      <td colspan="2" rowspan="3" align="left" valign="top" class="style4"><blockquote>
        <p class="style4"><span class="style9"><span class="style10"><br />
              <span class="style11"><span class="style14">REGISTRATION FORM:</span><br />
              <br />
              </span></span></span></p>
        <form id="form1" name="form1" method="post" action="">
          <span id="sprytextfield1">
          <label>
          First Name:<span class="style13">_____</span>
          <input type="text" name="text1" id="text1" size="40" />
          </label>
          <span class="textfieldRequiredMsg">First Name is Required</span></span><br />
          <br />
          <span id="sprytextfield2">
          <label>
          Last Name:<span class="style13">_____</span>
          <input type="text" name="text2" id="text2" size="40" />
          </label>
          <span class="textfieldRequiredMsg">Last Name is Required</span></span><br />
          <br />
          <span id="sprytextfield3">
          <label>
          Email:<span class="style13">_________</span>
          <input type="text" name="text3" id="text3" size="40" />
          </label>
          <span class="textfieldRequiredMsg">An Email is required.</span><span class="textfieldInvalidFormatMsg">Enter Valid Email Address</span></span><br />
          <p>
            <label>
              Gender:<span class="style13">________
              </span>
              <input type="radio" name="RadioGroup1" value="male" id="RadioGroup1_0" />
              Male</label>
            <label>
              <input type="radio" name="RadioGroup1" value="female" id="RadioGroup1_1" />
              Female</label>
          </p>
          <p><span id="sprytextfield4">
          <label>
          Phone Number:<span class="style13">__</span>
          <input type="text" name="text4" id="text4" size="40" />
          </label>
          <span class="textfieldRequiredMsg">A Phone Number is required.</span><span class="textfieldInvalidFormatMsg">Enter Valid Number.</span><span class="textfieldMinCharsMsg">Enter Min 10 digit Phone Number</span><span class="textfieldMaxCharsMsg">Enter Valid Phone Number</span></span></p>
          <p><span id="sprytextfield5">
            <label>
            Address:<span class="style13">________
            </span>
            <input type="text" name="text5" id="text5" size="40" />
            </label>
            <span class="textfieldRequiredMsg">Enter Address Please</span></span></p>
          <p>&nbsp;</p>
          <p>
            <label>
              <span class="style13">_______________              </span>
              <input type="submit" name="button" id="button" value="Submit Registration Form" />
              </label>
            <br />
          </p>
          <br />
        </form>
        <p class="style4">&nbsp;</p>
        <p class="style4">&nbsp;</p>
          </blockquote></td>
    </tr>
    <tr>
      <td height="245" align="center" valign="middle" bgcolor="#000000"><form id="form2" name="form1" method="post" action="">
        <label><span class="style1">Username: </span>
        <input type="text" name="textfield" id="textfield" />
        </label>
        <br />
        <span class="style1"><br />
          Password:</span>
        <input type="text" name="textfield2" id="textfield2" />
        <br />
        <label> <br />
        <input type="submit" name="button2" id="button2" value="Login" />
        </label>
        <p class="style1"><a href="register.php" class="style13">Register</a></p>
      </form>      </td>
    </tr>
    
    <tr>
      <td height="140" valign="middle" bgcolor="#000000"><blockquote>
        <p class="style1"><strong>24 HR CUSTOMER SERVICE</strong></p>
          <p class="style1">Call: 0800-265 0977 Toll Free<br />
            P.O.Box 2355, Kampala<br />
          Uganda, East Africa</p>
      </blockquote></td>
    </tr>
    <tr>
      <td height="1"></td>
      <td width="201"></td>
      <td></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"Scripts/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {minChars:10, maxChars:12});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
