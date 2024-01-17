<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>完了削除</h1>
    <?php
       $sql=$pdo->prepare('delete from Sing where song_id in (select song_id from Song where artist_id = ?)');
       $sql->execute([$_POST['artist_id']]);
       $sql=$pdo->prepare('delete from Song where artist_id = ?');
       $sql->execute([$_POST['artist_id']]);
       $sql=$pdo->prepare('delete from Artist where artist_id = ?');
       $sql->execute([$_POST['artist_id']]);
    ?>
    <p>アーティスト情報を削除しました</p>
    <a href="artist.php" class="button is-info">アーティスト一覧へ</a>
</div>
<?php require 'footer.php'; ?>