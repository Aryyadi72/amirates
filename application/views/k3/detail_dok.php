<?php
    if ($this->session->flashdata('sukses')) {
?>
<div class="callout callout-success">
    <p style="font-size:14px">
        <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
    </p>
</div>
<?php
    }
?>

<style>
iframe {
    height: calc(100vh - 4px);
    width: calc(100vw - 4px);
    box-sizing: border-box;
}
</style>

<iframe src='<?= base_url() ?>./assets/uploads/dok_k3/<?= $detail->nm_dok_k3; ?>' frameborder="0"
    allowfullscreen></iframe>