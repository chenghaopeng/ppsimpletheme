<!DOCTYPE html>
<html topmargin="0" oncontextmenu="return false" ondragstart="return false" onselectstart ="return false" onselect="document.selection.empty()" oncopy="document.selection.empty()" onbeforecopy="return false" onmouseup="document.selection.empty()">
	<head>
        <meta charset="<?php $this->options->charset(); ?>">
        <title><?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/ppst.css'); ?>">
        <script type="text/javascript"
            src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?   config=TeX-AMS-MML_HTMLorMML">
        </script>
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({
                extensions: ["tex2jax.js"],
                jax: ["input/TeX", "output/HTML-CSS"],
                tex2jax: {
                    inlineMath: [ ['$','$'], ["\\(","\\)"] ],
                    displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
                    processEscapes: true
                },
                "HTML-CSS": { availableFonts: ["TeX"] }
            });
        </script>

        <script src='<?php $this->options->themeUrl('/js/jquery-1.8.3.min.js'); ?>'></script> 
        <script>
            $(window).scroll(function(){
                var scrollTo = $(window).scrollTop(),
                docHeight = $(document).height(),
                windowHeight = $(window).height();
                scrollPercent = (scrollTo / (docHeight-windowHeight)) * 100;
                scrollPercent = scrollPercent.toFixed(1);
                var a=document.getElementById("scrollprogressbox");
                a.style.width=scrollPercent+'%';
            });
        </script>
        
        <?php
            function isMobile() { 
              if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
                return true;
              } 
              if (isset($_SERVER['HTTP_VIA'])) { 
                return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
              } 
              if (isset($_SERVER['HTTP_USER_AGENT'])) {
                $clientkeywords = array('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','MicroMessenger'); 
                if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                  return true;
                } 
              } 
              if (isset ($_SERVER['HTTP_ACCEPT'])) { 
                if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                  return true;
                } 
              } 
              return false;
            }
            if (isMobile()):
                echo '<meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8" />';
            else:
                echo '<meta name="viewport" content="width=device-width,initial-scale=1">';
            endif;
        ?>
        
        <?php $this->header(); ?>
    </head>
    <body>
        <div id="guidebox">
            <ol class="guidelist">
                <li>
                    <a href="<?php $this->options->siteUrl(); ?>">首页</a>
                </li>
                <li>
                    <a href="http://chper.cn/" target="_blank">主站</a>
                </li>
                <li>
                    <a href="http://blog.chper.cn/friends.html">朋友</a>
                </li>
                <li>
                    <a href="http://blog.chper.cn/me.html">关于</a>
                </li>
                <li>
                    <a href="/admin" target="_blank">后台</a>
                </li>
                <!--
                <li>
                    <a href=#top>到顶</a>
                </li>
                <li>
                    <a href="#bottom">到底</a>
                </li>
                <?php if ($this->is('post')) : ?>
                    <li><?php $this->thePrev('%s',''); ?></li>
                    <li><?php $this->theNext('%s',''); ?></li>
                <?php endif; ?>
                -->
            </ol>
            <div id="searchbox">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('  搜索'); ?>" autocomplete="off" />
                </form>
            </div>
        </div>
        <div id="infobox">
            <img src="<?php $this->options->themeUrl('/img/logo.jpg') ?>" \>
            <p>鹏鹏</p>
        </div>
        <div id="bigbox">