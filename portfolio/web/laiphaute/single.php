<?php get_header(); ?>

    <!-- 文章內容 -->
    <div class="article_wrap">
        

<?php if ( have_posts() ) :while ( have_posts() ) :the_post(); ?>
        <!-- 文章主要資訊 -->
        <div class="top">
            <div class="info">
							<?php
								$categories = get_the_category();
							?>
                <div class="category">
									<a href="＃"><?php echo $categories[0]->name; ?></a>
								</div>
                <div class="date"><?php echo get_post_time('Y.m.d') ?></div>
                <div class="edit_time"><?php echo get_the_modified_date('Y.m.d').' '.get_the_modified_time('H:i:s'); ?></div>
            </div>
            <h1 class="title"><?php the_title() ?></h1>
						
						<?php
							if( have_rows('single_author') ):
						?>
						<div class="info author">
							<?php while ( have_rows('single_author') ) : the_row(); ?>
								<span class="item"><?php the_sub_field('author_type'); ?></span>
								<span class="name"><?php the_sub_field('author_name'); ?></span>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
            
        </div>
        <!-- 文章主要資訊 -->
        
        <!-- 文章編輯器內容 -->
        <div class="article">
						<?php the_content(); ?>
					
            <!-- <img src="img/article_p1.jpg" alt="">
            <blockquote>
                引言：大家都認為，吸食毒品是一件非常危險的事，毒品上癮常常會危害一個人的一生，但其實你不知道的是，對於糖上癮的人，其大腦成癮的反應，跟毒品上癮者的腦部反應是非常相似的，甚至有研究指出糖的成癮性比可卡因（一種毒品）還高八倍。
            </blockquote>

            <h2>h2段落標題：你知道吃糖也會上癮嗎?</h2>
            <p>
                吃了糖後，大腦會釋放開心物質，所以才會想要一直吃糖。這種大腦的獎勵行為讓不少科學家認為，糖像毒品一樣容易上癮。即便科學家們尚未達成共識，但若以腦神經及人類行為的角度來說，糖的確會讓人上癮，從而導致三酸甘油酯過高、心血管疾病、糖尿病代謝症候群、<a href="#">三種特定癌症</a>等健康問題。<br>
                糖上癮的程度取決於你會為了吃到糖，而付出多少努力，如金錢。因此法國、墨西哥、美國、智利、英國、匈牙利、比利時、丹麥、愛爾蘭、菲律賓、南非、新加坡、阿拉伯聯合大公國紛紛<a href="#">開徵糖稅</a> 。
            </p>

            <div class="blockline"></div>

            <h3>h3中標，字級25px。</h3>
            <h4>h4小標，字級20px。</h4>
            <h5>h5小字，字級16px。</h5>
            <h6>h6小字，字級14px，用於補充說明。</h6> -->

        </div>
        <!-- 文章編輯器內容 -->

				<!-- 參考資料 -->
				<?php if (have_rows('source') ): ?>
        <div class="ref">
            <div class="open">參考資料</div> 
            <div class="in">
                <ul>
									<?php
											while ( have_rows('source') ) : the_row();
									?>
										<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('name'); ?></a></li>
									<?php endwhile;?>
                </ul>
            </div>
				</div>
				<?php endif; ?>

        <!-- 文章標籤 -->
					<?php
						$posttags = get_the_tags();
						if ($posttags) :
					?>
        		<div class="tag_box">
							<?php
									foreach($posttags as $tag) {
							?>
								<span><?php echo $tag->name ?></span>
							<?php
									}
							?>
        		</div>
					<?php	endif; ?>
    
				<!-- 閱讀更多 -->
				<?php
					$readMoreType = get_field('read_more_type');
					if ($readMoreType && $readMoreType !== 'none' ): 
				?>
        <div class="related">
            <div class="t">閱讀更多</div>
            <ul class="index_article">
							<?php 
								if ($readMoreType === 'manual') {
									// 手動
									$posts = get_field('read_more_pick');
									if( $posts ):
										foreach( $posts as $post):
							?>
								<li>
                    <a href="<?php echo get_the_permalink( $post->ID ); ?>">
                			<img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
                			<h3><?php echo get_the_title( $post->ID ); ?></h3>
                    </a>
                </li>	
							<?php endforeach; endif; ?>
							<?php
								} else {
									// 自動
									$order = '';
									if ($resource_type === 'date') {
										$order = 'date';
									} else {
										$order = 'ID';
									}
									$post_list = get_posts( array(
              				'post_type'    => array('news', 'project', 'article'),
											'posts_per_page'	=> get_field('read_more_auto_number'),
													'orderby'       	=> $order, 
													'order'         	=> 'DESC'
									) );
									foreach ( $post_list as $post ) :
							?>
							<?php endforeach; ?>
								<li>
										<a href="<?php echo get_the_permalink( $post->ID ); ?>">
											<img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
											<h3><?php echo get_the_title( $post->ID ); ?></h3>
										</a>
								</li>	
							<?php } ?>
            </ul>
    
        </div>
				<?php endif; ?>
    </div>
<?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>