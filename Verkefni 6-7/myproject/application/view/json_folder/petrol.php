<div class="container">
    <div class="box">
        <table>
            <tbody>
            <td>Fyrirtæki</td>
            <td>Bensin</td>         
            <td>Diesel</td>
            <td>Staðsetning</td>

            <?php 

                foreach ($json->results as $value) 
                {?>
                    <tr>
                        <td><?php  echo $value->company;  ?></td> 
                        <td><?php  echo $value->bensin95;  ?></td>     
                        <td><?php  echo $value->diesel;  ?></td>     
                        <td><?php  echo $value->name;  ?></td>   
                    </tr> 

                <?php }  ?>

               
            </tbody>
        </table>
    </div>
</div>


 