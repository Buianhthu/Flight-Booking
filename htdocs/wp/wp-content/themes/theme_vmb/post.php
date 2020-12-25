<?php
  $post_vmb = new WP_Query(array(
      'post_type'=>'post',
      'category-name' => 'tin-tuc',
      'post_status'=>'publish',
      'cat' => 1,
      'orderby' => 'ID',
      'order' => 'DESC',
    ));

  function display_post($id, $img, $title){
    $html = '<div class="col-lg-4 col-sm-6 mb-4">
              <div class="portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#id'.$id.'">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-plus fa-3x"></i>
                    </div>
                  </div>
                  <img width="250" height="250" src="'.$img.'" alt="" />
                </a>
                <div class="portfolio-caption">
                  <div class="portfolio-caption-heading">'.$title.'</div>
                </div>
              </div>
            </div>';
    return $html;
  }

  function first_thumbnail_post($id) {
    $i = 1;
    global $post, $posts;
    $first_img_featured = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if(empty($matches[$i][0])){
      $first_img_featured = $matches[$i++][0]; 
    } 
    else{
      $first_img_featured = $matches[$i][0];
    }
    return $first_img_featured;
  }

  function checkThumbnail($id){
      if(has_post_thumbnail()){
          get_the_post_thumbnail_url($id, 'post-thumbnail');
      } 
      else { ?>
        <img src="<?php echo first_thumbnail_post($id); ?>" />
      <?php }
  } ?>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    <div class="row">
    <?php 
      while ($post_vmb->have_posts()) : $post_vmb->the_post();
        echo display_post(get_the_id(), checkThumbnail(get_the_id()), get_the_title());
    endwhile ; wp_reset_query() ;
  ?>
</div>
</div>
</section>


<?php
    $post_vmb = new WP_Query(array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'cat' => 2,
      'orderby' => 'ID',
      'order' => 'DESC',
    ));

    // function showPost(id, title, img){
    //     $html = '';
    //     $html.= '<div class="portfolio-item"><a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"><div class="portfolio-hover"><div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div></div><img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" /></a><div class="portfolio-caption"><div class="portfolio-caption-heading">Explore</div><div class="portfolio-caption-subheading text-muted">Graphic Design</div></div></div>';
    // }
?>
<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <?php 
                    while ($post_vmb->have_posts()) : $post_vmb->the_post();
                    echo "<div class='col-lg-4 col-sm-6 mb-4'>";
                        echo "<div class='portfolio-item'>";
                            echo "<a class='portfolio-link' data-toggle='modal' href='#id".get_the_id()."'>";
                                echo "<div class='portfolio-hover'>";
                                    echo "<div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>";
                                echo "</div>";
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_id(), 'post-thumbnail');
                                // echo "<div class='img_post'>";
                                // echo get_the_post_thumbnail(get_the_id(), 'post-thumbnail', array( 'class' =>'post-thumbnail',) );
                                // echo "</div>";
                                echo "<img width='250' height='250' src='".$thumbnail_url."'/>";
                                // echo '<div class="img-post" style="background-image:url('."'".get_the_post_thumbnail(get_the_id(), 'post-thumbnail', array( 'class' =>'post-thumbnail', ) )."'".')"></div>';
                            echo "</a>";
                            echo "<div class='portfolio-caption'>";
                                echo "<div class='portfolio-caption-heading'>".the_title()."</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        endwhile ; wp_reset_query() ;
                    ?>
                        </div>
                    </div>
                </section>
                    <!-- <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        <!-- Modal 2-->
  <?php 
  // if ($_GET['child'] > 0){
  //           echo "<tr>
  //           <td><strong>Trẻ em:</strong></td>
  //           <td><strong>".$_GET['child']."</strong>&nbsp;x</td>
  //           <td>".displayVNMoney($_GET['money'])."VND</td>
  //           <td>".displayVNMoney($_GET['child'] * $_GET['money'])."VND</td>
  //           </tr>";
  //       }
  //       if ($_GET['baby'] > 0){
  //           echo "<tr>
  //           <td><strong>Em bé:</strong></td>
  //           <td><strong>".$_GET['baby']."</strong></td>
  //           <td>0</td>
  //           <td>0VND</td>
  //           </tr>";
  //       }
    while ($post_vmb->have_posts()) : $post_vmb->the_post();   
        echo "<div class='portfolio-modal modal fade' id='id".get_the_id()."' tabindex='-1' role='dialog' aria-hidden='true'>";
            echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
                    echo "<div class='close-modal' data-dismiss='modal'><img src='". get_template_directory_uri()."/assets/img/close-icon.svg' alt='Close modal' /></div>";
                    echo "<div class='container'>";
                        echo "<div class='row justify-content-center'>";
                            echo "<div class='col-lg-8'>";
                                echo "<div class='modal-body'>";
                                    // <!-- Project Details Go Here-->
                                    echo "<h2 class='text-uppercase'>".the_title()."</h2>";
                                    // echo "<p class='item-intro text-muted'>Lorem ipsum dolor sit amet consectetur.</p>";
                                    echo "<p>".the_content()."</p>";
                                    echo "<ul class='list-inline'>";
                                        echo "<li>Date: January 2020</li>";
                                        echo "<li>Client: Explore</li>";
                                        echo "<li>Category: Graphic Design</li>";
                                    echo "</ul>";
                                    echo "<button class='btn btn-primary' data-dismiss='modal' type='button'>";
                                        echo "<i class='fas fa-times mr-1'></i>";
                                        echo "CLOSE";
                                    echo "</button>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        endwhile ; wp_reset_query() ;
    ?>    