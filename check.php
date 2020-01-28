<?php
$name =$_POST["name"];
$email = $_POST["email"];
$tel =$_POST["phone"];
$radio =$_POST["radio"];
$postal = $_POST["postal"];
$pref = $_POST["pref01"];
$addr = $_POST["addr01"];
$search = $_POST["search"];
$size = $_POST["size"];
// $content = $_POST["content"];

if(isset($_POST["radio"])){
    $radio_results =$radio;
    // echo"$radio";
}else{
    echo "性別が選択されていません";
}

if($name==""){
    $name_result = '名前を入力してください';
}else{
    $name_result= $name. '様';
}
if($email==""){
    $email_result='メールを入力してください';
}else{
    $email_result=$email;
}
if($tel==""){
    $tel_result='電話番号を入力してください';
}else{
    $tel_result=$tel;
}
if($postal==""){
    $postal_result='郵便番号を入力してください';
}else{
    $postal_result=$postal;
}
if($pref==""){
    $pref_result='都道府県を入力してください';
}else{
    $pref_result= $pref;
}
if($addr==""){
    $addr_result='住所を入力してください';
}else{
    $addr_result=$addr;
}
if($search==""){
    $search_result='商品番号を入力してください';
}else{
    $search_result=$search;
}
if($size==""){
    $size_result='サイズを指定してください';
}else{
    $size_result=$size;
}
// if($content==""){
//     $content_result='ご要望などはございませんか？';
// }else{
//     $content_result=$content;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>check</title>
</head>
<body>
    <h1 class="verification">最終確認事項</h1>
    <div class="checkBox">
        <div class="checkers">
            <p>お名前：<?php echo($name_result) ?></p>
            <p>メール：<?php echo($email_result) ?></p>
            <p>電話番号：<?php echo($tel_result) ?></p>
            <p>性別：<?php echo($radio_results) ?></p>
            <p>郵便番号：<?php echo($postal_result) ?></p>
            <p>都道府県：<?php echo($pref_result) ?></p>
            <p>住所：<?php echo($addr_result) ?></p>
            <p>商品番号：<?php echo($search_result) ?></p>
            <p>服のサイズ：<?php echo($size_result) ?></p>
            <p>服のサイズ：<?php echo($size_result) ?></p>

        </div>
    </div>
    <form action="thanks.php" method ="POST">
        <input class="ip" type="hidden" name='name' value="<?=($name)?>">
        <input class="ip" type="hidden" name='email' value="<?=($email)?>">
        <input class="ip" type="hidden" name='phone' value="<?=($tel)?>">
        <input class="ip" type="hidden" name='postal' value="<?=($postal)?>">
        <input class="ip" type="hidden" name='pref01' value="<?=($pref)?>">
        <input class="ip" type="hidden" name='addr01' value="<?=($addr)?>">
        <input class="ip" type="hidden" name='search' value="<?=($search)?>">
        <input class="ip" type="hidden" name='size' value="<?=($size)?>">
        <!-- <input type="hidden" name='content' value="<?=($content)?>"> -->
        <div class="btn">
        <button type="button" onclick="history.back()">戻る</button>
        <?php if ($name!='' && $email!='' && $tel!=''&& $postal!=''&& $pref!=''&& $addr!=''&& $search!=''&& $size!='') : ?>
            <input class="ok" type="submit" value ="OK">
        <?php endif; ?>
        </div>
    </form>


</body>
</html>