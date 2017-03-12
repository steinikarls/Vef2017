<div class="container">
    <?php  if (isset($search)){?>
    <!-- main content output -->
    <div class="box">
        <table>
            <tbody>
            <?php foreach ($search as $found) { ?>
                <tr>
                    <h1><?php echo $found->filename;?></h1>
                    <img class="img-responsive portfolio-item" src="<?php echo URL; ?>img/<?php echo $found->link?>" alt="Random image" height="200" width="200">
                    <figure><?php  echo $found->caption ;?></figure>                 
                </tr>

            <?php } ?>

            </tbody>
        </table>
        

    </div>
    <?php } ?>
</div>
