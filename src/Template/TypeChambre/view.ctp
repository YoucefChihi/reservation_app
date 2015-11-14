<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type Chambre'), ['action' => 'edit', $typeChambre->id_type_chambre]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type Chambre'), ['action' => 'delete', $typeChambre->id_type_chambre], ['confirm' => __('Are you sure you want to delete # {0}?', $typeChambre->id_type_chambre)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Chambre'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type Chambre'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeChambre view large-9 medium-8 columns content">
    <h3><?= h($typeChambre->id_type_chambre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Type Chambre') ?></th>
            <td><?= $this->Number->format($typeChambre->id_type_chambre) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Pers') ?></th>
            <td><?= $this->Number->format($typeChambre->max_pers) ?></td>
        </tr>
        <tr>
            <th><?= __('Min Pers') ?></th>
            <td><?= $this->Number->format($typeChambre->min_pers) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Adulte') ?></th>
            <td><?= $this->Number->format($typeChambre->max_adulte) ?></td>
        </tr>
        <tr>
            <th><?= __('Min Adulte') ?></th>
            <td><?= $this->Number->format($typeChambre->min_adulte) ?></td>
        </tr>
        <tr>
            <th><?= __('Max Enfant') ?></th>
            <td><?= $this->Number->format($typeChambre->max_enfant) ?></td>
        </tr>
        <tr>
            <th><?= __('Min Enfant') ?></th>
            <td><?= $this->Number->format($typeChambre->min_enfant) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($typeChambre->type)); ?>
    </div>
</div>
