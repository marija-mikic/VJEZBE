<?php 

session_start();
if(!isset($_SESSION['autoriziran'])){
    header('location: index.php');
    exit;
}
if(isset($_POST['ime']) 
  && isset($_POST['prezime']) 
  && isset($_POST['adresa']) 
  && isset($_POST['grad']) 
  && isset($_POST['zanimanje'])
  
  && count($_POST)===5){
    $_SESSION['podaci'][]=$_POST;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .callout{
    border-radius: 10px;
    border: 2px solid rgb(65, 35, 35);
    color: rgb(27, 17, 17);
    text-transform: uppercase;
    letter-spacing: 1px;
    width: 90%;
    padding: 1rem;
    background-color:rgb(207, 184, 184);
    }
    .button{
        background-color: #44c8ed;
    border-color: #44c8ed;
    }
    
    </style>
<body>
<div class="grid-container">
      <div class="grid-x grid-padding-x"?>
        <div class="large-6 cell">
          <h3>POPIS STANOVNIŠTVA ZA 2025.god. </h3>
            </div>
        </div>
        </div>
      
    <div clas="container">
        <form>    
                    
                    <button formaction="odjava.php">ODJAVI SE </button>
     </form>
<div class="grid-container">
      <div class="grid-x grid-padding-x"  ?>
        <div class="large-6 cell">
          <div class="callout">
          
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <br/>      
                  <label for="ime">IME</label>
                  <input type="text" name="ime" id="ime" />
                  <hr/>
                  
                   <label for="prezime">PREZIME</label>
                  <input type="text" name="prezime" id="prezime" />  
                  <hr/>  
                             
                   <label for="adresa">ADRESA</label>
                <input type="text" name ="adresa" id="adresa"/>
                <hr/>
                
                <label for="grad">GRAD</label>             
                <input type="text" name ="grad" id="grad"/>
                <hr/>
                
                <label for="zanimanje">ZANIMANJE</label>             
                <input type="text" name ="zanimanje" id="zanimanje"/>
               
          <hr/>
                <div class="grid-x grid-margin-x">
              <fieldset class="cell medium-6">
              <button class="button" type="submit" value="Submit">UNESI</button>
              <button class="button" type="reset" value="Reset">PONIŠTI</button>
              </fieldset>
            </div>

            </form>
             <ol>
              <?php foreach($_SESSION['podaci'] as $p): ?>
                <li><?php 
                echo $p['ime'] . ' ' . 
                $p['prezime'] . ' ' .
                $p['adresa'] . ' ' .
                $p['grad'] . ' ' .
                $p['zanimanje'] 
                ?></li>
              <?php endforeach; ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section id="footer-container">
          <div class="wrap">
            <p><b> Molimo kod završetka posla napraviti obaveznu odjavu</b></p>
              <div class="footer-column">
                <p3 class="title">U slučaju poteškoća u unosu podataka javite se na </p3>
                <a href="mailto:niko.nikic@gmail.com">mail</a>
              </div>
              <div class="footer-column">
                <h3 class="title"><span>Državni zavod za prikljupljanje magle</span></h3>
                <ul class="contact-info">
                  <li>
                   
                    <a href="mailto:niko.nikic@gmail.com"><i class="fas fa-envelope"></i> <span>E-mail:</span>niko.nikicl@</a>gmail.com
                  </li>
                    <li>
                    <a href="tel:+38531234567"><i class="fas fa-phone-alt"></i> <span>Telefon:</span>(+385 31) 234-567</a>
                  </li>
                    </ul>  
                              <div class="footer-column">
                                              
                     </div>
            </div>
          </div>
        </section>
  </body>
</html>


</body>
</html>