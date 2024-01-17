<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>アーティスト更新</h1>
    <?php
        echo '<form action="artist-update-fin.php"method="post">';
        echo '<p>アーティスト名:';
        echo '<input type="text" name="artist_name" value="',$_POST['artist_name'],'"required></p>';
        echo '<br>';
        echo '<a href="artist.php" class="button is-medium">戻る</a>';
        echo '<span class="has-text-white">______________</span>';
        echo '<input type="hidden" name="artist_id" value="',$_POST['artist_id'],'">';
        echo '<button type="submit" class="button is-info is-medium">更新</button>';
        echo '</form>';
    ?>
</div>
<?php require 'footer.php'; ?>