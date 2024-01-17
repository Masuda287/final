<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>採点削除</h1>
    <?php
        echo '<form action="sing-delete-fin.php"method="post">';
        $sql=$pdo->prepare('select So.song_name,Ar.artist_name,Co.composer_name,Si.karaoke_type,Si.saiten_type,Si.score,Si.comment,Si.sing_id from Song as So join Sing as Si on So.song_id=Si.song_id join Artist as Ar on So.artist_id=Ar.artist_id join Composer as Co on So.composer_id=Co.composer_id where Si.sing_id = ? ');
        $sql->execute([$_POST['sing_id']]);
        foreach($sql as $row){
            echo '<p>楽曲名:',$row['song_name'],'</p>';
            echo '<p>',$row['artist_name'],'</p>';
            echo '<p>',$row['composer_name'],'</p>';
            echo '<p>カラオケ機種:',$row['karaoke_type'],'</p>';
            echo '<p>採点名:',$row['saiten_type'],'</p>';
            echo '<p>点数:',$row['score'],'</p>';
            echo '<p>コメント:',$row['comment'],'</p>';
        }
        echo '<p class="has-text-danger has-text-centered">削除してもよろしいですか</p><br>';
        echo '<a href="sing.php" class="button is-medium">戻る</a>';
        echo '<span class="has-text-white">______________</span>';
        echo '<input type="hidden" name="sing_id" value="',$_POST['sing_id'],'">';
        echo '<button type="submit" class="button is-info is-medium">削除</button>';
        echo '</form>';
    ?>
</div>
<?php require 'footer.php'; ?>