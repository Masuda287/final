<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>削除完了</h1>
    <?php
       $sql=$pdo->prepare('delete from Sing where song_id in (select song_id from Song where composer_id = ?)');
       $sql->execute([$_POST['composer_id']]);
       $sql=$pdo->prepare('delete from Song where composer_id = ?');
       $sql->execute([$_POST['composer_id']]);
       $sql=$pdo->prepare('delete from Composer where composer_id = ?');
       $sql->execute([$_POST['composer_id']]);
    ?>
    <p>作曲者情報を削除しました</p>
    <a href="composer.php" class="button is-info">作曲者一覧へ</a>
</div>
<?php require 'footer.php'; ?>