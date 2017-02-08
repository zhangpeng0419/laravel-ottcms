 

## Laravel 5.4.9演示项目

  
##安装

git clone 到本地<br>
执行 composer install,创建好数据库<br>
配置 .env 中数据库连接信息,没有.env请复制.env.example命名为.env<br>
执行 php artisan key:generate<br>
执行 php artisan migrate<br>
执行 php artisan db:seed<br>
键入 '域名/admin'(后台登录)<br>
## 功能

文章管理：发布，编辑，查看，删除<br>
评论管理：发布，删除<br>
分类管理：添加，编辑，删除，统计访问，keyword，description<br>
passport api<br>

<p>http://localhost/api/user/register post register</p>
<p>http://localhost/oauth/token       post token</p>
<p>http://localhost/api/user          get user</p>



## 有问题可以直接在教程下面留言

喜欢可以点击上面右侧的 Star 哦

Laravel 5 系列入门教程推荐如下文章：
<blockquote>
<p><a href="https://github.com/johnlui/Learn-Laravel-5/issues/4">2016 版 Laravel 系列入门教程（一）【最适合中国人的 Laravel 教程】</a></p>

<p><a href="https://github.com/johnlui/Learn-Laravel-5/issues/5">2016 版 Laravel 系列入门教程（二）【最适合中国人的 Laravel 教程】</a></p>

<p><a href="https://github.com/johnlui/Learn-Laravel-5/issues/6">2016 版 Laravel 系列入门教程（三）【最适合中国人的 Laravel 教程】</a></p>

<p><a href="https://github.com/johnlui/Learn-Laravel-5/issues/7">2016 版 Laravel 系列入门教程（四）【最适合中国人的 Laravel 教程】</a></p>

<p><a href="https://github.com/johnlui/Learn-Laravel-5/issues/8">2016 版 Laravel 系列入门教程（五）【最适合中国人的 Laravel 教程】</a></p>

<p><a href="http://www.zhoujiping.com/laravel-tutorial.html">周继平Laravel5基础拓展</a></p>

<h2><a id="user-content-laravel-文档" class="anchor" href="#laravel-文档" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 文档</h2>

<ul>
<li><a href="http://laravel.com/">Laravel 官方文档</a>       —— 英文</li>
<li><a href="http://laravel-china.org/">Laravel 中文文档</a> —— laravel-china版</li>
<li><a href="http://www.golaravel.com/">Laravel 中文文档</a> —— golaravel版</li>
</ul>

<h2><a id="user-content-laravel-新闻" class="anchor" href="#laravel-新闻" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 新闻</h2>

<ul>
<li><a href="https://laravel-news.com/">Laravel News</a> —— Laravel官方新闻 </li>
</ul>

<h2><a id="user-content-laravel-教程" class="anchor" href="#laravel-教程" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 教程</h2>

<ul>
<li><a href="https://laracasts.com">Laracasts</a> —— Jeff的教程很赞！（基础教程免费），入门推荐这个<a href="https://laracasts.com/series/laravel-5-fundamentals">laravel-5-fundamentals</a></li>
<li><a href="http://www.phpyc.com/search/tag/44">Laravel5.1视频教程</a>  —— Enda 袁超录制讲的不错！（目前免费）</li>
<li><a href="https://laravist.com/">Laravist</a> —— Laracasts中文版，基础教程免费</li>
<li><a href="https://phphub.org/topics/1564">使用 Laravel 5.1 开发博客应用系列教程</a> —— 文字版教程，英文版<a href="http://laravelcoding.com/blog">Laravel Coding</a></li>
</ul>

<h2><a id="user-content-laravel-社区" class="anchor" href="#laravel-社区" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 社区</h2>

<ul>
<li><a href="https://phphub.org/">PHPHub</a> —— PHP &amp; Laravel中文社区，比较有质量，另外推荐PHPHub团队维护的<a href="http://laravel-china.org/">Laravel 中文文档</a>和<a href="http://laravel-china.github.io/php-the-right-way/">PHP之道</a></li>
<li><a href="http://wenda.golaravel.com/">Laravel问答社区</a> —— 社区相对活跃些~</li>
</ul>

