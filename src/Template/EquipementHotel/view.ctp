<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipement Hotel'), ['action' => 'edit', $equipementHotel->id_hotel]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipement Hotel'), ['action' => 'delete', $equipementHotel->id_hotel], ['confirm' => __('Are you sure you want to delete # {0}?', $equipementHotel->id_hotel)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipement Hotel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipement Hotel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipementHotel view large-9 medium-8 columns content">
    <h3><?= h($equipementHotel->id_hotel) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Hotel') ?></th>
            <td><?= $this->Number->format($equipementHotel->id_hotel) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Equipement') ?></th>
            <td><?= $this->Number->format($equipementHotel->id_equipement) ?></td>
        </tr>
    </table>
</div>
