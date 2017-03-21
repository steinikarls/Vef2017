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

            print_r($json);
            /*
        	    $counti = 0;
				foreach ($json as $key) 
				{	
    			$counti+= count($key);
				} 
				//echo $count;
				for ($i=0; $i < $counti; $i++) 
				{                    
					foreach ($json as $key => $value) 
				    { 
                        $countu=0;
                        foreach ($value as $deepkey) 
                        {   
                            $countu+= count($deepkey);
                        }
                        echo $value[$i]['crust'];
                        for ($u=0; $u < $countu ; $u++) 
                        { 					    
                            echo $value[$i]['toppings'][$u];
  	                  	}	  
                        echo $value[$i]['status'];      
                    }	     

                 }     */ 
               	?>
            </tbody>
        </table>
    </div>
</div>


 