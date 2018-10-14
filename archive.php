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

    <div class="postl">
        <a href="<?php $this->options->siteUrl(); ?>">
            <div class="titlebox">
                <?php if ($this->have()) : ?>
                    <?php $this->archiveTitle(array(
                            'category'  =>  _t('分类 %s 下的文章'),
                            'search'    =>  _t('包含关键字 %s 的文章'),
                            'tag'       =>  _t('标签 %s 下的文章'),
                            'author'    =>  _t('%s 发布的文章')
                        ), '', ''); ?>
                <?php else : ?>
                    <?php $this->archiveTitle(array(
                            'category'  =>  _t('没有在分类 %s 下的文章'),
                            'search'    =>  _t('没有包含关键字 %s 的文章'),
                            'tag'       =>  _t('没有在标签 %s 下的文章'),
                            'author'    =>  _t('没有 %s 发布的文章')
                        ), '', ''); ?>
                <?php endif; ?>
            </div>
        </a>
        <div class="timebox">
            <time>检索结果</time>
        </div>
    </div>
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