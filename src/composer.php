<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>作曲者一覧</h1>
    <table>
        <tr><td>作曲者名</td><td>更新</td><td>削除</td></tr>
        <?php
        $sql=$pdo->query('select * from Composer');
        foreach($sql as $row){
            echo '<tr><td>',$row['composer_name'],'</td>';
            echo '<td>';
            echo '<form action="composer-update.php" method="post">';
            echo '<input type="hidden" name="composer_id" value="',$row['composer_id'],'">';
            echo '<input type="hidden" name="composer_name" value="',$row['composer_name'],'">';
            echo '<button type="submit">更新</button></form></td>';
            echo '<td>';
            echo '<form action="composer-delete.php" method="post">';
            echo '<input type="hidden" name="composer_id" value="',$row['composer_id'],'">';
            echo '<input type="hidden" name="composer_name" value="',$row['composer_name'],'">';
            echo '<button type="submit">削除</button></form></td>';
            echo '<td>';
        }
        ?>
    </table>
    <p>
    <a href="top.php" class="button is-medium">戻る</a>
    <span class="has-text-white">______________</span>
    <a href="composer-new.php" class="button is-info is-medium">新規登録</a>
    </p>
</div>
<?php require 'footer.php'; ?>