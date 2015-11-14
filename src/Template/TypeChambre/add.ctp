<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Type Chambre'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typeChambre form large-9 medium-8 columns content">
    <?= $this->Form->create($typeChambre) ?>
    <fieldset>
        <legend><?= __('Add Type Chambre') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('max_pers');
            echo $this->Form->input('min_pers');
            echo $this->Form->input('max_adulte');
            echo $this->Form->input('min_adulte');
            echo $this->Form->input('max_enfant');
            echo $this->Form->input('min_enfant');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
