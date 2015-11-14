<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Equipement Hotel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="equipementHotel form large-9 medium-8 columns content">
    <?= $this->Form->create($equipementHotel) ?>
    <fieldset>
        <legend><?= __('Add Equipement Hotel') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
