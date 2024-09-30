<div  align:'center' class='outerform' style='margin-top: 50px;'>
        <div align:'left' class='formcontainer'>
          <div class='innerformcontainer' style="padding:10px;text-align: center;">
            <span class='login'>
              <b>LOGIN</b>
            </span>
            <div class='forminputs' style="padding:5px;margin: 30px;text-align: center;">
              <span title="cancel" class="close" onclick="document.getElementById('loginModal').style.display='none'">&times;</span> 
            <form>
                <label for='username'>Username:</label><br>
                <input title='Enter ur username stupid' type='text' id='username' name='username' autocomplete="off" required></input><br>
                <label for='password' >Password:</label><br>
                <input title='imo password cute' type="text" id='password' name="password" autocomplete="off" required><br>
                <input id='submitbtn' title="Sure naka?" type='submit' value=Submit>
                <input id='cancelbtn' title="cancel" type='submit' value=Cancel>
              </form>
              <div style="font-size: 11px; color:yeelow; margin-top:10px;"><?php echo"Error message here.......";?></div>
            </div>
          </div>
        </div>
    </div>