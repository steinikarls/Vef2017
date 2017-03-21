<?php
session_start();
if (isset($_SESSION['valid'])) {
	header('location: ' . URL . 'login/index');
	exit();
    
}
?>
<div class="container">
    <div class="box">
        <table>
            <tbody>
               <form action="<?php echo URL; ?>login/addImage" method="POST">
                  <label>  Myndheiti  </label>
                  <input type="text" name="myndaheiti" value="" required />
                  <label>  Slóð á mynd </label>
                  <input type="text" name="link" value="" required />
                  <input type="hidden" name="email" value="<?php echo $email ?>" required />
                  <input type="hidden" name="password" value="<?php echo $password ?>" required />
                  <input type="submit" name="login" value="Submit" />
               </form>
            </tbody>
         </table>
      </div>
   </div>
   <div class="container">
    
    <!-- main content output -->
    <div class="box">
        <table>
            <tbody>
            <?php foreach ($loginImage as $Myndir) { ?>
                <tr>
                    <h1><a href="<?php echo URL ."Login/deleteImage/?myndaheiti="?><?php echo htmlspecialchars($Myndir->myndaheiti);?>"><?php echo $Myndir->myndaheiti;?></a></h1>
                    <img class="img-responsive portfolio-item" src="<?php echo $Myndir->link?>" alt="Random image" height="200" width="200">
                                  
                </tr>

            <?php } ?>

            </tbody>
        </table>
        

    </div>
</div>
<div class="container">
    
    <!-- main content output -->
    <div class="box">
        <table>
            <tbody>
            
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $email;?></td>                             
                </tr>
                <form action="<?php echo URL; ?>login/edidUser" method="POST">
                  <label>    Breyta um nafn    </label>
                  <input type="text" name="newname" value="" required />               
                  <input type="hidden" name="name" value="<?php echo $name ?>" required />
                  <input type="hidden" name="email" value="<?php echo $email ?>" required />
                  <input type="hidden" name="password" value="<?php echo $password ?>" required />
                  <input type="submit" name="login" value="Submit" />
               </form>

            

            </tbody>
        </table>
        

    </div>
</div>




