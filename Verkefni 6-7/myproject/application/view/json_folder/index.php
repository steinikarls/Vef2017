<div class="container">
    <div class="box">
        <table>
            <tbody>
            <form action="<?php echo URL; ?>Json/jsonSkrifari" method="POST">
            <label>  Myndheiti  </label>
            <input type="text" name="myndheiti" value="" required />
            <label>  Vefslóð á mynd  </label>
            <input type="text" name="link" value="" required />
            <input type="submit" name="submit_json" value="Submit" />
        	</form>
            <?php 
        	    $count = 0;
				foreach ($json as $key) 
				{	
    			$count+= count($key);
				} 
				//echo $count;
				for ($i=0; $i < $count; $i++) 
				{ 
					foreach ($json as $key => $value) 
					{ ?>
						<tr>
  	                  		<h1><?php  echo $value[$i]['myndheiti'];  ?></h1>
                    		<img class="img-responsive portfolio-item" src="<?php echo $value[$i]['link']?>" height="200" width="200">
                        </tr> 
               	<?php } }?>
            </tbody>
        </table>
    </div>
</div>


 