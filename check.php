<?php
// スーパーグローバル変数
// shift+option+↓
$nickname=$_POST['nickname'];
// Command(Ctr)+d
$email=$_POST['email'];
$content=$_POST['content'];

if($nickname ==''){
    $nickname_result='ニックネームが
    入力されていません';

} else{
    $nickname_result='ようこそ'. $nickname.'様';
}

if($email ==''){
    $email_result='emailが入力されていません';
}  else{
    $email_result='メールアドレス:'  . $email;
}
if($content==''){
    $content_result='お問い合わせ内容が入力されていません';
}  else{
    $content_result='お問い合せ内容:' . $content;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>

    <form action="thanks.php" method="post">
        <input type="hidden" 
               name="nickname" 
                value="<?php echo $nickname; ?>">
        
        <input type="hidden" 
                name="email" 
                value="<?php echo $email; ?>">
        
        <input type="hidden" 
                name="content" 
                value="<?php echo $content; ?>">
        
        <input
                type="button"
                value="戻る"
                onclick="history.back()"
        >

        <?php if($nickname !='' && $email_result !='' &&
        $content!='' ):?>
            <input type="submit" value="OK">
        <?php endif; ?>


    </form>
</body>
</html>