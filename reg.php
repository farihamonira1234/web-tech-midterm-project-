<!DOCTYPE html>
<html>
<body>
<form action="reg_handler.php" method="POST">

<head>
   <br><h1 class="text-center" >Welcome To Our Contest</h1>
  
             <fieldset>
             <legend>REGISTRATION</legend>

        <table width="150%" border="1">
            <tr height="50px">
                    <td   style="width:30%" >Name</td>
                    <td  style="width:70%" colspan="3">
                    <input type="text" name="Name"  placeholder="Enter Name" width= "100%" value="" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" required>
                    <br>
                 </tr>

            <tr height ="50px">
                <td style="width:30%" >ID</td>
                <td  style="width:70%" colspan="3"><input type="text"placeholder="Enter ID"  name= "ID" value="" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%" required></td>
            </tr>
                    <tr height ="50px">
                    
                    <td   style="width:30%" >Password</td>
                    <td  style="width:70%" colspan="3">
                    <input   type="Password" name="Password"    placeholder="Enter Password" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%"  required>
                    </td>
                </tr>
                <tr height ="50px">
                	<td   style="width:30%" >Confirm Password</td>
                	<td  style="width:70%" colspan="3">
                    <input   type="Password" name="ConfirmPassword" id="confirmPassword"  placeholder="Enter Confirm Password" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%" required>
                    <br>
                </tr>
                
                 <tr height="50px" >
                 	<td   style="width:30%" >Email</td>
                    <td  style="width:70%" colspan="3">
                    <input type="Email" name="Email"   placeholder="Enter Email"size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" width= "100%" required>
                    <br>
                </tr>
                <tr height="50px">
                    <td   style="width:30%" >Age</td>
                    <td  style="width:70%" colspan="3">
                    <input type="text" name="Age"  placeholder="Enter Age" width= "100%" value="" size="100px" box-sizing= "border-box" padding="12px 20px " margin="80px 0" display="inline-block" required>
                    <br>
                 </tr>
                 <tr height="50px">
                    <td   style="width:30%" >Gender</td>
                    <td  style="width:70%" colspan="3">
                    <input type="radio" name="Gender" value="Female">Female
                    <input type="radio" name="Gender" value="Male">Male
                    <input type="radio" name="Gender" value="other">Other
                    <br><br>
                </tr>

                <tr height="50px">
                	<td   style="width:30%" >UserType</td>
                    <td  style="width:70%" colspan="3">
                    <select name="UserType"  required>
                        <option value="user">USER</option>
                        <option value="admin">ADMIN</option>
                    </select>
                    <br>
                </tr>
                </td>

                  <td>  <input type="submit" name="submit" value="submit">


 </tr>
            </table>
        </fieldset>
    </form>

   
</body>
</html>