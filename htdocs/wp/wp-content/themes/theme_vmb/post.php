<?php
  $post_vmb = new WP_Query(array(
  'post_type'=>'post',
  'category-name' => 'tin-tuc',
  'post_status'=>'publish',
  'cat' => 1,
  'orderby' => 'ID',
  'order' => 'DESC',
  // 'posts_per_page'=> 
));
  ?>
  <section class="page-section bg-light" id="portfolio">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">BÀI ĐĂNG
        <i class="fas fa-users" style="margin-left:10px"></i>
      </h2>
      <h3 class="section-subheading text-muted"></h3>
    </div>
    <div class="row">
  <?php 
    while ($post_vmb->have_posts()) : $post_vmb->the_post();
        echo "<div class='col-lg-4 col-sm-6 mb-4'>";
        echo "<div class='portfolio-item'>";
        // echo "<a hidden class='portfolio-link' data-toggle='modal' href='#id".the_id()."'>";
        echo "<div class='portfolio-hover'>";
        echo "<div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>";
        echo "</div>";
        echo get_the_post_thumbnail($post->id, 'thumbnail', array( 'class' =>'thumnail') );
        // echo '<div class="avatar_gs" style="background-image:url('."'".$dt["Avatar"]."'".')"></div>';
        echo "</a>";
        echo "<div class='portfolio-caption'>";
        echo "<div class='portfolio-caption-heading'>".the_title()."</div>";
        // echo "<div class='portfolio-caption-subheading text-muted'>Chuyên ngành: ".$dt['ChuyenNganh']."</div>";
        // echo "<div class='portfolio-caption-subheading text-muted'>".$dt['NoiLamViec']."</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      endwhile ; wp_reset_query() ;
  ?>
    </div>
  </div>
</section>

<!-- MODAL LIST -->
 <?php while ($post_vmb->have_posts()) : $post_vmb->the_post();
    echo "<div class='portfolio-modal modal fade' id='id".the_id()."'>";
      echo "<div class='modal-dialog'>";
        echo "<div class='modal-content'>";
          // echo "<div class='close-modal' data-dismiss='modal'><img src='assets/img/close-icon.svg' alt='Close modal' /></div>";
          echo "<div class='container'>";
            echo "<div class='row justify-content-center'>";
              echo "<div class='col-lg-8'>";
                echo "<div class='modal-body'>";
                  echo "<h2 class='text-uppercase mb-5'>".the_title()."</h2>";
                    echo "<p>".the_content()."</p>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
  endwhile ; wp_reset_query() ;
?>