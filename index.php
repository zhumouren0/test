<!DOCTYPE html>
<html>

<头>
    <title>吃掉小鹿乃</title>
    <meta itemprop="name" content="吃掉小鹿乃" />
    <meta itemprop="description" content="新概念音游" />
    <meta itemprop="image" content="https://www.thac.cc/kano/res/logo.jpg" />
    <meta charset="utf-8" />
    <元名称="视口"内容="初始比例=1，用户可缩放=否，最小规模=1.0，最大比例=1.0，宽度=设备宽度，目标密度dpi=设备 dpi" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="匿名">
    <链接href="./static/index.css" rel="样式表" type="text/css">
    <script src="https://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="https://passport.cnblogs.com/scripts/jsencrypt.min.js"></script>
    <？php
    session_start();
     $str = substr（str_shuffle（'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'）， 0， 8);
     $_SESSION['t'] =  $str;
    echo "<script>var tj='" . $str ."'</脚本>";
    ?>
    <script src="./static/index.js"></script>
</头>

<body onLoad="init（）" oncontextmenu=self.event.returnValue=false>
    <div id="GameScoreLayer" class="BBOX SHADE bgc1" style="display：none;">
        <div style="填充：5%;上边距：200px;背景颜色： rgba（125， 181， 216， 0.3）;">
            <div id="GameScoreLayer-text"></div>
            <div id="GameScoreLayer-score" style="margin：10px 0;">得分</div>
            <div id="GameScoreLayer-bast">最佳</div>
            <按钮类型="按钮"类="btn btn-secondary btn-lg" onclick="replayBtn（）">重来</按钮>
            <按钮类型="按钮"类="btn btn-secondary btn-lg" onclick="goRank（）;">排行</按钮>
            <button type="button "class="btn btn-secondary btn-lg" onclick="window.location.href='https：//github.com/arcxingye/EatKano'">开源</button>
        </迪夫>
    </迪夫>
    </迪夫>
    <div id="欢迎"类="SHADE BOX-M">
        <div class="welcome-bg FILL"></div>
        <div 类="FILL BOX-M" style="位置：绝对;顶部：0;左：0;右：0;底部：0;z-索引：5;">
            <div 样式="边距：08% 0 9%;">
                <div style="字体大小：2.6em; 颜色：#FEF002;">新概念音游</div><br />
                <div style="字体大小：2.2em; 颜色：#fff; 行高：1.5em;">
从最底下小鹿乃开始<br />
看看你20秒能多少分<br />
                </迪夫>
                <br />
                <div id="btn_group "style="显示： 块;">
                    <按钮类型="按钮 "id="ready-btn" class="btn btn-primary loading btn-lg">点击开始</button>
                    <br /><br />
                    <按钮类型="按钮"类="btn btn-secondary btn-lg" onclick="show_setting（）">游戏设置</button>
                </迪夫>
                <div id="设置" style="显示： 无;">
                    <div 类="输入组 mb-3">
                        <div 类="输入-组-前缀">
                            <span class="input-group-text" id="basic-addon1">名字</span>
                        </迪夫>
                        <输入类型="text" id="用户名" class="form-control" maxlength=8占位符="用于纪录排行（特殊字符会被过滤）" aria-label="用户名" aria-describedby="basic-addon1">
                    </迪夫>
                    <div 类="输入组 mb-3">
                        <div 类="输入-组-前缀">
                            <span class="input-group-text" id="basic-addon1">留言</span>
                        </迪夫>
                        <输入类型="文本" id="消息"类="窗体控制" maxlength=50占位符="禁广告/脏话（本项可不填）" aria-label="用户名" aria-describedby="basic-addon1">
                    </迪夫>
                    <按钮类型="按钮"类="btn btn-secondary btn-lg" onclick="show_btn（）;save_cookie（）;">完成</按钮>
                </迪夫>
            </迪夫>
        </迪夫>
    </迪夫>
</身体>

</html>
