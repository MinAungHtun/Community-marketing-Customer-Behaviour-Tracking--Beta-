<?
include ("inc/incfiles/header.inc.php");
if ($user) {

}
else
{
 die ("You must be logged in to view this page!");
}
?>
<?
  $senddata = @$_POST['senddata'];

  //Password variables
  $old_password = strip_tags(@$_POST['oldpassword']);
  $new_password = strip_tags(@$_POST['newpassword']);
  $repeat_password = strip_tags(@$_POST['newpassword2']);

  if ($senddata) {
  //If the form has been submitted ...

  $password_query = mysql_query("SELECT * FROM users WHERE username='$user'");
  while ($row = mysql_fetch_assoc($password_query)) {
        $db_password = $row['password'];
        
        //md5 the old password before we check if it matches
        $old_password_md5 = md5($old_password);
        
        //Check whether old password equals $db_password
        if ($old_password_md5 == $db_password) {
         //Continue Changing the users password ...
         //Check whether the 2 new passwords match
         if ($new_password == $repeat_password) {
            if (strlen($new_password) <= 4) {
             echo "Sorry! But your password must be more than 4 character long!";
            }
            else
            {

            //md5 the new password before we add it to the database
            $new_password_md5 = md5($new_password);
           //Great! Update the users passwords!
           $password_update_query = mysql_query("UPDATE users SET password='$new_password_md5' WHERE username='$user'");
           echo "Success! Your password has been updated!";

            }
         }
         else
         {
          echo "Your two new passwords don't match!";
         }
        }
        else
        {
         echo "The old password is incorrect!";
        }
  }
   }
  else
  {
   echo "";
  }


  $updateinfo = @$_POST['updateinfo'];

  //First Name, Last Name and About the user query
  $get_info = mysql_query("SELECT first_name, last_name, bio FROM users WHERE username='$user'");
  $get_row = mysql_fetch_assoc($get_info);
  $db_firstname = $get_row['first_name'];
  $db_last_name = $get_row['last_name'];
  $db_bio = $get_row['bio'];

  //Submit what the user types into the database
  if ($updateinfo) {
   $firstname = strip_tags(@$_POST['fname']);
   $lastname = strip_tags(@$_POST['lname']);
   $bio = @$_POST['bio'];


   if (strlen($firstname) < 3) {
    echo "Your first name must be 3 more more characters long.";
   }
   else
   if (strlen($lastname) < 5) {
    echo "Your last name must be 5 more more characters long.";
   }
   else
   {
    //Submit the form to the database
    $info_submit_query = mysql_query("UPDATE users SET first_name='$firstname', last_name='$lastname', bio='$bio' WHERE username='$user'");
    echo "Your profile info has been updated!";
    header("Location: $user");
   }
  }
  else
  {
   //Do nothing
  }
  //Check whether the user has uploaded a profile pic or not
  $check_pic = mysql_query("SELECT profile_pic FROM users WHERE username='$user'");
  $get_pic_row = mysql_fetch_assoc($check_pic);
  $profile_pic_db = $get_pic_row['profile_pic'];
  if ($profile_pic_db == "") {
  $profile_pic = "img/default_pic.jpg";
  }
  else
  {
  $profile_pic = "userdata/profile_pics/".$profile_pic_db;
  }
  //Profile Image upload script
  if (isset($_FILES['profilepic'])) {
   if (((@$_FILES["profilepic"]["type"]=="image/jpeg") || (@$_FILES["profilepic"]["type"]=="image/png") || (@$_FILES["profilepic"]["type"]=="image/gif"))&&(@$_FILES["profilepic"]["size"] < 1048576)) //1 Megabyte
  {
   $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $rand_dir_name = substr(str_shuffle($chars), 0, 15);
   mkdir("userdata/profile_pics/$rand_dir_name");

   if (file_exists("userdata/profile_pics/$rand_dir_name/".@$_FILES["profilepic"]["name"]))
   {
    echo @$_FILES["profilepic"]["name"]." Already exists";
   }
   else
   {
    move_uploaded_file(@$_FILES["profilepic"]["tmp_name"],"userdata/profile_pics/$rand_dir_name/".$_FILES["profilepic"]["name"]);
    //echo "Uploaded and stored in: userdata/profile_pics/$rand_dir_name/".@$_FILES["profilepic"]["name"];
    $profile_pic_name = @$_FILES["profilepic"]["name"];
    $profile_pic_query = mysql_query("UPDATE users SET profile_pic='$rand_dir_name/$profile_pic_name' WHERE username='$user'");
    header("Location: account_settings.php");
    
   }
  }
  else
  {
      echo "Invailid File! Your image must be no larger than 1MB and it must be either a .jpg, .jpeg, .png or .gif";
  }
  }

?>
<h2>Edit your Account Settings below</h2>
<hr />
<p>UPLOAD YOUR PROFILE PHOTO:</p>
<form action="" method="POST" enctype="multipart/form-data">
<img src="<? echo $profile_pic; ?>" width="70" />
<input type="file" name="profilepic" /><br />
<input type="submit" name="uploadpic" value="Upload Image">
</form>
<hr />
<form action="account_settings.php" method="post">
<p>CHANGE YOUR PASSWORD:</p> <br />
Your Old Password: <input type="text" name="oldpassword" id="oldpassword" size="40"><br />
Your New Password: <input type="text" name="newpassword" id="newpassword" size="40"><br />
Repeat Password  : <input type="text" name="newpassword2" id="newpassword2" size="40"><br />
<input type="submit" name="senddata" id="senddata" value="Update Information">
</form>
<hr />
<form action="account_settings.php" method="post">
<p>UPDATE YOUR PROFILE INFO:</p> <br />
First Name: <input type="text" name="fname" id="fname" size="40" value="<? echo $db_firstname; ?>"><br />
Last Name: <input type="text" name="lname" id="lname" size="40" value="<? echo $db_last_name; ?>"><br />
About You: <textarea name="bio" id="bio" rows="7" cols="40"><? echo $db_bio; ?></textarea>

<hr />
<input type="submit" name="updateinfo" id="updateinfo" value="Update Information">
</form>
<form action="close_account.php" method="post">
<p>CLOSE ACCOUNT:</p> <br />
<input type="submit" name="closeaccount" id="closeaccount" value="Close My Account">
</form>
<hr />
<br />
<br />