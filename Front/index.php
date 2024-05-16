<!DOCTYPE html><!--Pato-->
<html lang="Es">
<head>
    <?php include 'component/header.php'; ?>
</head>
<body>
    <head>
        <!--Barra de Navegacion-->
        <?php include 'component/nav.php'; ?>    
        <!--Fin nav-->
    </head>
    <!--Hero-->
    <div class="container">
        <?php include 'component/hero.php'; ?>    
    </div>
    <!--Fin Hero-->
    <main>
        <!--Section Nosotros-->
        <section id="nosotros">
          <?php include 'component/nosotros.php'; ?><!--Caro-->  
        </section>
        <section id="Mision">
          <?php include 'component/MisionyVision.php'; ?><!--Caro-->  
        </section>
        <section id="soloterreno">
          <?php include 'component/solo_terrenos.php'; ?><!--Caro-->  
        </section>
        <!--END Section Caro-->
        <section id="parcelas">
        <?php include 'component/Parcelas.php'; ?><!--Dany-->
        </section>
        <!--Contacto-->
        <section id="contacto">
            <?php include 'component/contact.php'; ?>
        </section> <!--Pato-->
        <!--END Contacto--> 

    </main>
    <!--footer-->
    <?php include 'component/footer.php'; ?>
    <!--fin footer-->

    <!--JS-->
    <?php include 'component/Js.php'; ?>
        
</body>
</html>
