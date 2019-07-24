<?php
$services    = get_sub_field('services');
$title       = get_sub_field('title');
$dtitle       = get_sub_field('displayed_title');
$sectionName = str_replace(' ', '', strtolower($title));
?>
<section class="section casestudiesbgtop  d-flex" data-section-name="<?php echo $sectionName; ?>">

</section>