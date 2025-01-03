document.addEventListener("DOMContentLoaded", function () {
    const updateDescriptions = () => {
        const descriptions = document.querySelectorAll(".carousel-description");
        const isPhone = window.innerWidth <= 576; // Define phone breakpoint (576px for Bootstrap)

        descriptions.forEach((desc) => {
            if (isPhone) {
                // Show tagline on phones
                desc.textContent = desc.dataset.tagline;
            } else {
                // Show full description on larger screens
                desc.textContent = desc.dataset.description;
            }
        });
    };

    // Run on load
    updateDescriptions();

    // Update dynamically on resize
    window.addEventListener("resize", updateDescriptions);
});