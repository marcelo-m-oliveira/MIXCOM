<?php $__env->startSection('pagina_titulo', 'COMPRAS' ); ?>

<?php $__env->startSection('pagina_conteudo'); ?>

<div class="container">
    <div class="row">
        <h3>Minhas compras</h3>
        <?php if(Session::has('mensagem-sucesso')): ?>
            <div class="card-panel green"><?php echo e(Session::get('mensagem-sucesso')); ?></div>
        <?php endif; ?>
        <?php if(Session::has('mensagem-falha')): ?>
            <div class="card-panel red"><?php echo e(Session::get('mensagem-falha')); ?></div>
        <?php endif; ?>
        <div class="divider"></div>
        <div class="row col s12 m12 l12">
            <h4>Compras concluídas</h4>
            <?php $__empty_1 = true; $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                <h5 class="col l6 s12 m6"> Pedido: <?php echo e($pedido->id); ?> </h5>
                <h5 class="col l6 s12 m6"> Criado em: <?php echo e($pedido->created_at->format('d/m/Y H:i')); ?> </h5>
                <form method="POST" action="<?php echo e(route('carrinho.cancelar')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="pedido_id" value="<?php echo e($pedido->id); ?>">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2"></th>
                                <th>Produto</th>
                                <th>Valor</th>
                                <th>Desconto</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $total_pedido = 0;
                         ?>
                        <?php $__currentLoopData = $pedido->pedido_produtos_itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido_produto): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php 
                                $total_produto = $pedido_produto->valor - $pedido_produto->desconto;
                                $total_pedido += $total_produto;
                             ?>
                            <tr>
                                <td class="center">
                                    <?php if($pedido_produto->status == 'PA'): ?>
                                        <p class="center">
                                            <input type="checkbox" id="item-<?php echo e($pedido_produto->id); ?>" name="id[]" value="<?php echo e($pedido_produto->id); ?>" />
                                            <label for="item-<?php echo e($pedido_produto->id); ?>">Selecionar</label>
                                        </p>
                                    <?php else: ?>
                                        <strong class="red-text">CANCELADO</strong>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <img width="100" height="100" src="<?php echo e($pedido_produto->produto->imagem); ?>">
                                </td>
                                <td><?php echo e($pedido_produto->produto->nome); ?></td>
                                <td>R$ <?php echo e(number_format($pedido_produto->valor, 2, ',', '.')); ?></td>
                                <td>R$ <?php echo e(number_format($pedido_produto->desconto, 2, ',', '.')); ?></td>
                                <td>R$ <?php echo e(number_format($total_produto, 2, ',', '.')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <td><strong>Total do pedido</strong></td>
                                <td>R$ <?php echo e(number_format($total_pedido, 2, ',', '.')); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" class="btn-large red col l12 s12 m12 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cancelar itens selecionados">
                                        Cancelar
                                    </button>   
                                </td>
                                <td colspan="3"></td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                <h5 class="center">
                    <?php if($cancelados->count() > 0): ?>
                        Neste momento não há nenhuma compra valida.
                    <?php else: ?>
                        Você ainda não fez nenhuma compra.
                    <?php endif; ?>
                </h5>
            <?php endif; ?>
        </div>
        <div class="row col s12 m12 l12">
            <div class="divider"></div>
            <h4>Compras canceladas</h4>
            <?php $__empty_1 = true; $__currentLoopData = $cancelados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); $__empty_1 = false; ?>
                <h5 class="col l2 s12 m2"> Pedido: <?php echo e($pedido->id); ?> </h5>
                <h5 class="col l5 s12 m5"> Criado em: <?php echo e($pedido->created_at->format('d/m/Y H:i')); ?> </h5>
                <h5 class="col l5 s12 m5"> Cancelado em: <?php echo e($pedido->updated_at->format('d/m/Y H:i')); ?> </h5>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Desconto</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $total_pedido = 0;
                         ?>
                        <?php $__currentLoopData = $pedido->pedido_produtos_itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido_produto): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php 
                                $total_produto = $pedido_produto->valor - $pedido_produto->desconto;
                                $total_pedido += $total_produto;
                             ?>
                        <tr>
                            <td>
                                <img width="100" height="100" src="<?php echo e($pedido_produto->produto->imagem); ?>">
                            </td>
                            <td><?php echo e($pedido_produto->produto->nome); ?></td>
                            <td>R$ <?php echo e(number_format($pedido_produto->valor, 2, ',', '.')); ?></td>
                            <td>R$ <?php echo e(number_format($pedido_produto->desconto, 2, ',', '.')); ?></td>
                            
                            <td>R$ <?php echo e(number_format($total_produto, 2, ',', '.')); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td><strong>Total do pedido</strong></td>
                            <td>R$ <?php echo e(number_format($total_pedido, 2, ',', '.')); ?></td>
                        </tr>
                    </tfoot>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); if ($__empty_1): ?>
                <h5 class="center">Nenhuma compra ainda foi cancelada.</h5>
            <?php endif; ?>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>