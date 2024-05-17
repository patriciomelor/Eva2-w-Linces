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
        <section class=container id="nosotros">
          <?php include 'component/nosotros.php'; ?><!--Caro-->  
        </section>
        <section class=container id="Mision">
          <?php include 'component/MisionyVision.php'; ?><!--Caro-->  
        </section>
        <section class=container id="soloterreno">
          <?php include 'component/soloTerrenos.php'; ?><!--Caro-->  
        </section>
        <!--END Section Caro-->
        <section class=container id="parcelas">
        <?php include 'component/Parcelas.php'; ?><!--Dany-->
        </section>
        <section class=container id="casa_en_parcela">
        <?php include 'component/casa_en_parcela.php'; ?><!--Nathy-->
        </section>
        <section class=container id="preguntas_frecuentes">
        <?php include 'component/FAQs.php'; ?><!--Nathy-->
        </section>
        <!--Contacto-->
        <section class=container id="contacto">
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