<h2><a id="user-content-laravel-博客" class="anchor" href="#laravel-博客" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 博客</h2>

<ul>
<li><a href="http://laravelacademy.org/">Laravel 学院</a> —— 勤奋的站长，高质量的内容。另外推荐博主翻译的<a href="http://laravelacademy.org/laravel-docs-5_1">Laravel 5.1 中文文档</a> 以及 <a href="http://laravelacademy.org/laravel-project">Laravel 完整开源项目大全</a></li>
<li><a href="http://overtrue.me/">overtrue博客</a> —— Laravel牛人，开发了好几个优质扩展，为Laravel做出了杰出的贡献~</li>
<li><a href="https://lvwenhan.com">岁寒</a> —— 主要推荐<a href="https://lvwenhan.com/laravel/432.html">最适合中国人的 Laravel 教程系列</a>，非常适合新手入门~</li>
<li><a href="http://www.phpyc.com/">Enda 袁超博客</a> —— Laravel牛人，开发了好几个优质扩展，为Laravel做出了杰出的贡献+1~</li>
<li><a href="http://laravelbase.com/">LaraBase - 全栈工程师之家</a> —— 翻译的文档不错！</li>
<li><a href="https://www.insp.top/">灵感</a> —— 好文推荐 <a href="https://www.insp.top/article/learn-laravel-container">laravel 学习笔记 —— 神奇的服务容器</a></li>
<li><a href="http://www.kyomini.com/">laravel - Kyomini</a> —— PHP和Laravel博客值得一看</li>
<li><a href="http://laravel.so/">laravel.so - laravel技巧</a> —— 一些laravel开发应用技巧</li>
<li><a href="http://note.mango.im/">芒果笔记</a> —— 本人的博客啦,关注PHP &amp; Laravel,也写过简单的博客示例<a href="https://github.com/mangoim/laravel51">laravel51</a></li>
<li><a href="http://cheats.jesse-obrien.ca/">Laravel小抄</a> —— Laravel常用命令集合 </li>
<li><a href="http://www.yuansir-web.com/">yuansir</a> —— 推荐<a href="http://slides.com/ryanyuan/better-use-of-laravel-to-build-web-applications#/">让更好用的laravel来构建web应用 (PPT)</a></li>
<li><a href="https://mattstauffer.co/blog">Matt Stauffer on Laravel, PHP, Frontend development</a> —— 英文博客</li>
</ul>

<h2><a id="user-content-laravel-开发实例" class="anchor" href="#laravel-开发实例" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 开发实例</h2>

<ul>
<li><a href="https://github.com/NauxLiu/phphub-server">NauxLiu/PHPHub</a> —— 基于Laravel5.1，并赠送<a href="https://github.com/Aufree/phphub-ios">PHPHub iOS</a> &amp; <a href="https://github.com/CycloneAxe/phphub-android">PHPHub Android</a>客户端全家桶<br></li>
<li><a href="https://github.com/douyasi/yascmf">douyasi/yascmf</a> —— 基于Laravel 5.1，小型内容管理框架</li>
<li><a href="https://github.com/yccphp/laravel-5-blog">yccphp/laravel-5-blog</a> —— Enda 袁超基于Laravel5.1开发的博客系统</li>
<li><a href="https://octobercms.com/">October CMS</a>  —— 基于Laravel CMS</li>
<li><a href="https://github.com/BootstrapCMS/CMS">Bootstrap CMS</a> —— Laravel 5.1驱动的功能强大的CMS</li>
<li><a href="https://github.com/LavaLite/cms">LavaLite</a> —— 基于Laravel 5.1 &amp; Bootstrap 3的内容管理系统</li>
<li><a href="https://github.com/TypiCMS/Base">TypiCMS</a> —— 基于 Laravel 5 构建的、支持多语言的内容管理系统</li>
<li><a href="https://github.com/DimitriMikadze/laravel-angular-cms">Laravel and AngularJS CMS </a> —— 基于Laravel 5.1和AngularJS的CMS</li>
<li><a href="https://github.com/vieasehub/viease">vieasehub/viease</a> —— 微易，一款微信公众平台管理系统。基于overtrue微信SDK开发</li>
</ul>

