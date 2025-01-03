<?php
 include 'includes/header.php';


$content = include('assets/data/aboutData.php');
?>

<div class="container mt-5">
    <section class="about-us row align-items-center">
        <!-- Text Section -->
        <div class="col-lg-6 col-md-12">
            <h5 class="text-uppercase text-muted"><?php echo $content['subtitle']; ?></h5>
            <h2 class="fw-bold mb-4"><?php echo $content['title']; ?></h2>
            <p class="mb-4">
                <?php echo $content['description']; ?>
            </p>
            <a href="#learn-more" class="btn btn-outline-primary"><?php echo $content['button_text']; ?></a>
        </div>

        <!-- Image Section -->
        <div class="col-lg-6 col-md-12">
            <img src="<?php echo $content['image']; ?>" alt="Tom working in a garden" class="img-fluid rounded shadow">
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>