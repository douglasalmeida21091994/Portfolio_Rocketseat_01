<?php
$itensHero = [
    ['href' => 'https://github.com/douglasalmeida21091994', 'src' => 'img/github.png', 'alt' => 'GitHub Logo'],
    ['href' => 'https://www.linkedin.com/in/douglasalmeidadev94', 'src' => 'img/linkedin.png', 'alt' => 'LinkedIn Logo'],
    ['href' => '', 'src' => 'img/instagram.png', 'alt' => 'Instagram Logo'],
    ['href' => '', 'src' => 'img/facebook.png', 'alt' => 'Facebook Logo'],
]
?>

<section class="flex gap-x-3">
    <!-- TITULO E DESCRIÇÃO -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">
            <!-- adicionando efeito digitar para exibir aqui meu nome -->
            <span id="typing-text"></span>
        </h1>

        <p class="text-xl leading-7 mt-6 text-justify">Falando um pouco sobre mim, sou desenvolvedor web que adoro criar
            coisas novas e aprender novas tecnologias. Especializado em PHP, Láravel, CSS, HTML, Javascript e
            Frameworks CSS.
        </p>

        <ul class="flex gap-x-3 mt-3">

            <?php foreach ($itensHero as $itemHero): ?>
                <li>
                    <?php if (!empty($itemHero['href'])): ?>
                        <a href="<?= $itemHero['href'] ?>" target="_blank">
                        <?php else: ?>
                            <span> <!-- Usando <span> caso não tenha href -->
                            <?php endif; ?>

                            <img class="w-[30px] h-[30px] hover:animate-bounce" src="<?= $itemHero['src'] ?>" alt="<?= $itemHero['alt'] ?>">

                            <?php if (!empty($itemHero['href'])): ?>
                        </a>
                    <?php else: ?>
                            </span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>


        </ul>

    </div>
    <!-- MINHA IMAGEM LOGO -->
    <div class="w-1/3 flex items-center justify-center">
        <div class="-mr-14">
            <img class="w-[200px] rounded-lg mt-1 hover:animate-pulse cursor-pointer" src="img/foto.jpeg" alt="Foto Dougla Almeida" srcset="">
        </div>
    </div>
</section>