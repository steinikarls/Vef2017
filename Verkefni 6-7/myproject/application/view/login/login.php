<div class="container">
    <div class="box">
        <table>
            <tbody>
               <form action="<?php echo URL; ?>login/loginRegister" method="POST">
                  <label>  Register  </label>
                  <br></br>
                  <label>  Nafn  </label>
                  <input type="text" name="name" value="" required />
                  <label>  Netfang </label>
                  <input type="text" name="email" value="" required />
                  <label>  Password  </label>
                  <input type="text" name="password" value="" required />
                  <input type="submit" name="register" value="Submit" />
               </form>
            </tbody>
         </table>
         <table>
            <tbody>
               <form action="<?php echo URL; ?>login/login" method="POST">
                  <label>  Login  </label>
                  <label>  Netfang </label>
                  <input type="text" name="email" value="" required />
                  <label>  Password  </label>
                  <input type="password" name="password" value="" required />
                  <input type="submit" name="login" value="Submit" />
               </form>
            </tbody>
         </table>
      </div>
   </div>

