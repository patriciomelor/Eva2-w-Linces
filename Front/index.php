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
    
    <main>
        <!--Hero-->
        <section id="carrusel">
        <?php include 'component/hero.php'; ?>           
        </section>
      <!--Fin Hero-->
        <section id="nosotros">
          <?php include 'component/nosotros.php'; ?><!--Caro-->  
        </section>
        <section id="Mision">
          <?php include 'component/MisionyVision.php'; ?><!--Caro-->  
        </section>
        <section id="soloterreno">
          <?php include 'component/soloTerrenos.php'; ?><!--Caro-->  
        </section>
        <section class="Fverde1" id="casa_en_parcela">
        <?php include 'component/casa_en_parcela.php'; ?><!--Nathy-->
        </section>
        <section id="parcelas">
        <?php include 'component/Parcelas.php'; ?><!--Dany-->
        </section>
        <section id="preguntas_frecuentes">
        <?php include 'component/FAQs.php'; ?><!--Nathy-->
        </section>
        <!--Contacto-->
        <section id="contacto">
            <?php include 'component/contact.php'; ?>
        </section> <!--Pato-->
        <!--END Contacto--> 
        <!--footer-->
        <?php include 'component/footer.php'; ?>
        <!--fin footer-->
    </main>   

    <!-- Js -->
    <?php include 'component/Js.php'; ?>
            
</body>
</html>
