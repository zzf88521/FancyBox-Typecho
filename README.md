[下载地址](https://github.com/zzf88521/FancyBox-Typecho)

[演示地址:http://zz8.me/](http://zz8.me/)

图例：

![](http://zz8.me/usr/uploads/2018/11/4203454328.png)


> FancyBox 是一个基于JQuery的图片预览插件 官网地址 https://fancyapps.com/fancybox/3/ 如需自定义功能请查看官网API。

使用方法：
* 下载插件，解压并重命名文件夹为 `Fancybox` （`Typecho`插件机制决定的，具体我也不知道为什么）；

* 把刚才重命名为 `Fancybox` 的文件夹再次压缩为 `.zip` 格式，然后用FTP工具或其它方式，上传至 `/usr/plugins`（你的Typecho安装目录）文件夹下；

* 刷新`Typecho`后台-->插件页面，点击启用；

* 新建一个文章，并添加一个图片，**注意**此时不可使用MarkDown语法添加图片，要使用HTML语法，否则无法使用图片预览功能；


例: 

```html
<a data-fancybox="gallery" href="http://thyrsi.com/t6/616/1543141569x2890197513.jpg">
  <img src="http://thyrsi.com/t6/616/1543141569x2890197513.jpg">
</a>
```

这是单个图片，其中`data-fancybox="gallery`表示一个组，如果页面存在多个`data-fancybox="gallery`的图片，则自动形成相册。

如果使用过程中有什么问题，请联系我，邮箱`447833339@qq.com`

当然你也可以访问 [我的博客](http://zz8.me) ，欢迎骚扰！
