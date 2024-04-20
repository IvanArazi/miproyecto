<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

    <?php
        include 'views/parts/header.php';
    ?>


    <main>

        <section class="section_1">
            <p data-aos="fade-up" data-aos-duration="1500">Conocé las billeteras del futuro</p>
            <h2 data-aos="fade-up" data-aos-duration="1500">BILLETERAS INTELIGENTES</h2>
            <button data-aos="fade-up" data-aos-duration="1500" class="boton">STORE</button>
        </section>
    
        <section class="section_2">
            <h3 data-aos="fade-up" data-aos-duration="1500">Descubrí todos nuestros productos</h3>
            <button data-aos="fade-up" data-aos-duration="1500" class="boton">Ver catálogo</button>
        </section>

    <?php
        include 'views/parts/footer.php';
    ?>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script>
        AOS.init();
      </script>

      <script src="resource/misfunciones.js"></script>
</body>
</html>



