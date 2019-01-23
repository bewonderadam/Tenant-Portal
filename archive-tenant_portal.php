<?php get_header(); ?>
<?php if( is_user_logged_in() ) : ?>
  <?php $terms = get_terms( array(
    'taxonomy' => 'tenant_portal_categories',
    'hide_empty' => 0,
    'order_by' => 'name',
  ) );
  foreach ($terms as $term) : ?>
    <article>
      <a class="category-dropdown"><h3><?php echo $term->name; ?></h3></a>
      <div class="content-container">
        <div class="content-inner">
          <div class="content">
            <h4>Click a file to view/download</h4>
            <div class="articles">
              <?php $args = array(
                'post_type' => 'tenant_portal',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'tenant_portal_categories',
                    'field' => 'id',
                    'terms' => $term->term_id,
                    'include_children' => false
                  ),
                ),
              );
              $posts = get_posts( $args );
              foreach( $posts as $post ) : setup_postdata( $post ); ?>
                <?php $file = get_field( 'file_upload' );
                if( $file ) : ?>
                  <article>
                    <a href="<?php echo $file['url']; ?>"><?php the_title(); ?></a>
                  </article>
                <?php endif; ?>
              <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </article>
  <?php wp_reset_postdata(); endforeach; ?>
<?php else :
  $siteUrl = get_bloginfo( 'url' );
  $loginUrl = $siteUrl . '/tenant_portal/';
  $args = array(
    'echo'           => true,
    'remember'       => true,
    'redirect'       => $loginUrl,
    'form_id'        => 'loginform',
    'id_username'    => 'user_login',
    'id_password'    => 'user_pass',
    'id_remember'    => 'rememberme',
    'id_submit'      => 'wp-submit',
    'label_username' => __( 'Username' ),
    'label_password' => __( 'Password' ),
    'label_remember' => __( 'Remember Me' ),
    'label_log_in'   => __( 'Sign In' ),
    'value_username' => '',
    'value_remember' => false
  );
  wp_login_form($args); ?>
<?php endif; ?>
<?php get_footer(); ?>
