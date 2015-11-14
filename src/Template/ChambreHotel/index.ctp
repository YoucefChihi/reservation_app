<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chambre Hotel'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chambreHotel index large-9 medium-8 columns content">
    <h3><?= __('Chambre Hotel') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_type_chambre') ?></th>
                <th><?= $this->Paginator->sort('id_hotel') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chambreHotel as $chambreHotel): ?>
            <tr>
                <td><?= $this->Number->format($chambreHotel->id_type_chambre) ?></td>
                <td><?= $this->Number->format($chambreHotel->id_hotel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chambreHotel->id_type_chambre]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chambreHotel->id_type_chambre]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chambreHotel->id_type_chambre], ['confirm' => __('Are you sure you want to delete # {0}?', $chambreHotel->id_type_chambre)]) ?>
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
