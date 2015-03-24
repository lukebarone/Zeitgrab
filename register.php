<?php

require "header.inc";
?>
<!-- Enter your page content below: -->
<?php
// BELOW - DEBUG ONLY. Remove in production
$newUsersCanRegister = true;
// END - DEBUG ONLY
    if (!$newUsersCanRegister) {
        echo "Sorry, open registration has been disabled! Please contact the leader of the group to get registered";
    } else {?>
        <h2>Please fill in the form below to register. The leader of the group will contact you when approved.</h2><br />
        <form method="POST" action="register.php">
            <table>
                <tr>
                    <td><label for="firstName">First Name</label></td>
                    <td><input type="text" id="firstName" name="firstName" maxlength="20" size="20" /></td>
                </tr>
                <tr>
                    <td><label for="lastName">Last Name</label></td>
                    <td><input type="text" id="lastName" name="lastName" maxlength="20" size="20" /></td>
                </tr>
                <tr>
                    <td><label for="emailAddress">Email Address</label></td>
                    <td><input type="text" id="emailAddress" name="emailAddress" maxlength="40" size="30" /></td>
                </tr>
                <tr>
                    <td><label for="password1">Password</label></td>
                    <td><input type="password" id="password1" name="password1" maxlength="20" size="20" /></td>
                </tr>
                <tr>
                    <td><label for="password2">Confirm Password</label></td>
                    <td><input type="password" id="password2" name="password2" maxlength="20" size="20" /></td>
                </tr>
                <tr>
                    <td colspan="2">The information entered above will be registered for use on the system. Please ensure the information is entered correctly and completely.</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" Value="Register" /></td>
                    <td><input type="reset" Value="Reset Form" /></td>
                </tr>
            </table>
        </form>
<?php }
?>
<!-- END - Custom page content -->
<?php require "footer.inc";?>