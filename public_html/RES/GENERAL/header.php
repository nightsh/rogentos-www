<?
//print_r($_POST);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php echo $CAD->SEO->DISPLAY(); ?>
    <title>Rogentos GNU/Linux - <?php echo $CAD->name; ?></title>

    <base href="<?php echo publicURL; ?>" />

    <link rel="stylesheet" href="/fw/GENERAL/css/style.css"  />
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />

    <meta name="description" content="<?php echo $CAD->desc; ?>" />
    <meta name="keywords" content="rogentos, gnu linux, linux, gentoo, sabayon, romania" />

    <?php echo $CAD->INC_css; ?>

    <script type="text/javascript"  src="/fw/GENERAL/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script async type="text/javascript"  src="/fw/GENERAL/js/ckeditor/ckeditor.js" type="text/javascript"></script>

    <link rel="icon" type="image/png" href="/fw/GENERAL/css/img/icon.png" />

    <script type="text/javascript"  src="/fw/GENERAL/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script type="text/javascript"  src="/fw/GENERAL/js/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript"  src="/fw/GENERAL/js/jquery-ui-1.8.19.custom/js/jquery-ui-1.8.19.custom.min.js" type="text/javascript"></script>
    <script type="text/javascript"  src="/fw/GENERAL/js/jquery.ui.nestedSortable.js" type="text/javascript"></script>

    <?php echo $CAD->INC_js; ?>

</head>



<body >
    <?php echo $CAD->ctrlDISPLAY('TOOLbar'); ?>
    <input type='hidden' name='current_idT' value='<?php echo $CAD->idT; ?>'  />
    <input type='hidden' name='current_idC' value='<?php echo $CAD->idC; ?>'  />
    <input type='hidden' name='lang'        value='<?php echo $CAD->lang; ?>' />
    <input type='hidden' name='lang2'       value='<?php echo $CAD->lang2; ?>'/>
    <div id='header'>
        <a href="/"><img src="/fw/GENERAL/css/img/rogentos_header_logo_w.png" alt="Rogentos GNU/Linux" id="rlogo" /></a>
        <div id="menu"><?php echo $CAD->MENUhorizontal->DISPLAY(); ?></div>
    </div>




