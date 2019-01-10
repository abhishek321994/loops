<html>
<body><form>
<center>
<table border="0" cellpadding="5" cellspacing="0" >
<tr> <td style="width: 50%">
<label for="First_Name"><b>First name *</b></label><br />
<input name="First_Name" type="text" maxlength="50" style="width: 260px" placeholder="Your First name"/>
</td> <td style="width: 50%">
<label for="Last_Name"><b>Last name *</b></label><br />
<input name="Last_Name" type="text" maxlength="50" style="width: 260px" placeholder="Your last name"/>
</td> </tr> <tr> <td colspan="2">
<label for="Email_Address"><b>Email *</b></label><br />
<input name="Email_Address" type="text" maxlength="100" style="width: 535px" placeholder="Your Email"/>
</td> </tr> <tr> <td colspan="2">
<label for="Portfolio"><b>Portfolio website</b></label><br />
<input name="Portfolio" type="text" maxlength="255" value="http://" style="width: 535px" placeholder="Portfolio website"/>
</td> </tr> <tr> <td colspan="2">
<label for="Position"><b>Position you are applying for *</b></label><br />
<input name="Position" type="text" maxlength="100" style="width: 535px" placeholder="Position you are applying for"/>
</td> </tr> <tr> <td>
<label for="Salary"><b>Salary requirements</b></label><br /> 
<input name="Salary" type="text" maxlength="50" style="width: 260px" placeholder="Salary requirements"/> </td> <td>
<label for="StartDate"><b>When can you start?</b></label><br />
<input name="StartDate" type="text" maxlength="50" style="width: 260px" placeholder="When can you start?"/>
</td> </tr> <tr> <td>
<label for="Phone"><b>Phone *</b></label><br />
<input name="Phone" type="text" maxlength="50" style="width: 260px" placeholder="Phone Number"/>
</td> <td>
<label for="Experience"><b>Experience</b></label><br />
<input name="Experience" type="text" maxlength="50" style="width: 260px" placeholder="Experience"/>
</td> </tr> <tr> <td colspan="2">
<label for="Relocate"><b>Are you willing to relocate?</b></label><br />
<input name="Relocate" type="radio" value="Yes" checked="checked" placeholder="Are you willing to relocate?"/> Yes      
<input name="Relocate" type="radio" value="No" /> No      
<input name="Relocate" type="radio" value="NotSure" /> Not sure
</td> </tr> <tr> <td colspan="2">
<label for="Organization"><b>Last company you worked for</b></label><br />
<input name="Organization" type="text" maxlength="100" style="width: 535px" />
</td> </tr> <tr> <td colspan="2">
<label for="Reference"><b>Reference / Comments / Questions</b></label><br />
<textarea name="Reference" rows="7" cols="40" style="width: 535px"></textarea>
</td> </tr> <tr> <td colspan="2" style="text-align: center;">

<input name="skip_submit" type="submit" value="Send Application" />
</td> </tr>
</table>
</form>
</center>
</body>
</html>



<?php 
require("index.php");
require("connect.php"); 

?>



