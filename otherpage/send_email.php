<?php
$to = "minerno1222@gamil.com"
$subject = "收到一条友链申请"
if (_SERVER["REQUEST_METHOD"] == "POST") {
    $headers = "From: 2475410090@qq.com" . "\r\n" .
             "Reply-To: 22475410090@qq.com" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();
    $type1 = $_POST["type1"];
    $type2 = $_POST["type2"];
    $name = $_POST["name"];
    $desr = $_POST["desr"];
    $web = $_POST["web"];
    $email = $_POST["email"];
    $avatar = $_POST["avatar"];
    $message = "操作：" . $type1 .
               "类型：" . $type2 .
               "名称：" . $name .
               "描述：" . $desr .
               "站点网址：" . $web .
               "邮箱" . $email .
               "头像" . $avatar
  mail($to,$subject, $message,$headers);
  echo "邮件发送成功！";
}
?>
