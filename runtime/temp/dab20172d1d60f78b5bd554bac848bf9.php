<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:47:"D:\Aliases\xgy/app/install\view\index\index.php";i:1515225914;s:46:"D:\Aliases\xgy\app\install\view\index\head.php";i:1515225914;s:46:"D:\Aliases\xgy\app\install\view\index\foot.php";i:1515225914;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title> 系统安装 - Powered by <?php echo config('hisiphp.name'); ?></title>
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="static/admin/js/layui/css/layui.css">
    <link rel="stylesheet" href="static/admin/css/style.css">
    <link rel="stylesheet" href="static/admin/css/install.css">
    <script src="static/admin/js/layui/layui.js"></script>
    <script>
    layui.config({
      base: 'static/admin/js/',
      version: '<?php echo time(); ?>'
    }).use('global');
    </script>
</head>
<body>
<div class="header">
    <h1>感谢您选择<?php echo config('hisiphp.name'); ?></h1>
</div>
<div class="install-box">
    <fieldset class="layui-elem-field site-demo-button">
        <legend>HisiPHP用户协议 适用于所有用户</legend>
        <div class="protocol">
            <p>
            版权所有 (c) 2016-2018，HisiPHP.COM保留所有权利。</br></br>
            感谢您选择HisiPHP。希望我们的努力能为您提供一个简单.快速、高效.稳定的建站解决方案。</br>
            HisiPHP官方网址为 http://www.hisiphp.com，产品交流社区网址为http://bbs.hisiphp.com。</br></br>
            用户须知：本协议是您与HisiPHP.COM（以下简称HisiPHP）之间关于您使用HisiPHP公司提供的各种软件产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或者限制HisiPHP责任的免责条款及对您的
            权利限制。请您审阅并接受或不接受本服务条款。如您不同意本服务条款或HisiPHP随时对其的修改，您应不使用或主动取消HisiPHP公司提供的相关产品。否则，您的任何对HisiPHP产品中的相关服务的注册、登陆、下载、查看等使用行为将被视为您对本服务条款全部的完全接受，包括接受HisiPHP对服务条款随时所做的任何修改。</br></br>
            本服务条款一旦发生变更, HisiPHP将在网页上公布修改内容。修改后的服务条款一旦在网站管理后台上公布即有效代替原来的服
            务条款。您可随时登陆HisiPHP官方论坛查阅最新版服务条款。如果您选择接受本条款，即表示您同意接受协议各项条件的约束。
            如果您不同意本服务条款，则不能获得使用本服务的权利。您若有违反本条款规定，HisiPHP公司有权随时中止或终止您对HisiPHP产品的使用资格并保留追究相关法律责任的权利。</br></br>
            在理解、同意、并遵守本协议的全部条款后，方可开始使用HisiPHP产品。您可能与HisiPHP公司直接签订另一书面协议，以补充
            或者取代本协议的全部或者任何部分HisiPHP拥有HisiPHP的全部知识产权。本软件只供许可协议，并非出售。HisiPHP只允许您
            在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。</br></br>
            I. 协议许可的权利 </br></br>
            您可以在完全遵守本许可协议的基础上，将本软件应用于商业用途，而不必支付软件版权许可费用。</br>
            您可以在协议规定的约束和限制范围内修改HisiPHP产品源代码(如果被提供的话)或界面风格以适应您的网站要求，但必须保留软件版本信息的正常显示及相关连接正常。</br>
            您拥有使用本软件构建的网站中全部会员资料、文章及相关信息的所有权，并独立承担与使用本软件构建的网站内容的
            审核、注意义务，确保其不侵犯任何人的合法权益，独立承担因使用HisiPHP软件和服务带来的全部责任，若造成HisiPHP公司或
            用户损失的，您应予以全部赔偿。 </br>
            您可以从HisiPHP提供的应用市场服务中下载适合您网站的应用程序，但应向应用程序开发者/所有者支付相应的费用。</br></br>
            II. 协议规定的约束和限制 </br></br>
            禁止去除HisiPHP源码里的版权信息，商业授权版本可去除后台界面及前台界面的相关版权信息。</br>
            禁止在HisiPHP整体或任何部分基础上发展任何派生版本、修改版本或第三方版本用于重新分发。</br></br>
            </p>
        </div>
    </fieldset>
    <div class="step-btns">
        <a href="?step=2" class="layui-btn layui-btn-big layui-btn-normal">同意协议并安装系统</a>
    </div>
</div>
<div class="copyright">
    © 2017-2018 <a href="<?php echo config('hisiphp.url'); ?>" target="_blank"><?php echo config('hisiphp.copyright'); ?></a> All Rights Reserved.
</div>
</body>
</html>
<div style="width:0;height:0;overflow:hidden"><script language="javascript" type="text/javascript" src="//js.users.51.la/19320191.js"></script></div>