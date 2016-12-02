<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $language->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $language->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($language); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Language']) ?></legend>
    <?php
    echo $this->Form->input('languageName');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
