<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prix Adulte'), ['action' => 'edit', $prixAdulte->id_prix_adulte]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prix Adulte'), ['action' => 'delete', $prixAdulte->id_prix_adulte], ['confirm' => __('Are you sure you want to delete # {0}?', $prixAdulte->id_prix_adulte)]) ?> </li>
        <li><?= $this->Html->link(__('List Prix Adulte'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prix Adulte'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prixAdulte view large-9 medium-8 columns content">
    <h3><?= h($prixAdulte->id_prix_adulte) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Prix Adulte') ?></th>
            <td><?= $this->Number->format($prixAdulte->id_prix_adulte) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Hotel') ?></th>
            <td><?= $this->Number->format($prixAdulte->id_hotel) ?></td>
        </tr>
        <tr>
            <th><?= __('Prix') ?></th>
            <td><?= $this->Number->format($prixAdulte->prix) ?></td>
        </tr>
        <tr>
            <th><?= __('Du') ?></th>
            <td><?= h($prixAdulte->du) ?></td>
        </tr>
        <tr>
            <th><?= __('Au') ?></th>
            <td><?= h($prixAdulte->au) ?></td>
        </tr>
    </table>
</div>
