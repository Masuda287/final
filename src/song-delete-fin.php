<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>楽曲削除完了</h1>
    <?php
       
       $sql=$pdo->prepare('delete from Sing where song_id = ?');
       $sql->execute([$_POST['song_id']]);
       $sql=$pdo->prepare('delete from Song where song_id = ?');
       $sql->execute([$_POST['song_id']]);
    ?>
    <p>楽曲情報を削除しました</p>
    <a href="song.php" class="button is-info">楽曲一覧へ</a>
</div>
<?php require 'footer.php'; ?>