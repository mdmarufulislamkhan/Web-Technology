<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/khanStyle.css">
</head>
<body>
    <h1>User Registration</h1>
    <form onsubmit="return validateForm()" method="post" action="user_action.php">
        <table>
            <tr>
                <td id="F_Text">Full Name:</td>
                <td id="I_Text">
                    <input type="text" name="full_name" id="full_name">
                    <span id="full_name_error" class="error"></span> 
                </td>
            </tr>
            <tr>
                <td id="F_Text">Email:</td>
                <td id="I_Text">
                    <input type="email" name="email" id="email">
                    <span id="email_error" class="error"></span> 
                </td>
            </tr>
            <tr>
                <td id="F_Text">Password:</td>
                <td id="I_Text">
                    <input type="password" name="password" id="password">
                    <span id="password_error" class="error"></span>
                </td>
            </tr>
            <tr>
                <td id="F_Text">Confirm Password:</td>
                <td id="I_Text">
                    <input type="password" name="confirm_password" id="confirm_password">
                    <span id="confirm_password_error" class="error"></span> 
                </td>
            </tr>
            <tr>
                <td id="F_Text">Phone Number:</td>
                <td id="I_Text">
                    <input type="text" name="phone" id="phone">
                    <span id="phone_error" class="error"></span> 
                </td>
            </tr>
            <tr>
                <td id="F_Text">Address:</td>
                <td id="I_Text">
                    <textarea name="address" id="address"></textarea>
                    <span id="address_error" class="error"></span>
                </td>
            </tr>
            <tr>
                <td id="F_Text">Date of Birth:</td>
                <td id="I_Text">
                    <input type="date" name="dob" id="dob">
                    <span id="dob_error" class="error"></span>
                </td>
            </tr>
            <tr>
                <td id="F_Text">Gender:</td>
                <td id="I_Text">
                    <input type="radio" id="gender1" name="gender" value="Male"> Male
                    <input type="radio" id="gender2" name="gender" value="Female"> Female
                    <input type="radio" id="gender3" name="gender" value="Other"> Other
                    <span id="gender_error" class="error"></span>
                </td>
            </tr>
            <tr>
                <td id="F_Text">Choose Your Photo:</td>
                <td id="I_Text">
                    <input type="file" name="profile" id="profile">
                    <span id="profile_error" class="error"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="button-container">
                    <input id="submitButton" type="submit" class="button register" value="Register">
                </td>
            </tr>
        </table>
    </form>
    <script src="../js/khan.js"></script>
</body>
</html>
