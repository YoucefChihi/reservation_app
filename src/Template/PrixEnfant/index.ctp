<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prix Enfant'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prixEnfant index large-9 medium-8 columns content">
    <h3><?= __('Prix Enfant') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id_prix_enfant') ?></th>
                <th><?= $this->Paginator->sort('id_hotel') ?></th>
                <th><?= $this->Paginator->sort('reduction') ?></th>
                <th><?= $this->Paginator->sort('du') ?></th>
                <th><?= $this->Paginator->sort('au') ?></th>
                <th><?= $this->Paginator->sort('age_du') ?></th>
                <th><?= $this->Paginator->sort('age_au') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prixEnfant as $prixEnfant): ?>
            <tr>
                <td><?= $this->Number->format($prixEnfant->id_prix_enfant) ?></td>
                <td><?= $this->Number->format($prixEnfant->id_hotel) ?></td>
                <td><?= $this->Number->format($prixEnfant->reduction) ?></td>
                <td><?= h($prixEnfant->du) ?></td>
                <td><?= h($prixEnfant->au) ?></td>
                <td><?= $this->Number->format($prixEnfant->age_du) ?></td>
                <td><?= $this->Number->format($prixEnfant->age_au) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prixEnfant->id_prix_enfant]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prixEnfant->id_prix_enfant]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prixEnfant->id_prix_enfant], ['confirm' => __('Are you sure you want to delete # {0}?', $prixEnfant->id_prix_enfant)]) ?>
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
