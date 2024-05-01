<style>




.grid-container {
  display: inline-grid;
  grid-template-columns: 150px 150px 450px  ;
  background-color: white;
  padding: 5px;
  border:0px;
}

.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 0px solid rgba(0, 0, 0, 0.8);
  padding: 2px;
  font-size: 18px;
  text-align: center;
}

</style>





<?php if(!isset($_SESSION['login'])) { ?>
    <h2>Receptek gyüjteménye</h2>
<H3>A receptek olvasásához jelentkezz be!</h3>    
<img src="./images/chef.jpeg" >

<?php } 
else { ?>

   
    <h2>Receptek gyüjteménye</h2>
    <div style="float: left; padding: 15px; display:inline-block;" >
    <h3>A legjobb recepjeink, kedves <?= $_SESSION['login']?> !</h3>
    <img src="./images/chef.jpeg" >
    <div class="grid-container">
         
  <div class="grid-item"><a href ='.?oldal=recept1'><img src="./images/rozskenyer.jpg"style="height:100px; width:auto;"   > </a></div>
  <div class="grid-item"><a href ='.?oldal=recept1'><h5> Rozskenyér</h5>  </a></div> 
  <div class="grid-item"> 	<p>Készítsd el otthon a kedvedre való, legfinomabb kenyeret mindössze két óra alatt!</p></div>
   
          
  <div class="grid-item"><img src="./images/rantotta.jpg"style="height:100px; width:auto;"   > </div>
  <div class="grid-item"><a href ='.?oldal=recept2'><h5>Rántotta</h5>  </a></div> 
  <div class="grid-item"> 	<p>Ezt a receptet minden agglegénynek ismernie kell!</p></div>
            
  <div class="grid-item"><img src="./images/teakeksz.jpeg"style="height:100px; width:auto;"   > </div>
  <div class="grid-item"><a href ='.?oldal=recept3'><h5> Tea keksszel </h5>  </a></div> 
  <div class="grid-item"> 	<p>Szingliknek ideális vendégváró menü!</p></div>
            
  <div class="grid-item"><img src="./images/zsiros.jpg"style="height:100px; width:auto;"   > </div>
  <div class="grid-item"><a href ='.?oldal=recept4'><h5> Zsíroskenyér</h5>  </a></div> 
  <div class="grid-item"> 	<p>A maradékot sem dobjuk ki.</p></div>
   
</div>


</div>
<?php

}
?>
