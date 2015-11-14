<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Chambre Hotel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="chambreHotel form large-9 medium-8 columns content">
    <?= $this->Form->create($chambreHotel) ?>
    <fieldset>
        <legend><?= __('Add Chambre Hotel') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
