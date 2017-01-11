magento-jewelry
===============
插件名称 Social Share plugin
版本：0.1.0
作者：Jnoas

安装步骤

1：解压后，按目录层次将app和skin文件夹分别上传至服务器magento根目录。

2：进入magento var目录，使用rm -rf cache 删除缓存，或在后台删除也可，最好使用命令。

3：进入后台system->Configuration，点击左边tab 下Social Share Set  ；若出现404 error，重新登出再登入后台即可。

4：将Enable This Plugin和对应社交平台设置为yes。

5：进入后台system->Transactional Emails,单击Add New Template，
   在Load default template里面的Template选择Social Share Email Template这个选项，Locale 选择english，
   然后单击Load Template；在Template Information里填写一个Template Name和Template Subject ，保存；
   
6：再次返回system->Configuration，在Set Email Template下的Socialshare Email template选择第五部里添加的Template Name，保存；


第5，,6部请一定要设置正确，否则可能无法发送email；

此插件效果可能会受到full page cache影响，每次请确保页面为第一次请求(clean cache)；或者在后台full page cache配置处，将sharecoupon和socialshareproduct这两个block过滤掉；


因时间关系，此版本仍有许多改进之处，如coupon和product的绑定，button显示位置的灵活性及一些界面的美化等，如有机会合作，再进一步探讨；

若有疑问或者建议，请加QQ 435991706 ！
