<?php
require_once dirname(__FILE__) ."/wechat/Wxapi.class.php";
$signPackage = Wxapi::getSignPackage();
$g_share_title = isset($share_title)?$share_title:'装逼神器大全';
$g_share_desc = isset($share_desc)?$share_desc:'总有一款适合您,由怀仁早晚报提供';
$g_share_link = isset($share_link)?$share_link:'http://t.kakaapp.com/';
$g_share_imgUrl = isset($share_imgUrl)?$share_imgUrl:'http://t.kakaapp.com/zb.jpg';
$g_share_title_friend = isset($share_title_friend)?$share_title_friend:'';
?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config({
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo'
        ]
    });
    /*
     * 注意：
     * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
     * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
     * 3. 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
     *
     * 如有问题请通过以下渠道反馈：
     * 邮箱地址：weixin-open@qq.com
     * 邮件主题：【微信JS-SDK反馈】具体问题
     * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
     */
    wx.ready(function () {
        // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
        wx.checkJsApi({
            jsApiList: [
                'getNetworkType',
                'previewImage',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo'
            ],
            success: function (res) {
                // alert(JSON.stringify(res));
            }
        });

        var shareData = {
            title: '<?php echo $g_share_title;?>',
            desc: '<?php echo $g_share_desc;?>',
            link: '<?php echo $g_share_link;?>',
            imgUrl: '<?php echo $g_share_imgUrl;?>',

            trigger: function (res) {
                //alert('用户点击发送给朋友');
            },
            success: function (res) {
                //alert('已分享');
            },
            cancel: function (res) {
                //alert('已取消');
            },
            fail: function (res) {
                //alert(JSON.stringify(res));
            }
        };

        var shareDataFriend = {
            title: '<?php echo $g_share_title_friend?$g_share_title_friend:$g_share_title;?>',
            desc: '<?php echo $g_share_desc;?>',
            link: '<?php echo $g_share_link;?>',
            imgUrl: '<?php echo $g_share_imgUrl;?>',

            trigger: function (res) {
                //alert('用户点击发送给朋友');
            },
            success: function (res) {
                //alert('已分享');
            },
            cancel: function (res) {
                //alert('已取消');
            },
            fail: function (res) {
                //alert(JSON.stringify(res));
            }
        };
        wx.onMenuShareAppMessage(shareData);
        wx.onMenuShareTimeline(shareDataFriend);
        wx.onMenuShareQQ(shareData);
        wx.onMenuShareWeibo(shareData);
    });
    wx.error(function (res) {
        // alert(res.errMsg);
    });
</script>