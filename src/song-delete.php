<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>楽曲削除</h1>
    <?php
        echo '<form action="song-delete-fin.php"method="post">';
        echo '<p>楽曲名:',$_POST['song_name'],'</p>';
        $sql=$pdo->prepare('select Ar.artist_name,Co.composer_name,So.genre from Song as So join Artist as Ar on So.artist_id=Ar.artist_id join Composer as Co on So.composer_id=Co.composer_id where song_id = ? ');
        $sql->execute([$_POST['song_id']]);
        foreach($sql as $row){
            echo '<p>アーティスト:',$row['artist_name'],'</p>';
            echo '<p>作曲者:',$row['composer_name'],'</p>';
            echo '<p>ジャンル:',$row['genre'],'</p>';
        }
        echo '<p class="has-text-danger has-text-centered">削除してもよろしいですか</p><br>';
        echo '<a href="song.php" class="button is-medium">戻る</a>';
        echo '<span class="has-text-white">______________</span>';
        echo '<input type="hidden" name="song_id" value="',$_POST['song_id'],'">';
        echo '<button type="submit" class="button is-info is-medium">削除</button>';
        echo '</form>';
    ?>
</div>
<?php require 'footer.php'; ?>