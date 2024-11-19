<?php
get_header(); // Inclui o cabeçalho (header.php)
?>

<main>
    <h1>Bem-vindo ao Meu Tema Básico</h1>
    <p>Este é um tema simples para começar o desenvolvimento de temas no WordPress.</p>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Leia mais</a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>
</main>

<?php
get_footer(); // Inclui o rodapé (footer.php)
?>
