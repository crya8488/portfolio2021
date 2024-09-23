<?php get_header(); ?>
<div class="inner_page">

    <!-- 文章列表頁 -->
    <div class="article_list">
        
        <?php
          // echo get_post_type( get_the_ID() )
        ?>
        <div class="top">
            <?php $obj = get_post_type_object( get_post_type( get_the_ID() ) ); ?>
            <h2 class="title"><?php echo $obj->label; ?></h2>
            <h4><?php echo $obj->description; ?></h4>
        </div>


        
    
        <!-- 文章列表 -->
    
        <ul class="index_article" id="tab1">
          <?php
            $post_list = get_posts( array(
                'post_type'    => get_post_type( get_the_ID() ),
                'orderby'       	=> 'date', 
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
          <?php
            endforeach;
          ?>
        </ul>






    </div>
</div>
<?php get_footer(); ?>
