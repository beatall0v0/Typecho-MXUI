 
 
 <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.9, user-scalable=no">
	
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
	</title>

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mdui.min.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mxui.css'); ?>">
<script src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>"></script>


    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<style>
body {
  font-family: "Helvetica Neue", Helvetica, Microsoft Yahei, sans-serif;
}
</style>

<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<body class="mdui-theme-accent-indigo">

<header>
<div class="header">
    <div class="mdui-toolbar mdui-shadow-0" id="process-container">

        <span class="mdui-typo-title">
            <?php if ($this->options->logoUrl): ?>
                <a href="<?php $this->options->siteUrl(); ?>">
                <img id="logo" src="<?php $this->options->logoUrl() ?>"  height="30" alt="<?php $this->options->title() ?>"/>
                </a>
                <?php else: ?>
                <a class="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                <?php endif; ?>
        </span>
        
        <div class="mdui-toolbar-spacer"></div>

        <div class="nav">
          <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
          <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
          <?php endwhile; ?>
          <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-dialog="{target: '#exampleDialog'}"><i class="mdui-icon material-icons ">search</i></a>        
        </div>



    </div>

</div>



<!--对话框开始-->
<div class="mdui-dialog" id="exampleDialog">
  <div class="mdui-dialog-title"></div>
  
  <div class="mdui-row">

            <div class="mdui-text-center">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
				
				<div class="mdui-textfield">
				<div class="mdui-col-xs-7  mdui-col-offset-xs-1">
				  <input class="mdui-textfield-input text" placeholder="<?php _e('输入关键字搜索'); ?>" type="text" id="s" name="s"  />
				</div>
				<div class="mdui-col-xs-3">
				  <button class="mdui-btn mdui-color-theme-accent mdui-ripple submit"  type="submit"><?php _e('搜索'); ?></button>
				</div>
				
				</div>
                </form>
            </div>
</div>
  
  <div class="mdui-dialog-actions">
    <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button>
  </div>
</div>
<!--对话框结束-->


</header><!-- end #header -->



