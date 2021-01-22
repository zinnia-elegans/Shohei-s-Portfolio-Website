<?php
/*
Template Name: Confirm
*/
?>
<?php get_header(); ?>

<div class="inner confirm">
    <?php

    $company = $_POST['company'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $contact = $_POST['contact'];

    echo "
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset='UTF-8'>
    <title>Insert title here</title>
    </head>
    <body>
    貴社名：$company
    </br>
    お名前：$name
    </br>
    メールアドレス：$mail
    </br>
    電話番号：$tel
    </br>
    お問い合わせ内容
    </br>
    $contact
    </br>
    </br>
    <form action='complete.php' method='post'>
    <input type='hidden' name='company' value='$company'>
    <input type='hidden' name='name' value='$name'>
    <input type='hidden' name='mail' value='$mail'>
    <input type='hidden' name='tel' value='$tel'>
    <input type='hidden' name='contact' value='$contact'>
    <input type='button' onclick='history.back()' value='戻る''>
    <input type='submit' value='確認'>
    </form>
    </body>
    </html>";

    ?>

</div>

<?php get_footer(); ?>