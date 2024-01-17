<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>採点登録</h1>
    <form action="sing-new-fin.php"method="post"> 
        <p class="has-text-centered">楽曲:
        <?php
            echo '<select name="song_id" required>';
            $sql=$pdo->query('select song_id,song_name from Song');
            foreach($sql as $row){
                echo '<option value="',$row['song_id'],'">',$row['song_name'],'</option>';
            }
            echo '</select></p>';
        ?>
        <p>カラオケ機種:
        <select name="karaoke_type" required>
            <option value="livedam studium">livedam studium</option>
            <option value="livedam ai">livedam ai</option>
            <option value="joysound maxgo">joysound maxgo</option>
            <option value="joysound X1">joysound X1</option>
        </select>
        </p>
        <p>採点名:
        <select name="saiten_type" required>
            <option value="精密採点DXG">精密採点DXG</option>
            <option value="精密採点Ai">精密採点Ai</option>
            <option value="分析採点マスター">分析採点マスター</option>
            <option value="分析採点Ai+">分析採点Ai+</option>
        </select>
        </p>
        <p class="has-text-centered">点数:<input type="num" name="score" required></p>
        <p class="has-text-centered">コメント:<input type="text" name="comment" ></p>
        <p>
        <a href="sing.php" class="button is-medium">戻る</a>
        <span class="has-text-white">______________</span>
        <button type="submit" class="button is-info is-medium">確認</button>
        </p>
    </form>
</div>
<?php require 'footer.php'; ?>