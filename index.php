<?php
/**
 * PP的简单主题
 * 
 * @package PP Simple Theme
 * @author PP
 * @version 1.0
 * @link http://chper.cn
 */
 ?>
 
<?php $this->need('header.php'); ?>

    <?php while($this->next()): ?>
    <div class="postl">
        <a href="<?php $this->permalink() ?>">
            <div class="titlebox">
                <?php $this->title(); ?>
            </div>
        </a>
        <div class="timebox">
        <time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
        </div>
    </div>
    <?php endwhile; ?>
    <div class="page-navigator-box">
        <?php $this->pageNav('<', '>'); ?>
    </div>

<?php $this->need('footer.php'); ?>