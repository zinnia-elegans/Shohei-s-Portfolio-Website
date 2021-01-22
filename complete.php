<?php
/*
Template Name: Complete
*/
?>
<?php get_header(); ?>

<div class="complete">
    <h2 class="">完了画面</h2>
    <h4>送信完了いたしました。</h4>
    <p>この度は、お問い合わせ頂き誠にありがとうございます。</p>
    <p>以下の内容でお問い合わせを受け付けました。</p>
    <div class="table-responsive">
        <table class="table table-bordered  table-hover">
            <tr>
                <th>お名前</th>
                <td><?php
                    if (isset($_GET['name']) && $_GET['name']) echo $_GET['name'];
                    ?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?php
                    if (isset($_GET['email']) && $_GET['email']) echo $_GET['email'];
                    ?></td>
            </tr>
            <tr>
                <th>お電話番号</th>
                <td><?php
                    if (isset($_GET['tel']) && $_GET['tel']) echo $_GET['tel'];
                    ?></td>
            </tr>
            <tr>
                <th>件名</th>
                <td><?php
                    if (isset($_GET['subject']) && $_GET['subject']) echo $_GET['subject'];
                    ?></td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td><?php
                    if (isset($_GET['body']) && $_GET['body']) echo $_GET['body'];
                    ?></td>
            </tr>
        </table>
    </div>
</div>

<?php get_footer(); ?>