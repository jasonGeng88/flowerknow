<?php
ini_set('date.timezone','Asia/Shanghai');
require_once "php/jssdk.php";
//error_reporting(E_ERROR);
$jssdk = new JSSDK("wx2ca3a4d0c5f74f6d", "16ab47760af2be2ad774c8b2cdaae68b");
$signPackage = $jssdk->GetSignPackage();

// require_once "WxpayAPI/lib/WxPay.Api.php";
// require_once "WxpayAPI/example/WxPay.JsApiPay.php";
// require_once 'log.php';
// //①、获取用户openid
// $tools = new JsApiPay();
// $openId = $tools->GetOpenid();
// // echo "111";
// // var_dump($openId);die;
// //②、统一下单
// $input = new WxPayUnifiedOrder();
// $input->SetBody("test");
// $input->SetAttach("test");
// $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
// $input->SetTotal_fee("1");
// $input->SetTime_start(date("YmdHis"));
// $input->SetTime_expire(date("YmdHis", time() + 600));
// $input->SetGoods_tag("test");
// $input->SetNotify_url("http://paysdk.weixin.qq.com/example/notify.php");
// $input->SetTrade_type("JSAPI");
// $input->SetOpenid($openId);
// $order = WxPayApi::unifiedOrder($input);
// var_dump($order);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>花知道</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="__PUBLIC__/Mobile/js/wxplant/wx.config.js"></script> -->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/idangerous-swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="../css/custom.min.css">

    <!-- Demo styles -->
</head>
<body>
    <audio id="a1" autoplay="" loop="loop" src="audio/bg.mp3"></audio>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="1">
                    <a class="arrow">
                        <img src="img/icon.png">
                    </a>
                   <img src="img/nm001.jpg">
                </div>
                <div class="animation-word">
                    <!-- <img src="img/1.png" /> -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="2">
                    <a class="arrow">
                        <img src="img/icon.png">
                    </a>
                   <img src="img/nm002.jpg">
                </div>
                <div class="animation-word">
                    <img src="img/2.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="3">
                    <a class="arrow">
                        <img src="img/icon.png">
                    </a>
                   <img src="img/nm003.jpg">
                </div>
                <div class="animation-word">
                    <img src="img/3.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="4">
                    <a class="arrow">
                        <img src="img/icon.png">
                    </a>
                   <img src="img/nm004.jpg">
                </div>
                <div class="animation-word">
                    <img src="img/4.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="5">
                    <a class="arrow">
                        <img src="img/icon.png">
                    </a>
                   <img src="img/nm005.jpg">
                </div>
                <div class="animation-word">
                    <img src="img/5.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="6">
                    <a class="arrow">
                        <img src="img/icon.png">
                    </a>
                   <img src="img/nm006.jpg">
                </div>
                <div class="animation-word">
                    <img src="img/6.png" />
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="7">
                   <img src="img/8.jpg">
                   <form action="WxpayAPI/example/test.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">手机号码</label>
                        <input type="tel" class="form-control" id="phone" placeholder="">
                        <div class="error"></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ta的姓名</label>
                        <input type="text" class="form-control" id="username" placeholder="">
                        <div class="error"></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ta的手机号码</label>
                        <input type="tel" class="form-control" id="taphone" placeholder="">
                        <div class="error"></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Ta的地址</label>
                        <input type="text" class="form-control" id="address" placeholder="">
                        <div class="error"></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">建议配送时间</label>
                        <input type="date" class="form-control" id="datetime" placeholder="">
                        <div class="error"></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">你想对T说的一个字</label>
                        <input type="text" class="form-control" id="word" placeholder="">
                        <div class="error"></div>
                      </div>    
                      <button type="button" class="btn btn-default submit">提交</button>
                    </form>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-xs-12 pic" _se="8">
                   <img src="img/8.jpg">
                   <div class="prewxpay">
                        <p>应付总金额    ￥88</p>
                        <div class="line"></div>
                        <div class="wxinfo">
                            <img src="img/weixin.png">
                            <span>微信支付</span>
                        </div>
                        <div class="line"></div>
                        <button type="button" class="btn btn-default">确定</button>
                   </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>

    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <!-- Swiper JS -->
    <script src="../bower_components/idangerous-swiper/dist/js/swiper.min.js"></script>
    <!-- <script src="../dist/flower_know.min.js"></script> -->
    <!-- <script src="js/wxpay.js"></script> -->
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        /*
        * 注意：
        * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
        * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
        * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
        *
        * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
        * 邮箱地址：weixin-open@qq.com
        * 邮件主题：【微信JS-SDK反馈】具体问题
        * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
        */
        wx.config({
        debug: true,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
          // wx.getLocation,wx.getNetworkType
        ]
        });
        wx.ready(function () {
        // 在这里调用 API
            wx.chooseWXPay({
                timestamp: <?php echo $signPackage["timestamp"];?>, // 支付签名时间戳，注意微信jssdk中的所有使用timestamp字段均为小写。但最新版的支付后台生成签名使用的timeStamp字段名需大写其中的S字符
                nonceStr: '<?php echo $signPackage["nonceStr"];?>', // 支付签名随机串，不长于 32 位
                package: 'wx201507092033317e662190be0744961347', // 统一支付接口返回的prepay_id参数值，提交格式如：prepay_id=***）
                signType: 'SHA1', // 签名方式，默认为'SHA1'，使用新版支付需传入'MD5'
                paySign: '<?php echo $signPackage["signature"];?>', // 支付签名
                success: function (res) {
                    console.log("pay success!");
                    // 支付成功后的回调函数
                },
                error: function (res) {
                    console.log("pay error!");
                    // 支付成功后的回调函数
                },
            });
            wx.getLocation({
                success: function (res) {
                    var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                    var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                    var speed = res.speed; // 速度，以米/每秒计
                    var accuracy = res.accuracy; // 位置精度
                    console.log(latitude);
                    console.log(longitude);
                    // alert(latitude);
                    // alert(longitude);
                }
            });

            wx.getNetworkType({
                success: function (res) {
                    var networkType = res.networkType; // 返回网络类型2g，3g，4g，wifi
                    console.log(networkType);
                    // alert(networkType);
                }
            });
            wx.checkJsApi({
                jsApiList: ['chooseImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
                success: function(res) {
                    console.log(res);
                    // 以键值对的形式返回，可用的api值true，不可用为false
                    // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
                }
            });
            // wx.closeWindow();
        });
    </script>


</body>
</html>