<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Football Sports Club
 */

$football_sports_club_post_page_title =  get_theme_mod( 'football_sports_club_post_page_title', 1 );
$football_sports_club_post_page_meta =  get_theme_mod( 'football_sports_club_post_page_meta', 1 );
$football_sports_club_post_page_btn = get_theme_mod( 'football_sports_club_post_page_btn', 1 );
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>

  <div class="col-lg-6 col-md-6 col-sm-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the audio file.
          if ( ! empty( $audio ) ) {
            foreach ( $audio as $audio_html ) {
              echo '<div class="entry-audio">';
                echo $audio_html;
              echo '</div><!-- .entry-audio -->';
            }
          };
        };
      ?>
      <div class="serv-cont">
        <?php if ($football_sports_club_post_page_meta == 1 ) {?>
          <div class="meta-info-box my-2">
            <span class="entry-author"><?php esc_html_e('BY','football-sports-club'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
            <span class="ml-2"></i><?php echo esc_html(get_the_date()); ?></span>
          </div>
        <?php }?>
        <div class="post-summery mt-2">
          <?php if ($football_sports_club_post_page_title == 1 ) {?>
            <?php the_title('<h3 class="entry-title pb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>');?>
          <?php }?>
          <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
          <?php if ($football_sports_club_post_page_btn == 1 ) {?>
            <a href="<?php the_permalink(); ?>" class="btn-text"><?php esc_html_e('Read More','football-sports-club'); ?></a>
          <?php }?>
        </div>
      </div>
    </article>
  </div>