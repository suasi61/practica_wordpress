<?php get_header() ?>
<body>
    <header>
        <div class="Doe">
            <div class="Doe-2">
                <p><img src="img/Image (1).png" alt=""><strong>Jonathan Doe</strong></p>
                <p><small>Collaborator & Editor</small></p>
            </div>
            <div class="Doe-2">
                <p>Meet Jonathan Doe, a passionate writer and blogger with a love for
                    technology and travel. Jonathan holds a degree in Computer Science and
                    has spent years working in the tech industry, gaining a deep understanding 
                    of the impact technology has on our lives.
                </p>
                <div>
                    <img src="img/a-button.png" alt="">
                    <img src="img/a-button (1).png" alt="">
                    <img src="img/a-button (2).png" alt="">
                    <img src="img/a-button (3).png" alt="">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="posts">
            <div class="Latest_post">
                <h5><strong>Latest Post</strong></h5>
            </div>
            <section>
                <div class=row>
                <?php
                // Repetir el mismo post tres veces manualmente
                for ($i = 0; $i < 3; $i++): ?>
                    <div class="post">
                        <div>
                            <img src="img/Rectangle 38 (3).png" alt="" class="card">
                        </div>
                        <div class="color_span">
                            <span class="badge text-bg-light">Technology</span>
                        </div>
                        <div>
                            <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                        </div>
                        <div>
                            <p><img src="img/Image (4).png" alt=""> Ernis Smith  August 20, 2022</p>
                        </div>
                    </div>
                <?php endfor; ?>

            </section>
            <div class="segunda_serie_de_posts">
                <div class="post">
                    <div>
                        <img src="img/Rectangle 38 (3).png" alt="" class="card">
                    </div>
                    <div class="color_span">
                        <span class="badge text-bg-light">Technology</span>
                    </div>
                    <div>
                        <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                    </div>
                    <div>
                        <p><img src="img/Image (4).png" alt="">Ernis Smith  August 20, 2022</p>
                    </div>
                </div>
                <div class="post">
                    <div>
                        <img src="img/Rectangle 38 (4).png" alt="" class="card">
                    </div>
                    <div class="color_span">
                        <span class="badge text-bg-light">Technology</span>
                    </div>
                    <div>
                        <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                    </div>
                    <div>
                        <p><img src="img/Image (5).png" alt="">Eric Smith  August 20, 2022</p>
                    </div>
                </div>
                <div class="post">
                    <div>
                        <img src="img/Rectangle 38 (9).png" alt="" class="card">
                    </div>
                    <div class="color_span">
                        <span class="badge text-bg-light">Technology</span>
                    </div>
                    <div>
                        <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                    </div>
                    <div>
                        <p><img src="img/Image (2).png" alt="">Tracey Wilsown  August 20, 2022</p>
                    </div>
                </div>
            <div class="tercera_de_hosts">
                <div class="post">
                    <div>
                        <img src="img/Rectangle 38 (6).png" alt="" class="card">
                    </div>
                    <div class="color_span">
                        <span class="badge text-bg-light">Technology</span>
                    </div>
                    <div>
                        <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                    </div>
                    <div>
                        <p><img src="img/Image (1).png" alt="">Jason Francisco  August 20, 2022</p>
                    </div>
                </div>
                <div class="post">
                    <div>
                        <img src="img/Rectangle 38 (7).png" alt="" class="card">
                    </div>
                    <div class="color_span">
                        <span class="badge text-bg-light">Technology</span>
                    </div>
                    <div>
                        <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                    </div>
                    <div>
                        <p><img src="img/Image (3).png" alt="">Elizabeth Slavin  August 20, 2022</p>
                    </div>
                </div>
                <div class="post">
                    <div>
                        <img src="img/Rectangle 38 (8).png" alt="" class="card">
                    </div>
                    <div class="color_span">
                        <span class="badge text-bg-light">Technology</span>
                    </div>
                    <div>
                        <h5><strong>The Impact of Technology on the Workplace: How Technology is Changing</strong></h5>
                    </div>
                    <div>
                        <p><img src="img/Image (4).png" alt="">Ernie Smith  August 20, 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php get_footer() ?>
</html>