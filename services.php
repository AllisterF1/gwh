<?php 
// Include the services array
include 'assets/data/services.php';
include 'includes/header.php'; 
?>

<div class="container mt-5">
    <h1 class="text-center mb-5">Our Services</h1>
    <div class="row g-4">
        <?php 
        $index = 0; // To track whether it's an odd or even index
        foreach ($services as $serviceName => $serviceDetails): 
            $index++;
            $isOdd = $index % 2 !== 0; // Check if the index is odd
        ?>
            <div class="col-lg-12">
                <div class="row align-items-center <?php echo $isOdd ? '' : 'flex-row-reverse'; ?>">
                    <!-- Image Section -->
                    <div class="col-md-6">
                        <img src="assets/images/<?php echo strtolower(str_replace(' ', '_', $serviceName)); ?>.jpeg" 
                             alt="<?php echo $serviceName; ?>" 
                             class="img-fluid rounded shadow">
                    </div>

                    <!-- Text Section -->
                    <div class="col-md-6">
                        <h5 class="text-uppercase text-muted"><?php echo $serviceDetails['tagline']; ?></h5>
                        <h2 class="fw-bold"><?php echo $serviceName; ?></h2>
                        <p><?php echo $serviceDetails['description']; ?></p>
                        <ul>
                            <?php foreach ($serviceDetails['tasks'] as $task): ?>
                                <li><?php echo $task; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>