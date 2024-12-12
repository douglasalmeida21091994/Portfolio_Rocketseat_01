<?php
$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => '', 'texto' => 'Github'],
    ['href' => '', 'texto' => 'LinkedIn'],
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
                    <a href="<?= $item['href'] ?>" class="hover:underline hover:text-cyan-600 transition-all">

                        <?= $item['texto'] ?>
                        
                    </a>
                </li>

            <?php endforeach; ?>



        </ul>
    </div>
</header>