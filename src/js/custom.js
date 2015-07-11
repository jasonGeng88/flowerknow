   $(function(){
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            direction: 'vertical',
        });

        swiper.on('onSlideChangeEnd',function(){
            console.log('callback');
            $(".swiper-slide .animation-word").css("opacity","0");
            $(".swiper-slide.swiper-slide-active .animation-word").css("opacity","1");
            $(".swiper-slide.swiper-slide-active .animation-word").css("-webkit-transition","all 1.5s linear");
        });

  //         opacity: 1;
  // -webkit-transition: all 1.5s linear;
  // -webkit-transition-property: all;
  // -webkit-transition-duration: 1.5s;
  // -webkit-transition-timing-function: linear;
  // -webkit-transition-delay: initial;

        wx.getLocation({
            success: function (res) {
                var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                var speed = res.speed; // 速度，以米/每秒计
                var accuracy = res.accuracy; // 位置精度
                console.log(latitude);
                console.log(longitude);
                console.log(speed);
                console.log(accuracy);
            }
        });
        var windowH=$(window).height();
        var windowW=$(window).width();
        $(".col-xs-12.pic img").height( $(window).height() );
        $(".col-xs-12.pic img").width( $(window).width() );
        $(".col-xs-12.pic .arrow img").width( 20 );
        $(".col-xs-12.pic .arrow img").height( "auto" );
        var arrowW=$('.arrow').width();
        var arrowH=$('.arrow').height();
        $('.arrow').css('left',(windowW-arrowW)/2+"px");
        console.log(windowW);
        console.log(arrowW);
        console.log((windowW-arrowW)/2+"px");
        $('.arrow').css('top',$(window).height()-100+"px");


        //form 格式
        var formW=$("form").width();
        var formH=$("form").height();
        console.log(windowH);
        console.log(formH);
        $("form").css("margin-left",(windowW-formW)/2);
        $("form").css("margin-top",(windowH-formH)/2);
        $("form label").css("width",formW);
        $("form label").css("text-align","center");
        var buttonW1=$("form button").width();
        // $("form button").css("margin-left",(formW-buttonW1-12)/2);

        //确定
        $(".col-xs-12.pic .prewxpay img").css("width","35");
        $(".col-xs-12.pic .prewxpay img").css("height","auto");
        var confirmW=$(".prewxpay").width();
        var confirmH=$(".prewxpay").height();
        $(".prewxpay").css("left",(windowW-confirmW)/2);
        $(".prewxpay").css("top",(windowH-confirmH)/2);
        var buttonW2=$(".prewxpay button").width();
        // $(".prewxpay button").css("margin-left",(confirmW-buttonW2-12)/2);

        //文字动画
        $(".animation-word img").css("width",windowW-80);

        //arrow上滑
        $('.arrow').click(function(){
            console.log('click'); 
            var num=$(this).parent().attr("_se");
            console.log(num);
            var needtop=" translate3d(0px, -"+windowH*num+"px, 0px)";
            console.log(needtop);
            for (var i = 1; i < 7; i++) {
                if (i!=num) {
                    $(".swiper-wrapper .swiper-slide:nth-child("+num+") .animation-word").css("opacity","0");
                };
            };
            $(".swiper-wrapper").css("transition-duration","0.3s");
            $(".swiper-wrapper").css("-webkit-transition-duration","0.3s");
            $(".swiper-wrapper").css("transform",needtop);
            $(".swiper-wrapper").css("-webkit-transform",needtop); 

            //change class
            $(".swiper-wrapper .swiper-slide").removeClass("swiper-slide-prev");
            $(".swiper-wrapper .swiper-slide").removeClass("swiper-slide-active");
            $(".swiper-wrapper .swiper-slide").removeClass("swiper-slide-next");

            $(".swiper-wrapper .swiper-slide:nth-child("+num+")").addClass("swiper-slide-prev");
            num++;
            $(".swiper-wrapper .swiper-slide:nth-child("+num+")").addClass("swiper-slide-active");
            num++;
            $(".swiper-wrapper .swiper-slide:nth-child("+num+")").addClass("swiper-slide-next");
            // $(".swiper-slide .animation-word").css("opacity","0");
            $(".swiper-slide.swiper-slide-active .animation-word").css("opacity","1");
            $(".swiper-slide.swiper-slide-active .animation-word").css("-webkit-transition","all 2s linear");

        });

        //验证表单
        $("#phone").blur(function(){
            var phone = $("#phone").val();
            var vali=validate(phone,1);
            if (!vali) {return false;}
            var telReg = !phone.match(/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
            if (telReg) {
                $('form .form-group:nth-child(1) .error').html("");
                $('form .form-group:nth-child(1) .error').append("请输入正确手机号");
            }else {
                $('form .form-group:nth-child(1) .error').html("");
            }

        });
        $("#username").blur(function(){
            var username = $("#username").val();
            var vali=validate(username,2);
            if (!vali) {return false;}
            if (username.length>10) {
                $('form .form-group:nth-child(2) .error').html("");
                $('form .form-group:nth-child(2) .error').append("用户名过长");
            }else {
                $('form .form-group:nth-child(2) .error').html("");
            }

        });
        $("#taphone").blur(function(){
            var phone = $("#phone").val();
            var taphone = $("#taphone").val();
            var vali=validate(taphone,3);
            if (!vali) {return false;}
            var telReg = !taphone.match(/^(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
            if (telReg) {
                $('form .form-group:nth-child(3) .error').html("");
                $('form .form-group:nth-child(3) .error').append("请输入正确手机号");
            }else if (taphone==phone){
                $('form .form-group:nth-child(3) .error').html("");
                $('form .form-group:nth-child(3) .error').append("手机号重复");
            } else {
                $('form .form-group:nth-child(3) .error').html("");
            }
        });
        $("#address").blur(function(){
            var address = $("#address").val();
            var vali=validate(address,4);
            if (!vali) {return false;}
            if (address.length<4) {
                $('form .form-group:nth-child(4) .error').html("");
                $('form .form-group:nth-child(4) .error').append("请填写详细地址");
            }else {
                $('form .form-group:nth-child(4) .error').html("");
            }
        });
        $("#datetime").blur(function(){
            var datetime = $("#datetime").val();
            var vali=validate(datetime,5);
            if (!vali) {return false;}
            console.log(Date.parse(datetime)/1000);
            var time=Date.parse(datetime)/1000;
            var curdate=new Date();
            var curtime=curdate.getTime()/1000;
            console.log(curdate.getTime()/1000);
            if (time<curtime) {
                $('form .form-group:nth-child(5) .error').html("");
                $('form .form-group:nth-child(5) .error').append("不能早于当前时间");
            }else {
                $('form .form-group:nth-child(5) .error').html("");
            }
        });
        $("#word").blur(function(){
            var word=$("#word").val();
            var vali=validate(word,6);
            if (!vali) {return false;}
            if (word.length!=1) {
                $('form .form-group:nth-child(6) .error').html("");
                $('form .form-group:nth-child(6) .error').append("请输入一个字");
            }else{
                $('form .form-group:nth-child(6) .error').html("");
            }
        });
        $(".submit").click(function(){
            //获取表单数据
            var phone = $("#phone").val();
            var username = $("#username").val();
            var taphone = $("#taphone").val();
            var address = $("#address").val();
            var datetime = $("#datetime").val();
            var word = $("#word").val();
            if (!validate(phone,1)) {return false;}
            if (!validate(username,2)) {return false;}
            if (!validate(taphone,3)) {return false;}
            if (!validate(address,4)) {return false;}
            if (!validate(datetime,5)) {return false;}
            if (!validate(word,6)) {return false;}

            var error=$(".error").html();
            if (error===""||error===null) {
                console.log('submit');
                $.ajax({
                     type: 'POST',
                     url: "http://192.168.40.236/Api/CreatePlantOrderForNotApp" ,
                    data: {
                        token: "yb2f5L6qgpRZwQNNsiZYde8U9K3bqy4P_v2.0",
                        phone: phone,
                        username: username,
                        taphone: taphone,
                        address: address,
                        pretime: datetime,
                        word: word,
                        equInfo: equInfo
                    } ,
                    success: function(res){
                        console.log("success");
                    } ,
                    dataType: json
                });
            }else {
                return false;
            }

        });
            
    });
    function validate(name,order){
        if (name===""||name===null) {
            console.log(name);
            console.log(order);
            $('form .form-group:nth-child('+order+') .error').html("");

            $('form .form-group:nth-child('+order+') .error').append("输入内容不能为空");
            return false;
        } else {
            return true;
        }
    }  