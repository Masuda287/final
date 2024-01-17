<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>アーティスト一覧</h1>
    <table>
        <tr><td>アーティスト名</td><td>更新</td><td>削除</td></tr>
        <?php
        $sql=$pdo->query('select * from Artist');
        foreach($sql as $row){
            echo '<tr><td>',$row['artist_name'],'</td>';
            echo '<td>';
            echo '<form action="artist-update.php" method="post">';
            echo '<input type="hidden" name="artist_id" value="',$row['artist_id'],'">';
            echo '<input type="hidden" name="artist_name" value="',$row['artist_name'],'">';
            echo '<button type="submit">更新</button></form></td>';
            echo '<td>';
            echo '<form action="artist-delete.php" method="post">';
            echo '<input type="hidden" name="artist_id" value="',$row['artist_id'],'">';
            echo '<input type="hidden" name="artist_name" value="',$row['artist_name'],'">';
            echo '<button type="submit">削除</button></form></td>';
            echo '<td>';
        }
        ?>
    </table>
    <p>
    <a href="top.php" class="button is-medium">戻る</a>
    <span class="has-text-white">______________</span>
    <a href="artist-new.php" class="button is-info is-medium">新規登録</a>
    </p>
</div>
<?php require 'footer.php'; ?>