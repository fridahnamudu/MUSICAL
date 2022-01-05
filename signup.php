<?php
  include_once 'header.php';
  ?>

<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Your name ...">
        <input type="text" name="email" placeholder="Email ...">
        <input type="text" name="uid" placeholder="Your username ...">
        <input type="password" name="pwd" placeholder="Your password...">
        <input type="password" name="pwdRepeat" placeholder="Repeat password ...">
        <button type="submit" name="submit">Sign Up</button>
    </form>

<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdRepeat'];

  if ($password == $pwdRepeat) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query ($conn, $sql);
    if (!result->num_rows > 0) {
      $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) 
              VALUES ('$name', '$email', '$uid', '$pwd')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Submission Successful. Thank you!')</script>";
    } else {
      echo "<script>alert('Woops! Something went wrong.')</script>"
    }

    }
  }

}
?>
</section>
