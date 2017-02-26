<div class="container">
    <h1>Image</h1>
    
    <div class="box">
        <h3>Add a Image</h3>
        <form action="<?php echo URL; ?>Images/addImage" method="POST">
            <label>imageName</label>
            <input type="text" name="imageName" value="" required />
            <label>imagePath</label>
            <input type="text" name="imagePath" value="" required />
            <label>imageText</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_image" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div class="box">
        <h3>List of Images (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>text</td>
                <td>Link</td>
                
            </tr>
            </thead>
            <tbody>
            <?php foreach ($Images as $Myndir) { ?>
                <tr>
                    <td><?php if (isset($Myndir->imageID)) echo htmlspecialchars($Myndir->imageID, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Myndir->imageName)) echo htmlspecialchars($Myndir->imageName, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($Myndir->imageText)) echo htmlspecialchars($Myndir->imageText, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($Myndir->imagePath)) { ?>
                            <a href="<?php echo htmlspecialchars($Myndir->imagePath, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($Myndir->imagePath, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
