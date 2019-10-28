<div>
    <?php if($infor): ?>
        <img src="<?= $infor['image']; ?>" alt="">
        <p>Name: <?=$infor['name']; ?></p>
    <?php else: ?>
        <p>Not Found Data</p>
    <?php endif; ?>
</div>