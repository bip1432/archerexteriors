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
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<div class="alert alert-danger text-center" role="alert" onclick="this.classList.add('hidden')" id="errorAlert">
    <?= $message ?>
</div>
<script>
    setTimeout(function() {
        document.getElementById('errorAlert').classList.add('hidden');
    }, 10000);
</script>
