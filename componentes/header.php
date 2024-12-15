<?php
$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => 'https://github.com/douglasalmeida21091994', 'texto' => 'Github'],
    ['href' => 'https://www.linkedin.com/in/douglasalmeidadev94', 'texto' => 'LinkedIn'],
    ['href' => '', 'texto' => 'Contatos']
]
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- LOGO -->
    <div class="font-bold text-xl text-cyan-600">
        😎 Meu Portfolio...
    </div>

    <!-- LINKS -->
    <div>
        <ul class="flex gap-x-3 font-medium">

            <?php foreach ($itens as $item): ?>

                <li>
                    <?php 
                    // Verifica se o link é externo e adiciona target="_blank" apenas para links externos
                    $target = (strpos($item['href'], 'http') === 0) ? 'target="_blank"' : ''; 
                    ?>
                    <a href="<?= $item['href'] ?>" <?= $target ?> class="hover:underline hover:text-cyan-600 transition-all">
                        <?= $item['texto'] ?>
                    </a>                    
                </li>

            <?php endforeach; ?>

        </ul>
    </div>
</header>
