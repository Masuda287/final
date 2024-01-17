<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<div class="has-text-centered">
    <h1>作曲者登録</h1>
    <form action="composer-new-fin.php"method="post">
        <p class="has-text-centered">作曲者名:<input type="text" name="composer_name" required></p>
        <br>
        <a href="composer.php" class="button is-medium">戻る</a>
        <span class="has-text-white">______________</span>
        <button type="submit" class="button is-info is-medium">確認</button>
    </form>
</div>
<?php require 'footer.php'; ?>