<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>楽曲更新</h1>
    <form action="song-update-fin.php"method="post"> 
        <?php
            echo '<input type="hidden" name="song_id" value="',$_POST["song_id"],'">';
            echo '<p class="has-text-centered">楽曲名:<input type="text" name="song_name" value="',$_POST["song_name"],'" required></p>';
        ?>
        <p class="has-text-centered">アーティスト:
        <?php
            echo '<select name="artist_id" required>';
            $sql=$pdo->query('select * from Artist');
            foreach($sql as $row){
                echo '<option value="',$row['artist_id'],'">',$row['artist_name'],'</option>';
            }
            echo '</select></p>';
            echo '<p class="has-text-centered">作曲者:';
            echo '<select name="composer_id" required>';
            $sql=$pdo->query('select * from Composer');
            foreach($sql as $row){
                echo '<option value="',$row['composer_id'],'">',$row['composer_name'],'</option>';
            }
            echo '</select></p>';
        ?>
        <p>ジャンル:
        <select name="genre" required>
            <option value="ポップス">ポップス</option>
            <option value="ロック">ロック</option>
            <option value="アニソン">アニソン</option>
            <option value="ボカロ">ボカロ</option>
            <option value="バーチャル">バーチャル</option>
        </select>
        </p>
        <p?>
        <a href="song.php" class="button is-medium">戻る</a>
        <span class="has-text-white">______________</span>
        <button type="submit" class="button is-info is-medium">確認</button>
        </p>
    </form>
</div>
<?php require 'footer.php'; ?>