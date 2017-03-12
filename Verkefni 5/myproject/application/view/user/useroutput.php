<div class="container">
    
    <!-- main content output -->
    <div class="box">
        <table>
            <tbody>
            <?php foreach ($userimages as $Myndir) { ?>
                <tr>
                    <h1><?php echo $Myndir->filename;?></h1>
                    <img class="img-responsive portfolio-item" src="<?php echo URL; ?>img/<?php echo $Myndir->link?>" alt="Random image" height="200" width="200">
                    <figure><?php  echo $Myndir->caption ;?></figure>                 
                </tr>

            <?php } ?>

            </tbody>
        </table>
        

    </div>
</div>
