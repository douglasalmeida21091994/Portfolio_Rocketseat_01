<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<!-- animação suave ao deslocar a página até a seção de projetos quando o link for clicado #projetos indo para id="projetos" -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com estilos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-slate-900 text-gray-200">

    <!-- HEADER -->
    <?php
    include('./componentes/header.php');
    ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">

        <!-- HERO -->
        <?php include('./componentes/hero.php') ?>

        <!-- MEUS PROJETOS -->
        <h2 class="text-2xl font-bold mt-3">Meus Projetos <!--<span class="text-xs text-gray-400 opacity-50 italic">(Finalizados
                em 2024)</span>--></h2>

        <!-- PROJETO -->
        <?php include('./componentes/projetos.php') ?>        

    </main>

    <!-- FOOTER -->
    <footer class="mx-auto max-w-screen-lg min-h-20 px-3 ">

        <div class="border-t border-gray-600 pt-6 text-gray-400 text-sm flex justify-center">

            &copy; Copyright <?= date('Y') ?> - Desenvolvido por Douglas Almeida ;)

        </div>

    </footer>

    <script src="js/javascript.js"></script>

</body>

</html>