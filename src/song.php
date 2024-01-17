<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>楽曲一覧</h1>
    <table>
        <tr><td>楽曲名</td><td>アーティスト</td><td>作曲者</td><td>ジャンル</td><td>更新</td><td>削除</td></tr>
        <?php
        $sql=$pdo->query('select So.song_id,So.song_name,Ar.artist_name,Co.composer_name,So.genre from Song as So join Artist as Ar on So.artist_id=Ar.artist_id join Composer as Co on So.composer_id=Co.composer_id');
        foreach($sql as $row){
            echo '<tr><td>',$row['song_name'],'</td>';
            echo '<td>',$row['artist_name'],'</td>';
            echo '<td>',$row['composer_name'],'</td>';
            echo '<td>',$row['genre'],'</td>';
            echo '<td>';
            echo '<form action="song-update.php" method="post">';
            echo '<input type="hidden" name="song_id" value="',$row['song_id'],'">';
            echo '<input type="hidden" name="song_name" value="',$row['song_name'],'">';
            echo '<button type="submit">更新</button></form></td>';
            echo '<td>';
            echo '<form action="song-delete.php" method="post">';
            echo '<input type="hidden" name="song_id" value="',$row['song_id'],'">';
            echo '<input type="hidden" name="song_name" value="',$row['song_name'],'">';
            echo '<button type="submit">削除</button></form></td>';
            echo '<td>';
        }
        ?>
    </table>
    <p>
    <a href="top.php" class="button is-medium">戻る</a>
    <span class="has-text-white">______________</span>
    <a href="song-new.php" class="button is-info is-medium">新規登録</a>
    </p>
</div>
<?php require 'footer.php'; ?>