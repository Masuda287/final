<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
     $sql=$pdo->prepare('insert into Artist values(null,?)');
     $sql->execute([$_POST['artist_name']]);
?>
<div class="has-text-centered">
    <h1>アーティスト登録完了</h1>
    <p>アーティスト情報を登録しました</p>
    <a href="artist.php" class="button is-info is-medium">アーティスト一覧へ</a>
</div>
<?php require 'footer.php'; ?>