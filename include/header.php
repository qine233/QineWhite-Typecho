<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
    <meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/reset.css'); ?>">
    <title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
</head>
<body>
<header>
    <h4 class="post-title" itemprop="name headline"><?php $this->options->title(); ?></h4>
    <h4 class="post-title" ><a style="color: #235bf3" href="<?php $this->options->siteUrl(); ?>">Home</a></h4>
</header>
<div class="header_side">
    <div class="header_side_left">
        <h4 class="post-title_side" itemprop="name headline">你好！</h4>
        <ul  id="nav_menu">
            <li><a style="color: rgba(0,0,0)" href="<?php $this->options->siteUrl(); ?>">Home</a></li>
            <?php $this->widget('Widget_Contents_Page_List')
                ->parse('<li><a style="color: rgba(0,0,0)" href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>
</div>