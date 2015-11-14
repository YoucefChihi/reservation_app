<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipement'), ['controller' => 'Equipement', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipement'), ['controller' => 'Equipement', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="content">
    <h3><?= __('Hotel') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_hotel', 'Hotel ID') ?></th>
                <th><?= $this->Paginator->sort('nom_hotel', 'Hotel Name') ?></th>
                <th><?= $this->Paginator->sort('nb_etoile', 'Stars') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotel as $hotel): ?>
            <tr>
                <td><?= $this->Number->format($hotel->id_hotel) ?></td>
                <td><?= h($hotel->nom_hotel) ?></td>
                <td><?= $this->Number->format($hotel->nb_etoile) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hotel->id_hotel]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotel->id_hotel]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotel->id_hotel], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id_hotel)]) ?>
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
