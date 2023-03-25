<?php
/**
 * “ 青益的一款简白主题... ”
 * @package QINEWHITE
 * @author QINE
 * @link https://www.idkzr.com/
 */
?>
<?php $this->need('include/header.php'); ?>
<container>
    <postList>
        <?php while ($this->next()): ?>
            <div class="post-list">
                <div class="post" style="
                    object-fit: cover;
                    background-position-x: center;
                    background-position-y: center;
                    background-size: cover;">


                </div>
                <h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>


                <div class="entry_text">

                    <p>

                        <?php $this->excerpt(160, '...'); ?>
                    </p>
                </div>
                <span class="post_index-more"> <?php $this->date('Y年n月d日'); ?></span>

                <span class="post_index-more_cate">  <?php $this->commentsNum('%d 评论'); ?></span>  </div>
        <?php endwhile; ?>
        <div class="nextWide">
            <?php $this->pageLink('点击查看更多','next'); ?>
        </div>
    </postList>
</container>

</body>