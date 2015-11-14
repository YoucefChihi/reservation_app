<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Equipement'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hotel'), ['controller' => 'Hotel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipement form large-9 medium-8 columns content">
    <?= $this->Form->create($equipement) ?>
    <fieldset>
        <legend><?= __('Add Equipement') ?></legend>
        <?php
            echo $this->Form->input('nom_equipement');
            echo $this->Form->input('description');
            echo $this->Form->input('lien_photo');
            echo $this->Form->input('hotel._ids', ['options' => $hotel]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
