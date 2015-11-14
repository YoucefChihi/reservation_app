<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prix Enfant'), ['action' => 'edit', $prixEnfant->id_prix_enfant]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prix Enfant'), ['action' => 'delete', $prixEnfant->id_prix_enfant], ['confirm' => __('Are you sure you want to delete # {0}?', $prixEnfant->id_prix_enfant)]) ?> </li>
        <li><?= $this->Html->link(__('List Prix Enfant'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prix Enfant'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prixEnfant view large-9 medium-8 columns content">
    <h3><?= h($prixEnfant->id_prix_enfant) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Prix Enfant') ?></th>
            <td><?= $this->Number->format($prixEnfant->id_prix_enfant) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Hotel') ?></th>
            <td><?= $this->Number->format($prixEnfant->id_hotel) ?></td>
        </tr>
        <tr>
            <th><?= __('Reduction') ?></th>
            <td><?= $this->Number->format($prixEnfant->reduction) ?></td>
        </tr>
        <tr>
            <th><?= __('Age Du') ?></th>
            <td><?= $this->Number->format($prixEnfant->age_du) ?></td>
        </tr>
        <tr>
            <th><?= __('Age Au') ?></th>
            <td><?= $this->Number->format($prixEnfant->age_au) ?></td>
        </tr>
        <tr>
            <th><?= __('Index') ?></th>
            <td><?= $this->Number->format($prixEnfant->index) ?></td>
        </tr>
        <tr>
            <th><?= __('Du') ?></th>
            <td><?= h($prixEnfant->du) ?></td>
        </tr>
        <tr>
            <th><?= __('Au') ?></th>
            <td><?= h($prixEnfant->au) ?></td>
        </tr>
    </table>
</div>
