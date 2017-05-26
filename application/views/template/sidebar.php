<div class="items-list mCustomScrollbar _mCS_1" style="position: relative; top: 45px;">
    <div class="inner">
        <header>
            <h3>Search Results</h3>
        </header>
        <ul class="results list">
            <?php foreach ($info as $key => $value): ?>
            <li>
                <div class="item" id="<?= $value['info_id']; ?>">
                    <a href="test.php" class="image loaded">
                        <div class="inner">
                            <img src="<?= base_url().'uploads/'.$value['pictures']; ?>" alt="" class="mCS_img_loaded">
                        </div>
                    </a>
                    <div class="wrapper">
                        <a href="<?= base_url("pages/display/{$value['info_id']}"); ?>">
                            <h3><?= $value['name']; ?></h3>
                        </a>
                        <figure><?= $value['address']; ?></figure>
                        <div class="info">
                            <div class="type">
                                <span><?= $value['tags']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>