<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipement Hotel'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipementHotel index large-9 medium-8 columns content">
    <h3><?= __('Equipement Hotel') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_hotel') ?></th>
                <th><?= $this->Paginator->sort('id_equipement') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipementHotel as $equipementHotel): ?>
            <tr>
                <td><?= $this->Number->format($equipementHotel->id_hotel) ?></td>
                <td><?= $this->Number->format($equipementHotel->id_equipement) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipementHotel->id_hotel]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipementHotel->id_hotel]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipementHotel->id_hotel], ['confirm' => __('Are you sure you want to delete # {0}?', $equipementHotel->id_hotel)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
