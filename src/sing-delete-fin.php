<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>採点履歴削除完了</h1>
    <?php

       $sql=$pdo->prepare('delete from Sing where sing_id = ?');
       $sql->execute([$_POST['sing_id']]);
    ?>
    <p>採点情報を削除しました</p>
    <a href="sing.php" class="button is-info">採点履歴一覧へ</a>
</div>
<?php require 'footer.php'; ?>