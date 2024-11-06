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
            $images = glob('images/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE); // Get all images in the "images" folder
        
        if ($images) {
            foreach ($images as $image) {
                echo "<img src='$image' alt='Uploaded Image'>";
            }
        } else {
            echo "<p>No images uploaded yet.</p>";
        }
            
        ?>
    </div>

    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const images = $('#slideshow img'); // Selecting all image in the slideshow
            const imageCount = images.length;

            if (imageCount > 0) {
                images.eq(currentIndex).addClass('active'); // Show First Image

                setInterval(function() {
                    images.eq(currentIndex).removeClass('active'); // Hide the current image
                    currentIndex = (currentIndex + 1) % imageCount; // Move to the next image
                    image.eq(currentIndex).addClass('active'); // Show the next image
                }, 2000); // Change every 2 seconds
            }
        });
    </script>
</body>
</html>