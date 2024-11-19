<?php
get_header(); // Inclui o cabeçalho (header.php)
?>

<main>
    <h1>Últimas Postagens</h1>
    <p>Confira os artigos mais recentes do nosso blogss!</p>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'thumbnail']); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Leia mais</a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Nenhuma postagem encontrada. Adicione conteúdo paras começar!</p>
    <?php endif; ?>
</main>

<?php
get_footer(); // Inclui o rodapé (footer.php)
?>
