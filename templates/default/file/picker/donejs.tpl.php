<?php

if (!empty($vars['file'])) {

    $fileplot = 'parent.tinymce.activeEditor.windowManager.getParams().oninsert("'.\Idno\Core\Idno::site()->config()->getStaticURL() . 'file/' . $vars['file']->file['_id'].'");';

} else {

    $fileplot = '';

}

?>
<script>
    <?php echo $fileplot?>
    parent.tinymce.activeEditor.windowManager.close();
</script>