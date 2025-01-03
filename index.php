<?php
include 'includes/header.php';

// Include the carousel data
include 'assets/data/carouselData.php'; // Assuming your dataset is in this file
?>

<div class="container mt-5">
    <!-- Two-Column Section -->
    <div class="row align-items-center">
        <!-- Text Section -->
        <div class="col-md-6">
            <h1>Welcome to GWH Maintenance</h1>
            <p>
                With over 10 years of experience in property and garden maintenance, GWH Maintenance is dedicated to 
                providing reliable, professional services across Wrexham, Chester, and the Wirral. Let us help you 
                transform and maintain your space with precision and care.
            </p>
            <a href="about.php" class="btn btn-primary">Learn More</a>
        </div>

        <!-- Image Section -->
        <div class="col-md-6 text-center">
            <img src="assets/images/index.jpeg" alt="About Us Image" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Colored Container -->
    <div class="mt-5 p-4 text-white" style="background-color: #007bff; border-radius: 10px;">
        <h2 class="text-center">Why Choose Us?</h2>
        <p class="text-center">
            Whether it’s a kitchen backsplash, a garden transformation, or regular maintenance, GWH Maintenance 
            provides expert services tailored to your needs. Experience exceptional quality and unmatched care 
            with every project.
        </p>
    </div>
</div>

<!-- Carousel Section -->
<div class="container mt-4">
    <h2 class="text-center">Our Services</h2>
    <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($carouselData as $index => $slide): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $slide['image']; ?>" class="d-block w-100 img-fluid" alt="<?php echo $slide['title']; ?>">
                    <div class="carousel-caption">
                        <h5><?php echo $slide['title']; ?></h5>
                        <!-- Both tagline and description added here -->
                        <p 
                            class="carousel-description"
                            data-tagline="<?php echo $slide['tagline']; ?>" 
                            data-description="<?php echo $slide['description']; ?>">
                            <?php echo $slide['description']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>