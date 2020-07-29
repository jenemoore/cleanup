<?php

require_once('../wp-blog-header.php');
query_posts('&showposts=-1&order=ASC');

while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<br />

<?php endwhile; ?>