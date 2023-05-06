jQuery(document).ready(function($) {
    //点击下一页的链接(即那个a标签)
    $('.next').click(function() {
        $this = $(this);
        $this.addClass('loading').text('正在努力加载'); //给a标签加载一个loading的class属性，用来添加加载效果
        var href = $this.attr('href'); //获取下一页的链接地址
        if (href != undefined) { //如果地址存在
            $.ajax({ //发起ajax请求
                url: href,
                //请求的地址就是下一页的链接
                type: 'get',
                //请求类型是get
                error: function(request) {
                    //如果发生错误怎么处理
                },
                success: function(data) { //请求成功
                    $this.removeClass('loading').text('点击查看更多'); //移除loading属性
                    var $res = $(data).find('.post-list'); //从数据中挑出文章数据，请根据实际情况更改
                    $('postlist').append($res.fadeIn(500)); //将数据加载加进posts-loop的标签中。
                    var newhref = $(data).find('.next').attr('href'); //找出新的下一页链接
                    if (newhref != undefined) {
                        $('.next').attr('href', newhref);
                    } else {
                        $('.next').remove(); //如果没有下一页了，隐藏
                    }
                }
            });
        }
        return false;
    });
});
window.onscroll = function() {
    let percentage = document.getElementById('percentage');
    let totalH = document.body.scrollHeight || document.documentElement.scrollHeight;
    let clientH = window.innerHeight || document.documentElement.clientHeight;
    let validH = totalH - clientH;
    let scrollH = document.body.scrollTop || document.documentElement.scrollTop;
    if (scrollH == 0){
        percentage.innerHTML = '<svg t="1670852398118" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1073" width="32" height="32"><path d="M38.167273 747.054545c-8.610909 0-16.989091-3.025455-23.738182-9.30909-14.196364-13.265455-14.894545-35.141818-1.629091-49.338182L486.4 180.363636c13.265455-14.196364 37.934545-14.196364 50.967273 0l473.832727 507.810909a34.909091 34.909091 0 0 1-1.629091 49.338182c-13.963636 13.032727-36.072727 12.334545-49.338182-1.629091L512 255.534545 63.534545 735.883636c-6.749091 7.447273-16.058182 11.170909-25.367272 11.170909z" p-id="1074" fill="#8a8a8a"></path></svg>';
    }else{
        let fullWindowHeightInPercentage = Math.round((scrollH / validH) * 100);
        percentage.innerHTML = '<div style="font-size: 1.8rem;">' + fullWindowHeightInPercentage + '<span style="font-size:small;">%<span></div>';
        if (fullWindowHeightInPercentage == 0) percentage.innerHTML = '<svg t="1670852398118" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1073" width="32" height="32"><path d="M38.167273 747.054545c-8.610909 0-16.989091-3.025455-23.738182-9.30909-14.196364-13.265455-14.894545-35.141818-1.629091-49.338182L486.4 180.363636c13.265455-14.196364 37.934545-14.196364 50.967273 0l473.832727 507.810909a34.909091 34.909091 0 0 1-1.629091 49.338182c-13.963636 13.032727-36.072727 12.334545-49.338182-1.629091L512 255.534545 63.534545 735.883636c-6.749091 7.447273-16.058182 11.170909-25.367272 11.170909z" p-id="1074" fill="#8a8a8a"></path></svg>';
        if (fullWindowHeightInPercentage >= 100) percentage.innerHTML = '<svg t="1670852648630" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="839" width="32" height="32"><path d="M766.08 880.896l-226.56-111.104a34.176 34.176 0 0 1 29.888-61.44l185.792 91.264 80.192-549.12-361.216 433.408v201.408a34.112 34.112 0 0 1-68.16 0V672.64a35.072 35.072 0 0 1 8.128-23.296l340.224-408.384-545.536 283.072 128.576 66.688a35.2 35.2 0 0 1 15.296 46.592 33.152 33.152 0 0 1-44.288 15.36L122.432 555.84a35.008 35.008 0 0 1-15.936-17.024 33.856 33.856 0 0 1 14.016-45.696L870.08 104.32a35.2 35.2 0 0 1 16.192-3.904c16.704-0.32 31.104 11.52 34.112 27.904a35.392 35.392 0 0 1-0.64 16.512l-103.68 710.08a34.24 34.24 0 0 1-28.864 28.992 33.408 33.408 0 0 1-21.12-3.008z" p-id="840" fill="#8a8a8a"></path></svg>';
    }