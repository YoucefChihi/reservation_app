<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hotelImage->id_image],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hotelImage->id_image)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hotel Image'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hotelImage form large-9 medium-8 columns content">
    <?= $this->Form->create($hotelImage) ?>
    <fieldset>
        <legend><?= __('Edit Hotel Image') ?></legend>
        <?php
            echo $this->Form->input('id_hotel');
            echo $this->Form->input('nom_image');
            echo $this->Form->input('lien_image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
