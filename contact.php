<?php include 'includes/header.php'; ?>

<div class="container mt-5">
    <h1>Contact Us</h1>

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">Your message has been sent successfully. We'll get back to you shortly!</div>
    <?php elseif (isset($_GET['error'])): ?>
        <?php if ($_GET['error'] === '1'): ?>
            <div class="alert alert-danger">There was an error sending your message. Please try again later.</div>
        <?php elseif ($_GET['error'] === 'invalid'): ?>
            <div class="alert alert-danger">Please fill in all fields correctly.</div>
        <?php endif; ?>
    <?php endif; ?>

    <form action="../process_form.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>