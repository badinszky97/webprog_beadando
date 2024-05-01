<h2>Receptek gyüjteménye</h2>
<img src="./images/chef.jpeg">


<?php if(!isset($_SESSION['login'])) { ?>
<H3>A receptek olvasásához jelentkezz be!</h3>

<?php } else { ?>

    <h3>A legjobb recepjeink, kedves <?= $_SESSION['login']?> !</h3>

<ul>


</ul>
<?php

}
?>
<p > Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ullam beatae magni eius suscipit alias temporibus, voluptates 
    voluptatibus pariatur deleniti officiis, explicabo voluptate doloribus 
    accusantium quo maiores error tenetur in dolore.</p>