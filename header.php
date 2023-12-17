<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<style>
:root {
    --width: 600px;
    --font-scale: 1em;
    --background-color: #fff;
    --heading-color: #222;
    --nav-color:#777;
    --text-color: #333;
    --code-background-color: #f2f2f2;
    --code-color: #222;
    --blockquote-color: #222;
    --gray-color: #aaa;
}
@media (prefers-color-scheme: dark) {
:root {
    --background-color: #111;
    --heading-color: #d9c48f;
    --nav-color: #8f8873;
    --text-color: #d9c48f;
    --code-background-color: #000;
    --code-color: #ddd;
    --blockquote-color: #ccc;
    --gray-color: #756a56;
    }
}
body {
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Helvetica,Arial,"PingFangSC-Regular","Hiragino Sans GB","Lantinghei SC","Microsoft Yahei","Source Han Sans CN","WenQuanYi Micro Hei",SimSun,sans-serif;
    font-size: var(--font-scale);
    margin: auto;
    padding: 20px;
    max-width: var(--width);
    text-align: center;
    background-color: var(--background-color);
    word-wrap: break-word;
    overflow-wrap: break-word;
    line-height: 1.8;
    color: var(--text-color);
}
html{scroll-behavior:smooth;}
h1,h2,h3,h4,h5,h6{color:var(--heading-color);}
a{color:var(--text-color);cursor:pointer;text-decoration:none}
a:hover{opacity:0.5;}
nav a{margin-right:10px;}
strong,b{color:var(--heading-color)}
button{margin:0;cursor:pointer}
time,.commentmetadata a{color:var(--gray-color);font-size:0.8em;}
table{width:100%}
hr{border:0;border-top:1px dashed}
img{max-width:100%;height:auto}
code{font-family:monospace;padding:2px;background-color:var(--code-background-color);color:var(--code-color);border-radius:3px}
blockquote{border-left:1px solid var(--gray-color);color:var(--code-color);padding-left:20px;font-style:italic}
header,footer{margin: 10px 0;color:var(--gray-color);}
footer{padding-top:40px;}
header a,footer a{color:var(--nav-color)}
article{margin-bottom:30px;}
h1.title,h2.title {margin:50px 0 0;line-height:1.6;}
.intro{color:var(--gray-color);margin-bottom:50px;}
.home .intro:after{content:"✍";display: block;font-size:2em;margin-top: 40px;}
.content,.comment-respond{text-align:left;padding-top:40px;}
.content a,.comment .reply a,.logged-in-as a{border-bottom:1px solid var(--text-color);}
.content a:has(img){border:none}
.pages a{font-size:20px;padding:5px;}
.tags,.tags a{color:var(--gray-color);margin-right:10px;}
.comlist{max-width:450px;margin:0 auto;}
.commentlist,.commentlist .children{list-style: none;padding:0;margin-bottom:40px;}
.comment{margin:30px 0;list-style: none;text-align:left;}
.comment .comment{margin-left:35px;}
.comment-author cite{font-weight:bold;font-style:normal;}
.comment-author .says,.comment-author .avatar,.screen-reader-text{display:none}
input,textarea{border-radius:4px;border:1px solid var(--gray-color);display:block;font-size:0.9em;margin:0 0 10px;padding:10px;width:calc(100% - 25px);background:var(--background-color);color:var(--heading-color)}
input:focus,textarea:focus{border:1px solid var(--text-color);outline:0}
input[type="submit"]{border:none;border-radius:4px;padding:10px 16px;width:initial;background:var(--heading-color);color:var(--background-color);font-size:0.9em}
input[type="submit"]:hover{cursor:pointer;opacity:.7;}
input[type="checkbox"]{display:inline-block;width: initial;}
.searchform input{margin:20px auto;width: initial;display:inline-block;}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<?php if ( !is_home() ) { ?>
<a href="<?php echo esc_url(home_url('/')); ?>">← <?php bloginfo('name'); ?></a>
<?php if ( is_single() ) { ?> | <?php the_category( ', ' );?><?php } else { ?> | <a href="<?php echo esc_url(home_url('/?s=输入关键词')); ?>">搜索</a><?php } ?>
<?php } else { ?>
<nav>
<?php if ( has_nav_menu( 'primary-menu' ) ) :
$menuParameters = array('container'	=> false,'echo'	=> false,'menu_class' => 'menu','items_wrap' => '%3$s','depth'	=> 0,);
echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); 
endif;?><a href="<?php echo esc_url(home_url('/?s=输入关键词')); ?>">搜索</a>
</nav>
<?php } ?>
</header>
<main>