<?php
/*
Template Name: 文章归档
*/
?>
<?php get_header(); ?>
<style>
details{margin:10px 0;}
details ul{list-style:none;padding:0 0 10px;margin:0;}
details li{margin:6px 0;font-weight:bold;font-size:1.1em;}
summary{color:#999;}
summary:hover{cursor: pointer;opacity:0.5;}
</style>
<h1 class="title"><?php the_title();?></h1><br />
<?php
$previous_year = $year = 0;
$previous_month = $month = 0;
$ul_open = false;
$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
foreach($myposts as $post) :
setup_postdata($post);
$year = mysql2date('Y', $post->post_date);
$month = mysql2date('n', $post->post_date);
$day = mysql2date('j', $post->post_date);
if($year != $previous_year || $month != $previous_month) :
if($ul_open == true) :
echo '</ul></details>';
endif;
echo '<details><summary>'; echo the_time('Y年m月'); echo '</summary>';
echo '<ul>';
$ul_open = true;
endif;
$previous_year = $year; $previous_month = $month;
?>
<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
<?php get_footer(); ?>