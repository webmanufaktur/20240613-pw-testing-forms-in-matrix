<h2>location_contact.php</h2>
<hr>
<!-- THIS WORKS -->
<?php $form = $forms->render('contact'); ?>
<!-- BUT THESE WERE INLINED IN THE HTML - NOT THAT NICE -->
<?php echo $form->styles; ?>
<?php echo $form->scripts; ?>
<?php echo $form; ?>