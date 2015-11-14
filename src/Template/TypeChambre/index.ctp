<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type Chambre'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeChambre index large-9 medium-8 columns content">
    <h3><?= __('Type Chambre') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_type_chambre') ?></th>
                <th><?= $this->Paginator->sort('max_pers') ?></th>
                <th><?= $this->Paginator->sort('min_pers') ?></th>
                <th><?= $this->Paginator->sort('max_adulte') ?></th>
                <th><?= $this->Paginator->sort('min_adulte') ?></th>
                <th><?= $this->Paginator->sort('max_enfant') ?></th>
                <th><?= $this->Paginator->sort('min_enfant') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeChambre as $typeChambre): ?>
            <tr>
                <td><?= $this->Number->format($typeChambre->id_type_chambre) ?></td>
                <td><?= $this->Number->format($typeChambre->max_pers) ?></td>
                <td><?= $this->Number->format($typeChambre->min_pers) ?></td>
                <td><?= $this->Number->format($typeChambre->max_adulte) ?></td>
                <td><?= $this->Number->format($typeChambre->min_adulte) ?></td>
                <td><?= $this->Number->format($typeChambre->max_enfant) ?></td>
                <td><?= $this->Number->format($typeChambre->min_enfant) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeChambre->id_type_chambre]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeChambre->id_type_chambre]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeChambre->id_type_chambre], ['confirm' => __('Are you sure you want to delete # {0}?', $typeChambre->id_type_chambre)]) ?>
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
