<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$to = "resetflaskblogemail@gmail.com";
$subject = "New message";
$body = '<html>
            <body>
              <h2>Question</h2>
              <hr>
              <p>Name:,br>'.$name.'</p>
              <p>Email:<br>'.$email.'</p>
            </body>
          </html>';
$headers = "from: ".$name." <".$email.">\r\n";
$headers _= "Reply-To ".$email."\r\n";
$headers _= "MiMe-Version: 1.0\r\n";
$headers _= "Content-type: tet/html; charset-utf-8";

$send = mail($to, $subject, $body, $headers);
if ($send) {
  echo '<br>';
  echo "message received";
} else {
  echo "error from yahoo"
}
}
?>

<!doctype html>
<html>
  <head>
    <title>WASSUP</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="name" placeholder="your Name"><br>
      <input type="text" name="email" placeholder="your email"><br>
      <button type="submit">Ask</button>
    </form>
  </body>
</html>