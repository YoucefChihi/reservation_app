<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prix Adulte'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prixAdulte index large-9 medium-8 columns content">
    <h3><?= __('Prix Adulte') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_prix_adulte') ?></th>
                <th><?= $this->Paginator->sort('id_hotel') ?></th>
                <th><?= $this->Paginator->sort('prix') ?></th>
                <th><?= $this->Paginator->sort('du') ?></th>
                <th><?= $this->Paginator->sort('au') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prixAdulte as $prixAdulte): ?>
            <tr>
                <td><?= $this->Number->format($prixAdulte->id_prix_adulte) ?></td>
                <td><?= $this->Number->format($prixAdulte->id_hotel) ?></td>
                <td><?= $this->Number->format($prixAdulte->prix) ?></td>
                <td><?= h($prixAdulte->du) ?></td>
                <td><?= h($prixAdulte->au) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prixAdulte->id_prix_adulte]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prixAdulte->id_prix_adulte]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prixAdulte->id_prix_adulte], ['confirm' => __('Are you sure you want to delete # {0}?', $prixAdulte->id_prix_adulte)]) ?>
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
