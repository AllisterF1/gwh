<?php
include 'includes/header.php';

// Include testimonials data
$testimonials = include 'assets/data/testimonialsData.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-5">What Our Clients Say</h1>

    <div class="row">
        <?php foreach ($testimonials as $testimonial): ?>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <p class="card-text"><i>"<?php echo $testimonial['text']; ?>"</i></p>
                        <p class="fw-bold">- <?php echo $testimonial['author']; ?></p>
                        <p class="text-warning">
                            <?php
                            $stars = floor($testimonial['rating']);
                            $halfStar = $testimonial['rating'] > $stars ? 1 : 0;
                            for ($i = 0; $i < $stars; $i++) {
                                echo '⭐';
                            }
                            if ($halfStar) {
                                echo '✨'; // Display a half-star
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>