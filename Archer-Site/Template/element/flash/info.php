<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<div class="alert alert-info text-center" role="alert" onclick="this.classList.add('hidden')" id="infoAlert">
    <?= $message ?>
</div>
<script>
    setTimeout(function() {
        document.getElementById('infoAlert').classList.add('hidden');
    }, 10000);
</script>