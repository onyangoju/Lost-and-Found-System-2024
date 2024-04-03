<div class="col-12">
    <div class="card">
        <div class="card-body pt-4">
            <div class="container-fluid page-content">
                <?php 
                if (is_file(base_app.'pages/about.html')) {
                    $htmlContent = file_get_contents((base_app.'pages/about.html'));
                    // Match <img> tags and replace them with their content
                    $htmlContent = preg_replace_callback('/<img[^>]+>/', function($matches) {
                        $imgTag = $matches[0];
                        // Extract src attribute value
                        preg_match('/src="([^"]+)"/', $imgTag, $srcMatch);
                        if (isset($srcMatch[1])) {
                            $imagePath = $srcMatch[1];
                            // Load image content
                            $imageContent = file_get_contents(base_app . $imagePath);
                            // Base64 encode the image content
                            $base64 = base64_encode($imageContent);
                            // Replace the <img> tag with an <img> tag containing the base64 encoded image
                            return '<img src="data:image/jpeg;base64,' . $base64 . '">';
                        }
                        return $imgTag; // Return original tag if src attribute is not found
                    }, $htmlContent);
                    echo $htmlContent;
                }
                ?>
            </div>
        </div>
    </div>
</div>
