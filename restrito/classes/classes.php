<?php


class classes {

    public function telaSuperior(){
       
        echo "<div class='col-sm-12'>";
        echo "  <img src='../images/logoMapTi200x100.png' title='MAP TI'>";
        echo "</div>";

    }
    
    public function telaLogin(){
//        echo "<p style='height: 200px;'>&nbsp;</p>";
        echo "<form id='contact-form' name='contact-form' method='post' action='#'>";
        echo "  <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='form-group'>";
        echo "              <input type='text' name='login' class='form-control' placeholder='Login' required='required'>";
        echo "          </div>";
        echo "      </div>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='form-group'>";
        echo "              <input type='password' name='senha' class='form-control' placeholder='senha' required='required'>";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
        echo "  <div class='form-group'>";
        echo "      <button type='submit' class='btn-submit'>Acessar</button>";
        echo "  </div>";
        echo "</form>";

    }
    
    
    
    
}
