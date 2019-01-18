<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projectcode[]|\Cake\Collection\CollectionInterface $projectcodes
 */
?>
<?= $this->Html->css('textlength')?>
<div class="projectcodes index large-9 medium-8 columns content">
    <h3><?= __('Indicators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CAPEX_USD',['CAPEX USD']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('CAPEX_COP',['CAPEX COP']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('RIESGOS',['Riesgos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('SPI_EXTERNO',['SPI Externo']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($indicators as $indicator): ?>
            <tr>
                <td><?= $this->Number->format($indicator->id) ?></td>
                <td><?= h($indicator->CAPEX_USD) ?></td>
                <td width="100"><?= h($indicator->CAPEX_COP) ?></td>
                <td><?= h($indicator->RIESGOS) ?></td>
                <td width="100"><?= h($indicator->SPI_EXTERNO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $indicator->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $indicator->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $indicator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
