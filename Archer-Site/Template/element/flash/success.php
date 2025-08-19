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
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->
<div class="alert alert-success text-center" role="alert" onclick="this.classList.add('hidden')" id="successAlert">
    <?= $message ?>
</div>
<script>
    setTimeout(function() {
        document.getElementById('successAlert').classList.add('hidden');
    }, 10000);
</script>
