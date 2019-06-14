<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="latest-container">

<?php
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
		<?php the_content() ?>
	
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
?>
    
    <?php if (have_posts()): ?>

    <p class="sub-title"></p>

    <ul class="articles">

     <?php while(have_posts()): the_post(); ?>
      <h2><?php the_title(); ?></h2>
     
      
      <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <?php the_content ()?>
          <p class="article-content"><?php the_excerpt(); ?>ここに記事が表現されます。<br>
        ここに記事が表現されます。</p>
        <p class="readMore">        
             <a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
      </li>
      <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <?php the_content ()?>
          <p class="article-content"><?php the_excerpt(); ?>ここに記事が表現されます。<br>
        ここに記事が表現されます。</p>
        <p class="readMore">        
             <a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
      </li>
      <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <?php the_content ()?>
          <p class="article-content"><?php the_excerpt(); ?>ここに記事が表現されます。<br>
        ここに記事が表現されます。</p>
        <p class="readMore">        
             <a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
      </li>
      <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <?php the_content ()?>
          <p class="article-content"><?php the_excerpt(); ?>ここに記事が表現されます。<br>
        ここに記事が表現されます。</p>
        <p class="readMore">        
             <a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
      </li>
      <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <?php the_content ()?>
          <p class="article-content"><?php the_excerpt(); ?>ここに記事が表現されます。<br>
        ここに記事が表現されます。</p>
        <p class="readMore">        
             <a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
      </li>
      <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <?php the_content ()?>
          <p class="article-content"><?php the_excerpt(); ?>ここに記事が表現されます。<br>
        ここに記事が表現されます。</p>
        <p class="readMore">        
             <a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
      </li>
      

    <?php endwhile; ?>

    </ul>

    <?php else: ?>
      <p class="sub-title">No Posts Yet</p>
    <?php endif; ?>
  </main>


</div>

  <!-- お問い合わせフォームを読み込む -->
  <?php get_template_part('contact'); ?>

<!-- footer.phpを読み込む -->
  <?php get_footer(); ?>