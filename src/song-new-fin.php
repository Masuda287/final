<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('insert into Song values(null,?,?,?,?)');
     $sql->execute([$_POST['song_name'],$_POST['artist_id'],$_POST['composer_id'],$_POST['genre']]);
?>
<div class="has-text-centered">
    <h1>楽曲登録完了</h1>
    <p>楽曲情報を登録しました</p>
    <a href="song.php" class="button is-info is-medium">楽曲一覧へ</a>
</div>
<?php require 'footer.php'; ?>