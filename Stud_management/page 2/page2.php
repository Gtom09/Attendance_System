<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_page2.css">
    <script src="script_page2.js" defer></script>
    <link rel="website icon" href="icon.jpg">
    <title>Details</title>
</head>
<body>
<div class="animated-background"></div>
          
    <div class="container">
        <form action="upload_page2.php" id="inputForm" method="post" enctype="multipart/form-data">
            <div class="input-section">
                <h2>Enter Your Details</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="codeId">Code ID:</label>
                <input type="text" id="codeId" name="codeId" required>
                <label for="imageInput">Image (JPEG or PNG):</label>
                <input type="file" id="imageInput" name="imageInput" accept="image/jpeg, image/png" required>
                <button type="submit" name="submit" value="submit">Submit</button>
                <p id="error"></p>

        <font size="5.5"><center><?php if (isset($_GET['error'])): ?>
          <p><?php echo $_GET['error']; ?></p>
          <?php endif ?> </center></font>
           
           </div>    
        </div>
    </div>
</form>
</body>
</html>
