<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('update Composer set composer_name = ? where composer_id =?');
     $sql->execute([$_POST['composer_name'],$_POST['composer_id']]);
?>
<div class="has-text-centered">
    <h1>作曲者更新完了</h1>
    <p>作曲者情報を更新しました</p>
    <a href="composer.php" class="button is-info is-medium">作曲者一覧へ</a>
</div>
<?php require 'footer.php'; ?>