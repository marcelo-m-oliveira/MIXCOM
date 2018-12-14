﻿
<?php $__env->startSection('pagina_titulo', 'Carrinho' ); ?>

<?php $__env->startSection('pagina_conteudo'); ?>

<div class="container">
    <div class="row">
        <h3>Produtos no carrinho</h3>
        <hr/>
        <?php if(Session::has('mensagem-sucesso')): ?>
            <div class="card-panel green">
                <strong><?php echo e(Session::get('mensagem-sucesso')); ?></strong>
            </div>
        <?php endif; ?>
        <?php if(Session::has('mensagem-falha')): ?>
            <div class="card-panel red">
                <strong><?php echo e(Session::get('mensagem-falha')); ?></strong>
            </div>
        <?php endif; ?>
        <?php $__empty_1 = true; $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
            <h5 class="col l6 s12 m6"> Pedido: <?php echo e($pedido->id); ?> </h5>
            <h5 class="col l6 s12 m6"> Criado em: <?php echo e($pedido->created_at->format('d/m/Y H:i')); ?> </h5>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Qtd</th>
                        <th>Produto</th>
                        <th>Valor Unit.</th>
                        <th>Desconto(s)</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $total_pedido = 0;
                     ?>
                    <?php $__currentLoopData = $pedido->pedido_produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido_produto): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <tr>

                        <td class="center-align">
                            <div class="center-align">
                                <a class="col l4 m4 s4" href="#" onclick="carrinhoRemoverProduto(<?php echo e($pedido->id); ?>, <?php echo e($pedido_produto->produto_id); ?>, 1 )">
                                    <i class="material-icons small">remove_circle_outline</i>
                                </a>
                                <span class="col l4 m4 s4"> <?php echo e($pedido_produto->qtd); ?> </span>
                                <a class="col l4 m4 s4" href="#" onclick="carrinhoAdicionarProduto(<?php echo e($pedido_produto->produto_id); ?>)">
                                    <i class="material-icons small">add_circle_outline</i>
                                </a>
                            </div>
                            <a href="#" onclick="carrinhoRemoverProduto(<?php echo e($pedido->id); ?>, <?php echo e($pedido_produto->produto_id); ?>, 0)" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?">Retirar produto</a>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
            </table>
            <div class="row">
                <strong class="col offset-l6 offset-m6 offset-s6 l4 m4 s4 right-align">Total do pedido: </strong>
                <span class="col l2 m2 s2">R$ <?php echo e(number_format($total_pedido, 2, ',', '.')); ?></span>
            </div>
            <div class="row">
                <form method="POST" action="<?php echo e(route('carrinho.desconto')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="pedido_id" value="<?php echo e($pedido->id); ?>">
                    <strong class="col s4 m4 l3 offset-l4 right-align">Cupom de desconto: </strong>
                    <input class="col s6 m6 l3" type="text" name="cupom">
                    <button class="btn-flat btn-large col s2 m2 l2">Validar</button>
                </form>
            </div>
            <div class="row">
                <a class="btn-large tooltipped col l4 s4 m4 offset-l2 offset-s2 offset-m2" data-position="top" data-delay="50" data-tooltip="Voltar a página inicial para continuar comprando?" href="<?php echo e(route('index')); ?>">Continuar comprando</a>
                <form method="POST" action="<?php echo e(route('carrinho.concluir')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="pedido_id" value="<?php echo e($pedido->id); ?>">
                    <button type="submit" class="btn-large blue col offset-l1 offset-s1 offset-m1 l5 s5 m5 tooltipped" data-position="top" data-delay="50" data-tooltip="Adquirir os produtos concluindo a compra?">
                        Concluir compra
                    </button>   
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
            <h5>Não há nenhum pedido no carrinho</h5>
        <?php endif; ?>
    </div>
</div>

<form id="form-remover-produto" method="POST" action="<?php echo e(route('carrinho.remover')); ?>">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('DELETE')); ?>

    <input type="hidden" name="pedido_id">
    <input type="hidden" name="produto_id">
    <input type="hidden" name="item">
</form>
<form id="form-adicionar-produto" method="POST" action="<?php echo e(route('carrinho.adicionar')); ?>">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="id">
</form>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript" src="/js/carrinho.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>