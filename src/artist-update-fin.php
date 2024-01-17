<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('update Artist set artist_name = ? where artist_id =?');
     $sql->execute([$_POST['artist_name'],$_POST['artist_id']]);
?>
<div class="has-text-centered">
    <h1>アーティスト更新完了</h1>
    <p>アーティスト情報を更新しました</p>
    <a href="artist.php" class="button is-info is-medium">アーティスト一覧へ</a>
</div>
<?php require 'footer.php'; ?>