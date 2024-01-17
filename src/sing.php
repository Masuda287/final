<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>採点一覧</h1>
    <table>
        <tr><td>楽曲名</td><td>アーティスト</td><td>作曲</td><td>カラオケ機種</td><td>採点名</td><td>点数</td><td>コメント</td><td>削除</td></tr>
        <?php
        $sql=$pdo->query('select So.song_name,Ar.artist_name,Co.composer_name,Si.karaoke_type,Si.saiten_type,Si.score,Si.comment,Si.sing_id from Song as So join Sing as Si on So.song_id=Si.song_id join Artist as Ar on So.artist_id=Ar.artist_id join Composer as Co on So.composer_id=Co.composer_id');
        foreach($sql as $row){
            echo '<tr><td>',$row['song_name'],'</td>';
            echo '<td>',$row['artist_name'],'</td>';
            echo '<td>',$row['composer_name'],'</td>';
            echo '<td>',$row['karaoke_type'],'</td>';
            echo '<td>',$row['saiten_type'],'</td>';
            echo '<td>',$row['score'],'</td>';
            echo '<td>',$row['comment'],'</td>';
            echo '<td>';
            echo '<form action="sing-delete.php" method="post">';
            echo '<input type="hidden" name="sing_id" value="',$row['sing_id'],'">';
            echo '<button type="submit">削除</button></form></td>';
            echo '<td>';
        }
        ?>
    </table>
    <p>
    <a href="top.php" class="button is-medium">戻る</a>
    <span class="has-text-white">______________</span>
    <a href="sing-new.php" class="button is-info is-medium">新規登録</a>
    </p>
</div>
<?php require 'footer.php'; ?>