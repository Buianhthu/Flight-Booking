<!-- Footer-->

<?php
$post_vmb = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => 1,
//thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> 5));
?>
<?php $i=1; while ($post_vmb->have_posts()) : $post_vmb->the_post(); ?>
<?php if($i==1){ ?>
<div class="bai_dau_tien">
    <a href="<?php the_permalink() ;?>" class="anh_bai_viet">     
    </a>
    <a href="<?php the_permalink() ;?>" class="tieu_de_bai_viet"><?php the_title() ;?></a>
    <p class="trich_dan">
        <?php the_excerpt() ;?>
    </p>
    <p> <?php the_content() ?> </p>
</div>
<?php } else { ?>
<div class="cac_bai_con_lai"><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a> </div>
<?php } ?>
<?php $i++; endwhile ; wp_reset_query() ;?>


<?php get_the_post_thumbnail("thumbnail",array( "title" => get_the_title(),"alt" => get_the_title() ));?>