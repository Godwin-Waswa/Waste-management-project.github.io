<?php
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];
  $con = mysqli_connect('localhost','root','','wms');
  $result = "select email,password from users where md5(email)='$email' and md5(password)='$pass'";
  $select=mysqli_query($con,$result);
  if(mysqli_num_rows($select)==1)
  {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>