<?php
class WebUtils
{
  public function userMailToJobSeeker($mail, $userEmail,$id)
{
    try{
        $mailSending = $userEmail;
        $body = "Welcome to Wirmon India Pvt Ltd and thanks for registering with us.Activate your account now!";
        $body .="<!DOCTYPE html>
    <html lang=en>

    <head>
      <meta charset=UTF-8>
      <title>Test mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #000;

        }
        a {
          background: #ff8000;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff !important;
          font-size:1.8em;
        }
      </style>
    </head> <body>
      <div class=wrapper>
        <center><p style=font-size:1.9em><b>Activate your Account</b></p>
        <a href=http://wirmon.in/login.php?email=$userEmail&id=$id>VERIFY</a></div></body></html>";

        $mail->IsSMTP();
        $mail->Host = "mail.wirmon.in";
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = "noreply@wirmon.in";
        $mail->Password = "Wirmon@noreply";

        $mail->From = "noreply@wirmon.in";
        $mail->FromName = "Wirmon India Pvt Ltd";
        $mail->AddAddress($mailSending);

        $mail->IsHTML(true);                                  // set email format to HTML

        $mail->Subject = "Account Verification";
        $mail->Body    = $body;
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

        if(!$mail->Send())
        {
            return false;
        }
        else
        {
            return true;
        }

    }
    catch(PDOException $e)
    {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
    }
}

public function userMailToEmployer($mail, $userEmail,$id)
{
  try{
      $mailSending = $userEmail;
      $body = "Welcome to Wirmon India Pvt Ltd and thanks for registering with us.Activate your account now!";
      $body .="<!DOCTYPE html>
  <html lang=en>

  <head>
    <meta charset=UTF-8>
    <title>Test mail</title>
    <style>
      .wrapper {
        padding: 20px;
        color: #000;

      }
      a {
        background: #ff8000;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 5px;
        color: #fff !important;
        font-size:1.8em;
      }
    </style>
  </head> <body>
    <div class=wrapper>
      <center><p style=font-size:1.9em><b>Activate your Account</b></p>
      <a href=http://wirmon.in/login.php?email=$userEmail&id=$id>VERIFY</a></div></body></html>";

      $mail->IsSMTP();
      $mail->Host = "mail.wirmon.in";
      $mail->Port = 465;
      $mail->SMTPSecure = 'ssl';
      $mail->SMTPAuth = true;
      $mail->Username = "noreply@wirmon.in";
      $mail->Password = "Wirmon@noreply";

      $mail->From = "noreply@wirmon.in";
      $mail->FromName = "Wirmon India Pvt Ltd";
      $mail->AddAddress($mailSending);

      $mail->IsHTML(true);                                  // set email format to HTML

      $mail->Subject = "Account Verification";
      $mail->Body    = $body;
      $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

      if(!$mail->Send())
      {
          return false;
      }
      else
      {
          return true;
      }

  }
  catch(PDOException $e)
  {
      echo '{"error":{"text":'. $e->getMessage() .'}}';
  }
}
}
?>
