<?php $this->need('header.php'); ?>

    <div class="postl">
        <a href="#" onclick="javascript:history.back(-1);">
            <div class="titlebox">
                <?php $this->title(); ?>
            </div>
        </a>
        <div class="timebox">
            <time datetime="<?php $this->date('c'); ?>">发布于: <?php $this->date(); ?></time>
        </div>
    </div>
    <div class="posta">
        <?php $this->content(); ?>
    </div>

<?php $this->need('footer.php'); ?>