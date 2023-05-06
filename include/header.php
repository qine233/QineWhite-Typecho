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
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/remixicon.css'); ?>">
    <script src="<?php $this->options->themeUrl('style/js/jquery.min.js'); ?>" ></script>
    <script src="<?php $this->options->themeUrl('style/js/action.js'); ?>" ></script>
    <title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
</head>
<body>

<header class="header_side">
    <div class="header_side_left">
        <h4 class="post-title_side" itemprop="name headline">你好！</h4>
        <img class="logo" src="<?php $this->options->settingsLogo(); ?>">
        <ul  id="nav_menu">
            <li><a style="color: #0047ff;" href="/index.php" title="主页"><span class="iconfont homeSvg"><i class="ri-window-line""></i></span></a></li>
            <li><a style="color: #0047ff;" href="http://localhost/index.php/talk233.html" title="时光"><span class="iconfont homeSvg"><i class="ri-chat-1-line"></i></span></a></li>
            <li><a style="color: #0047ff;" href="http://localhost/index.php/archives.html" title="归档"><span class="iconfont homeSvg"><i class="ri-archive-drawer-line"></i></span></a></li>
            <li><a style="color: #0047ff;" href="http://localhost/index.php/friend.html" title="友链"><span class="iconfont homeSvg"><i class="ri-send-plane-2-line"></i></span></a></li>
            <li><a style="color: #0047ff;" href="http://localhost/index.php/tellme.html" title="留言"><span class="iconfont homeSvg"><i class="ri-quill-pen-line"></i></span></a></li>
            <li><a style="color: #0047ff;" href="http://localhost/index.php/abouts.html" title="关于"><span class="iconfont homeSvg"><i class="ri-user-smile-line"></i></span></a></li>
        </ul>
        <div id="percentage"></div>
    </div>

</header>