<?php
/*
Template Name: 「首頁」頁面
*/
?>
<?php get_header(); ?>
   
<!-- 主視覺辦公室插圖 -->
<div class="first-view">
    <!-- 狸長 -->
    <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/lili.svg" class="chief">
    <ul class="hello">
		<?php
			if (have_rows('index_talk_repeat') ):
		 		while ( have_rows('index_talk_repeat') ) : the_row();
		?>
			<li><?php the_sub_field('talk'); ?></li>
		<?php endwhile; endif; ?>
    </ul>

    <!-- 狸長日安 -->
    <?php 
      $today = date('Ymd');
      $args = array (
          'post_type' => 'good-day',
          'meta_query' => array(
          array(
              'key'		=> 'good-day_date',
              'compare'	=> '<=',
              'value'		=> $today,
          ),
          array(
              'key'		=> 'good-day_date',
              'compare'	=> '>=',
              'value'		=> $today,
          )
        ),
      );
      $posts = get_posts($args);
      if ($posts):
        // href="echo get_the_permalink( $posts[0]->ID ); "
    ?>
    <a href="" class="calendar">
        <img src="<?php echo wp_get_attachment_image_src(get_field('good-day_image', $posts[0]->ID), 'small')[0] ?>">
        <h4><?php echo get_field('good-day_text', $posts[0]->ID); ?></h4>
    </a>
      <?php endif; ?>
    
    <!-- 向下箭頭 -->
    <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/arrow1.png" alt="" class="arrow">
</div>


<!-- 重點Banner -->
<div class="index_box">
    <div class="subtitle">
      <h2>狸長大小事</h2>
    </div>
    <div class="index_banner">
      <?php
        if( have_rows('banner') ):
        while ( have_rows('banner') ) : the_row();
      ?>
        <a
          href="<?php
            if (get_sub_field('link_type') == 'outside') {
              the_sub_field('link');
            } else if (get_sub_field('link_type') == 'inside') {
              echo get_permalink(get_sub_field('inside_id'));
            } else {
              echo '';
            }
          ?>"
          <?php
            if (get_sub_field('new_window')) {
          ?>
            target="_blank"
          <?php
            }
          ?>
        >
          <img src="<?php echo wp_get_attachment_image_src(get_sub_field('image'), 'large')[0] ?>" alt="">
        </a>
      <?php endwhile; endif; ?>
        <!-- <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/banner1.png"> </a>
        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/banner1.png"> </a>
        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/banner1.png"> </a> -->
    </div>
</div>


<!-- 企劃專題 -->
<div class="index_wrap">
<div class="index_box">
    <div class="subtitle">
      <?php $objProject = get_post_type_object('project') ?>
      <h2><?php echo $objProject->label; ?></h2>
    </div>
    <ul class="index_project">
      <?php
        $resource_type = get_field('index_project_resource');
        if ($resource_type === 'manual') {
          // 手動挑選
          $posts = get_field('index_project_pick');
          if( $posts ):
            foreach( $posts as $post):
      ?>
        <li>
          <a href="<?php echo get_the_permalink( $post->ID ); ?>">
              <div class="pic">
                  <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
              </div>
              <div class="info">
                  <h3><?php echo get_the_title( $post->ID ); ?></h3>
                  <p>企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述</p>
                  <span>了解詳情</span>
              </div>
          </a>
        </li>
      <?php
          endforeach; endif;
        } else {
          $order = '';
          if ($resource_type === 'date') {
            $order = 'date';
          } else {
            $order = 'ID';
          }
          $post_list = get_posts( array(
              'post_type'    => 'project',
              'posts_per_page'	=> get_field('index_project_pick'),
          				'orderby'       	=> $order, 
          				'order'         	=> 'DESC'
          ) );
          foreach ( $post_list as $post ) :
      ?>
        <li>
          <a href="<?php echo get_the_permalink( $post->ID ); ?>">
              <div class="pic">
                  <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
              </div>
              <div class="info">
                  <h3><?php echo get_the_title( $post->ID ); ?></h3>
                  <p>企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述</p>
                  <span>了解詳情</span>
              </div>
          </a>
        </li>
      <?php endforeach; ?>

      <?php
        }
      ?>
        
        <!-- <li>
            <a href="project_d.php">
                <div class="pic">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/banner3.png">
                </div>
                <div class="info">
                    <h3>新春大挑戰！你是什麼豬？</h3>
                    <p>企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述</p>
                    <span>了解詳情</span>
                </div>
            </a>
        </li>
        <li>
            <a href="project_d.php">
                <div class="pic">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/img/banner5.png">
                </div>
                <div class="info">
                    <h3>轉型正義企劃：無法送達的情書</h3>
                    <p>企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述企劃簡述</p>
                    <span>了解詳情</span>
                </div>
            </a>
        </li> -->
    </ul> 
    <a href="<?php echo get_post_type_archive_link('project') ?>" class="index_btn">
      更多<?php echo $objProject->labels->singular_name; ?>
    </a> 
</div>
</div>


<!-- 圖文專區 -->
<!-- 一次兩筆，輪播式 -->
<div class="index_box">
    <div class="subtitle">
      <?php $objArticle = get_post_type_object('article') ?>
      <h2><?php echo $objArticle->label; ?></h2>
    </div>
    <ul class="index_article">
      <?php
        $resource_type = get_field('index_article_resource');
        if ($resource_type === 'manual') {
          // 手動挑選
          $posts = get_field('index_article_pick');
          if( $posts ):
            foreach( $posts as $post):
      ?>
        <li>
            <a href="<?php echo get_the_permalink( $post->ID ); ?>">
                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
                <h3><?php echo get_the_title( $post->ID ); ?></h3>
            </a>
        </li>
      <?php
          endforeach; endif;
        } else {
          $order = '';
          if ($resource_type === 'date') {
            $order = 'date';
          } else {
            $order = 'ID';
          }
          $post_list = get_posts( array(
              'post_type'    => 'article',
              'posts_per_page'	=> get_field('index_article_pick'),
          				'orderby'       	=> $order, 
          				'order'         	=> 'DESC'
          ) );
          foreach ( $post_list as $post ) :
      ?>
        <li>
            <a href="<?php echo get_the_permalink( $post->ID ); ?>">
                <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
                <h3><?php echo get_the_title( $post->ID ); ?></h3>
            </a>
        </li>
      <?php endforeach; ?>
      <?php 
        }
      ?>
    </ul>  
    <a href="<?php echo get_post_type_archive_link('article') ?>" class="index_btn">
      更多<?php echo $objArticle->labels->singular_name; ?>
    </a>
</div>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="443995983009462"
  theme_color="#eac960"
  logged_in_greeting="日安！有什麼需要狸長幫忙的嗎？"
  logged_out_greeting="日安！有什麼需要狸長幫忙的嗎？">
</div>

<?php get_footer(); ?>