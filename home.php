<?php get_header(); ?>

<main>
    <div class="box">
        <div class="latest_post">
            <h5><strong>Latest Posts</strong></h5>
        </div>

        <div class="row">
            <?php
            // Obtener la página actual para la paginación
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // Configurar la consulta de WordPress para obtener los últimos posts
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 10, // Número de posts por página
                'paged'          => $paged, // Soporte para paginación
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="post">
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                            if (has_post_thumbnail()) {
                                $post_thumbnail_id = get_post_thumbnail_id();
                                $post_thumbnail_url = wp_get_attachment_image_src($post_thumbnail_id, 'large')[0]; // Obtiene la URL de la imagen destacada
                            } else {
                                $post_thumbnail_url = get_template_directory_uri() . '/img/default-image.png'; // Imagen por defecto
                            }
                            ?>
                            <img src="<?php echo esc_url($post_thumbnail_url); ?>" alt="<?php the_title(); ?>" class="card" style="width:100%; height:auto;">
                        </a>

                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php the_excerpt(); ?></p>
                        <p><span class="badge text-bg-light"><?php the_category(', '); ?></span></p>
                        <p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/author.png" alt="Author">
                            <?php the_author(); ?> - <?php the_time('F j, Y'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>

                <!-- Paginación -->
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total'     => $query->max_num_pages,
                        'current'   => $paged,
                        'prev_text' => __('« Anterior'),
                        'next_text' => __('Siguiente »'),
                    ));
                    ?>
                </div>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
