<?php
/*
Template Name: Pàgina contacte
*/
get_header();
?>

<div class="container mt-5">
    <img class="rounded-4 img-fluid mb-4" src="<?php echo get_template_directory_uri(); ?>/img/Image.png" alt="Imagen">
    
    <div class="form-container">
        <h2>Consultanos tus dudas</h2>
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
        <a href="<?php echo home_url(); ?>" class="back-link">Back to Home</a>
    </div>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.1586716387656!2d2.6867547115867714!3d39.60110797146384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297935d441c9571%3A0xa01dc49e4565742f!2sEs%20Liceu!5e0!3m2!1sca!2ses!4v1737103493777!5m2!1sca!2ses" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<?php get_footer(); ?>
