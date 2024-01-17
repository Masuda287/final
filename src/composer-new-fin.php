<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('insert into Composer values(null,?)');
     $sql->execute([$_POST['composer_name']]);
?>
<div class="has-text-centered">
    <h1>作曲者登録完了</h1>
    <p>作曲者情報を登録しました</p>
    <a href="composer.php" class="button is-info is-medium">作曲者一覧へ</a>
</div>
<?php require 'footer.php'; ?>