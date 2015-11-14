<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chambre Hotel'), ['action' => 'edit', $chambreHotel->id_type_chambre]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chambre Hotel'), ['action' => 'delete', $chambreHotel->id_type_chambre], ['confirm' => __('Are you sure you want to delete # {0}?', $chambreHotel->id_type_chambre)]) ?> </li>
        <li><?= $this->Html->link(__('List Chambre Hotel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chambre Hotel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chambreHotel view large-9 medium-8 columns content">
    <h3><?= h($chambreHotel->id_type_chambre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id Type Chambre') ?></th>
            <td><?= $this->Number->format($chambreHotel->id_type_chambre) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Hotel') ?></th>
            <td><?= $this->Number->format($chambreHotel->id_hotel) ?></td>
        </tr>
    </table>
</div>
