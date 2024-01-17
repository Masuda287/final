<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>作曲者更新</h1>
    <?php
        echo '<form action="composer-update-fin.php"method="post">';
        echo '<p>作曲者名:';
        echo '<input type="text" name="composer_name" value="',$_POST['composer_name'],'"required></p>';
        echo '<br>';
        echo '<a href="composer.php" class="button is-medium">戻る</a>';
        echo '<span class="has-text-white">______________</span>';
        echo '<input type="hidden" name="composer_id" value="',$_POST['composer_id'],'">';
        echo '<button type="submit" class="button is-info is-medium">更新</button>';
        echo '</form>';
    ?>
</div>
<?php require 'footer.php'; ?>