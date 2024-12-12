<?php
$itensProjetos = [
    [
        "titulo" => "Página Para Altera Forma de Pagamento",
        "finalizado" => true,
        "ano" => 2024,
        "descricao1" => "Desenvolvi esta página web com o objetivo de facilitar a alteração das formas de pagamento dos clientes da Smile Saúde, visando otimizar o processo de atualização, especialmente devido à descontinuação da modalidade de débito em conta. A página permite que os clientes escolham entre as opções de Boleto Bancário ou Cartão de Crédito. Fiquei responsável por toda a parte do front-end, utilizando HTML, CSS e JavaScript para garantir uma experiência de usuário eficiente e intuitiva.",
        "descricao2" => "",
        "stack" => ['Javascript', 'Tailwind', 'CSS', 'HTML']
    ],
    [
        "titulo" => "Página com ROL da ANS",
        "finalizado" => true,
        "ano" => 2024,
        "descricao1" => "Neste projeto desenvolvi uma página web destinada a ser integrada ao site da Smile Saúde. O objetivo da página é fornecer informações detalhadas sobre as coberturas de procedimentos e eventos de saúde para os beneficiários. Através dela, os usuários podem acessar e fazer o download de documentos importantes, como o ROL de Procedimentos, lista de consultas, exames e tratamentos cobertos obrigatoriamente, diretrizes de utilização, além de consultar quais procedimentos fazem parte da cobertura assistencial obrigatória, os tipos de segmentação e a correção entre TUSS e ROL. A página também disponibiliza o link para o site da ANS.",
        "descricao2" => "Para acessar a página em produção, disponível no site da Smile Saúde, <a class='text-blue-600' href='https://smilesaude.com.br/rol_ans/index.html'>clique aqui</a>",
        "stack" => ['Javascript', 'CSS', 'HTML']
    ],
    [
        "titulo" => "Página de Comunicado dos Beneficiários",
        "finalizado" => true,
        "ano" => 2024,
        "descricao1" => "Primeira página web que desenvolvi, criada para ser enviada aos beneficiários da Smile Saúde, com o objetivo de comunicar informações importantes sobre o plano de saúde. A página conta com funcionalidade para capturar dados dos usuários e armazená-los no banco de dados. O comunicado só pode ser visualizado após a confirmação do recebimento, garantindo o acompanhamento adequado.",
        "descricao2" => "",
        "stack" => ['Javascript', 'CSS', 'HTML']
    ],
];
?>

<?php foreach ($itensProjetos as $itemProjetos): ?>
    <section class="bg-slate-800 rounded-lg p-3 space-y-3 py-6 mt-3">
        <div class="flex items-center">
            <!-- SUBSTITUIR POR DINÂMICO QUANDO ESTIVER COM AS FOTOS DOS PROJETOS E RETIRAR A DIV ABAIXO E COLOCAR UMA IMG COM CAMINHO -->
            <div class="w-1/5 flex items-center justify-middle">Foto do Projeto</div> <!-- add class="h-10"  na tag img-->

            <div class="w-4/5 space-y-3">
                <div>
                    <h3 class="font-semibold text-xl">
                        <?php if ($itemProjetos['finalizado']): ?>
                            ✅   
                        <?php else: ?>
                            ⏳
                        <?php endif; ?>

                        <?= $itemProjetos['titulo'] ?>

                        <?php if ($itemProjetos['finalizado']): ?> 
                            <span class="text-xs text-gray-400 opacity-50 italic"> (Finalizado em <?= $itemProjetos['ano'] ?>) </span>  
                        <?php else: ?>
                            <span class="text-xs text-gray-400 opacity-50 italic"> (Em Desenvolvimento <?= $itemProjetos['ano'] ?>) </span>
                        <?php endif; ?>
                    </h3>

                    <div class="flex gap-1.5 justify-end mt-1">                            
                            
                        <?php 
                            $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'real', 'purple'];                        
                            
                            // Para Saber o índice basta: Posição: <?= $cores  // Para saber os nomes <?=$colors[$cores]
                            foreach ($itemProjetos['stack'] as $cores => $stack): ?>

                            <span class="bg-<?=$colors[$cores] ?>-400 text-<?=$colors[$cores] ?>-900 items-center rounded-md py-1 px-2 font-semibold text-sm hover:scale-105 transition-transform duration-300 ease-in-out cursor-pointer">
                                <?= $stack ?>
                            </span>
                        <?php endforeach; ?>

                    </div>

                    <p class="leading-7 text-justify mt-4">
                        <?= $itemProjetos['descricao1'] ?>
                    </p>
                    
                    <?php if (!empty($itemProjetos['descricao2'])): ?>
                        <p class="mt-2">
                            <?= $itemProjetos['descricao2'] ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>