<?php

require_once __DIR__ . '/../common/functions.php';

// セッション開始
session_start();

$current_user = '';
// $users = array('');

if (isset($_SESSION['current_user'])) {
    $current_user = $_SESSION['current_user'];
}

//$photos = find_photos_all()  inquiry
?>

<!DOCTYPE html>
<html lang="ja">
<?php include_once __DIR__ . '/../common/_head.html' ?>

<body>
    <?php include_once __DIR__ . '/../common/_header.php' ?>
    <main class="article_index wrapper">
        <div class="grid" data-masonry='{"columnWidth": 270, "itemSelector": ".grid_item", "isFitWidth": true}'>
            <?php if (!empty($users)) : ?>
                <?php foreach ($users as $user) : ?>
                    <div class="grid_item">
                        <a href="show.php?id=<?= h($user['id']) ?>">
                            <img src="../images/<?= h($user['image']) ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
        <a href="upload.php" class="add_button">
            <i class="fa-solid fa-plus"></i>
        </a>
    </main>

    <?php include_once __DIR__ . '/../common/_footer.html' ?>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</body>

</html>
