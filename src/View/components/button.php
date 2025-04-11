<?php
$type = $type ?? 'button';
$class = $class ?? '';
$label = $label ?? 'Click';
?>
<button type="<?= htmlspecialchars($type) ?>" class="btn <?= htmlspecialchars($class) ?>">
    <?= htmlspecialchars($label) ?>
</button>
