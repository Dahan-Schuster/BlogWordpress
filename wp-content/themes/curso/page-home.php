<?php get_header() ?>
<div class="content-area">
    <main>
        <section class="slides">Slides</section>
        <section class="services">Serviços</section>
        <section class="middle-area">
            <div class="row">
                <aside class="sidebar col-md-3 h-100">
                    <?php get_sidebar('home') ?>
                </aside>
                <div class="news col-md-9">
                    <h2>Página inicial</h2>
                    <hr>
                    <p>Esta é a página inicial do site</p>
                </div>
            </div>
        </section>
        <section class="map">Mapa</section>
    </main>
</div>
<?php get_footer() ?>