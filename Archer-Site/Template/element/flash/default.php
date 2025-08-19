<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<div class="alert alert-primary text-center" role="alert" onclick="this.classList.add('hidden')" id="defaultAlert">
    <?= $message ?>
</div>
<script>
    setTimeout(function() {
        document.getElementById('defaultAlert').classList.add('hidden');
    }, 10000);
</script>