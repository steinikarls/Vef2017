<div class="container">
    
        <form action="<?php echo URL; ?>user/search" method="POST">
            <label>Search</label>
            <input type="text" name="search" value="" required />
            <input type="submit" name="submit_search" value="Submit" />
        </form>
    <!-- main content output -->
    <div class="box">
        <h3>Amount of Images <?php echo $AmountOfMyndir; ?></h3>
        <table>          
            <tbody>
                <?php foreach ($image as $Myndir) { ?>
                    <tr>
                        <td><a href="<?php echo URL ."user/detail/?filename="?><?php echo htmlspecialchars($Myndir->filename);?>&caption=<?php echo htmlspecialchars($Myndir->caption);?>&link=<?php echo htmlspecialchars($Myndir->link);?>"><?php if (isset($Myndir->filename)) echo htmlspecialchars($Myndir->filename, ENT_QUOTES, 'UTF-8'); ?></a></td>                  
                    </tr>
                <?php } ?>
                <?php foreach ($users as $notandi) { ?>
                    <tr>
                        <td><a href="<?php echo URL ."user/notandi/?users_id="?><?php echo htmlspecialchars($notandi->users_id);?>"><?php if (isset($notandi->name)) echo htmlspecialchars($notandi->name, ENT_QUOTES, 'UTF-8'); ?></a></td>                  
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
