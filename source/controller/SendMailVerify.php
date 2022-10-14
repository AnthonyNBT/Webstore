<?php
use PHPMailer\PHPMailer\PHPMailer;

function SendMailVerify($email, $requestId) {
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    $emailHost = "webapp.tm.host@gmail.com";
    $emailPasswordHost = "xugjsqjuachmsnfq";
    $mail = new PHPMailer(true);
    try{
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = $emailHost;
        $mail->Password = $emailPasswordHost;
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->isHTML(true);
        $mail->setFrom($emailHost , 'Web Admin');
        $mail->addAddress($email);
        $mail->Subject = "Login | Verification";
        $hrefLink = 'http://localhost:8080/web-project-store-apps/source/controller/VerifyLogin.php?requestid='. $requestId;
        $mail->Body = '<table align="center"><tr><td align="center" style="color: #343434; font-size: 24px;"><div style="line-height: 35px">T&M<span style="color: #39af5a;"> Store App Mailer</span></div></td></tr><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr><tr><td align="center"><table width="40px" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeeee"><tr><td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td></tr></table></td></tr><tr><td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td></tr><tr><td align="center"><table border="0" width="400px" align="center"><tr><td align="center" style="color: #888888; font-size: 16px; line-height: 24px;"><div style="line-height: 24px">Verify Login</div></td></tr></table></td></tr><tr><td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td></tr><tr><td align="center"><table border="0" align="center" width="160px" style="background-color: #39af5a"><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr><tr><td align="center" style="color: #ffffff; font-size: 20px; line-height: 26px;"><div style="line-height: 20px;"><a href="' . $hrefLink . '" style="color: #ffffff; text-decoration: none;">CLICK HERE</a></div></td></tr><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr></table></td></tr></table>';
        $mail->send();
    }catch(Exception $e) {
        echo $e->getMessage();
    }
}

function SendMailResetPass($email, $requestId) {
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    $emailHost = "webapp.tm.host@gmail.com";
    $emailPasswordHost = "xugjsqjuachmsnfq";
    $mail = new PHPMailer(true);
    try{
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = $emailHost;
        $mail->Password = $emailPasswordHost;
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->isHTML(true);
        $mail->setFrom($emailHost , 'Web Admin');
        $mail->addAddress($email);
        $mail->Subject = "Reset Password";
        $hrefLink = 'http://localhost:8080/web-project-store-apps/source/view/reset.php?requestid='. $requestId;
        $mail->Body = '<table align="center"><tr><td align="center" style="color: #343434; font-size: 24px;"><div style="line-height: 35px">T&M<span style="color: #39af5a;"> Store App Mailer</span></div></td></tr><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr><tr><td align="center"><table width="40px" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeeee"><tr><td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td></tr></table></td></tr><tr><td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td></tr><tr><td align="center"><table border="0" width="400px" align="center"><tr><td align="center" style="color: #888888; font-size: 16px; line-height: 24px;"><div style="line-height: 24px">Reset Password</div></td></tr></table></td></tr><tr><td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td></tr><tr><td align="center"><table border="0" align="center" width="160px" style="background-color: #39af5a"><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr><tr><td align="center" style="color: #ffffff; font-size: 20px; line-height: 26px;"><div style="line-height: 20px;"><a href="' . $hrefLink . '" style="color: #ffffff; text-decoration: none;">CLICK HERE</a></div></td></tr><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr></table></td></tr></table>';
        $mail->send();
    }catch(Exception $e) {
        echo $e->getMessage();
    }
}