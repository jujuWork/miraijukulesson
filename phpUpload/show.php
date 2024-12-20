<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slideshow</title>

    <link rel="stylesheet" href="styles.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Uploaded Images Slideshow</h2>
    <div id="slideshow">
        <?php
            $images = glob('images/*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Get all images in the "images" folder
        
        if ($images) {
            foreach ($images as $image) {
                $safeImagePath = htmlspecialchars($image);
                echo "<img src='$safeImagePath' alt='Uploaded Image'>";
            }
        } else {
            echo "<p>No images uploaded yet.</p>";
        }
            
        ?>
    </div>
        <!-- JQuery code to implement slideshow -->
    <script>
        $(document).ready(function() {
            const images = $('#slideshow img'); // Selecting all image in the slideshow
            let currentIndex = 0; // Track the current image index
            const imageCount = images.length;

            if (imageCount > 0) {
                images.eq(currentIndex).show; // Show First Image

                setInterval(function() {
                        images.eq(currentIndex).fadeOut(500); // Hide the current image with fade out effect
                        currentIndex = (currentIndex + 1) % imageCount; // Move to the next image
                        images.eq(currentIndex).fadeIn(500); // Show the next image with faded in effect
                }, 3000); // Change every 3 seconds
            }
        });
    </script>
</body>
</html>