<h2><a id="user-content-laravel-扩展包" class="anchor" href="#laravel-扩展包" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 扩展包</h2>

<ul>
<li><a href="https://github.com/barryvdh/laravel-debugbar">barryvdh/laravel-debugbar</a> ——  Laravel 开发调试神器！</li>
<li><a href="https://github.com/romanbican/roles">romanbican/roles</a> —— Laravel权限扩展包，支持Laravel5.1，本人用的体验不错。</li>
<li><a href="https://github.com/argb/laravel-ueditor">argb/laravel-ueditor</a> —— Ueditor Laravel版</li>
<li><a href="https://github.com/overtrue/laravel-wechat">overtrue/laravel-wechat</a> —— 微信SDK for Laravel</li>
<li><a href="https://github.com/SocialiteProviders">SocialiteProviders</a> —— 第三方登陆包括微信、微博等等，<a href="http://socialiteproviders.github.io/">查看支持列表</a></li>
<li><a href="https://github.com/Maatwebsite/Laravel-Excel">Maatwebsite/Laravel-Excel</a> —— Laravel-Excel扩展</li>
<li><a href="https://github.com/Intervention/image">Intervention/image</a> —— 好用的图片处理，Laravel也方便使用</li>
<li><a href="https://github.com/stevenyangecho/laravel-u-editor">stevenyangecho/laravel-u-editor</a> —— 百度Ueditor Laravel版</li>
<li><a href="https://github.com/argb/laravel-ueditor">argb/laravel-ueditor</a> —— 百度Ueditor Laravel版 +1</li>
<li><a href="https://github.com/thephpleague/omnipay">thephpleague/omnipay</a> —— 支付集合，包含支付宝等</li>
<li><a href="https://github.com/Latrell/Alipay">Latrell/Alipay</a> —— 支付宝SDK在Laravel5的封装</li>
<li><a href="https://github.com/caouecs/Laravel-lang">caouecs/Laravel-lang</a> —— Laravel各国语言包，包含简体中文</li>
<li><a href="https://github.com/SimpleSoftwareIO/simple-qrcode">SimpleSoftwareIO/simple-qrcode</a> —— Laravel生成二维码工具，亲测好用</li>
<li><a href="https://github.com/zgldh/qiniu-laravel-storage">zgldh/qiniu-laravel-storage</a> —— 七牛SDK for Laravel</li>
</ul>

<h2><a id="user-content-laravel-相关" class="anchor" href="#laravel-相关" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Laravel 相关</h2>

<h3><a id="user-content-composer" class="anchor" href="#composer" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Composer</h3>

<ul>
<li><a href="https://getcomposer.org/">Composer</a> —— Composer官网(需要梯子)</li>
<li><a href="https://packagist.org/">Packagist</a> —— Packagist官网</li>
<li><a href="http://pkg.phpcomposer.com/">Packagist / Composer 中国全量镜像</a> —— 国内镜像（会有不稳定和扩展不全，建议使用官网）</li>
<li><a href="http://packagist.cn/">Packagist中国镜像站</a> —— 国内镜像（会有不稳定和扩展不全，建议使用官网）</li>
</ul>

<h3><a id="user-content-hometead-相关" class="anchor" href="#hometead-相关" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Hometead 相关</h3>

<ul>
<li><a href="http://www.kyomini.com/content_16.html">Win Laravel Homestead</a> —— win平台安装Homestead教程</li>
<li><a href="http://www.kyomini.com/content_11.html">Mac Laravel Homestead</a> —— Mac平台安装Homestead教程</li>
</ul>

<h3><a id="user-content-其他" class="anchor" href="#其他" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>其他</h3>

<ul>
<li><a href="https://www.google.com">Google</a> —— 建议使用英文关键词搜索</li>
<li><a href="http://stackoverflow.com/">Stack Overflow</a> —— Stack Overflow大部分技术问题都能在上面找到答案</li>
</ul>

<p>(参考rang9527文档，地址：https://github.com/rang9527/Laravel-sites)</p>
</article>
  </div>
</blockquote>

 

## License

本示例项目继承自 Laravel5.4.9 采用的 MIT license，你可以利用采用该协议的代码做任何事情。
