<?php include_once('header.php');?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
 
    <!-- Login Form -->
    <form action="posts.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<?php include_once('footer.php');?>