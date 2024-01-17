<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>アーティスト削除</h1>
    <?php
        echo '<form action="artist-delete-fin.php"method="post">';
        echo 'アーティスト名:',$_POST['artist_name'];
        echo '<p class="has-text-danger has-text-centered">削除してもよろしいですか</p><br>';
        echo '<a href="artist.php" class="button is-medium">戻る</a>';
        echo '<span class="has-text-white">______________</span>';
        echo '<input type="hidden" name="artist_id" value="',$_POST['artist_id'],'">';
        echo '<button type="submit" class="button is-info is-medium">削除</button>';
        echo '</form>';
    ?>
</div>
<?php require 'footer.php'; ?>