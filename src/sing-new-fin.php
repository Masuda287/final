<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('insert into Sing values(null,?,?,?,?,?)');
     $sql->execute([$_POST['song_id'],$_POST['karaoke_type'],$_POST['saiten_type'],$_POST['score'],$_POST['comment']]);
?>
<div class="has-text-centered">
    <h1>採点登録完了</h1>
    <p>採点情報を登録しました</p>
    <a href="sing.php" class="button is-info is-medium">楽曲一覧へ</a>
</div>
<?php require 'footer.php'; ?>