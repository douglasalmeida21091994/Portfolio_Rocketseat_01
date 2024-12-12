<?php
$itensHero = [
    ['href' => '', 'src' => 'img/github.png', 'alt' => 'GitHub Logo'],
    ['href' => '', 'src' => 'img/linkedin.png', 'alt' => 'LinkedIn Logo'],
    ['href' => '', 'src' => 'img/instagram.png', 'alt' => 'Instagram Logo'],
    ['href' => '', 'src' => 'img/facebook.png', 'alt' => 'Facebook Logo'],
]
?>

<section class="flex gap-x-3">
    <!-- TITULO E DESCRIÇÃO -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, meu nome é Douglas Almeida.</h1>

        <p class="text-xl leading-7 mt-6">Falando um pouco sobre mim, sou desenvolvedor web que adoro criar
            coisas novas e aprender novas tecnologias. Especializado em PHP, Láravel, CSS, HTML, Javascript e
            Frameworks CSS.
        </p>

        <ul class="flex gap-x-3 mt-3">

            <?php foreach ($itensHero as $itemHero): ?>

                <li>
                    <a href="<?= $itemHero['href'] ?>">
                        <img class="w-[30px] h-[30px] hover:animate-bounce" src="<?= $itemHero['src'] ?>" alt="<?= $itemHero['alt'] ?>">
                    </a>
                </li>

            <?php endforeach; ?>

        </ul>

    </div>
    <!-- IMAGEM -->
    <div class="w-1/3 flex items-center justify-center">
        <div class="-mr-14">
            <img class="w-[200px] rounded-lg mt-1 hover:animate-pulse" src="img/foto.jpeg" alt="Foto Dougla Almeida" srcset="">
        </div>
    </div>
</section>