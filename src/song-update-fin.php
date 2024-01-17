<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('update song set song_name = ?,artist_id=?,composer_id=?,genre=? where composer_id =?');
     $sql->execute([$_POST['song_name'],$_POST['artist_id'],$_POST['composer_id'],$_POST['genre'],$_POST['song_id']]);
?>
<div class="has-text-centered">
    <h1>楽曲更新完了</h1>
    <p>楽曲情報を更新しました</p>
    <a href="song.php" class="button is-info is-medium">楽曲一覧へ</a>
</div>
<?php require 'footer.php'; ?>