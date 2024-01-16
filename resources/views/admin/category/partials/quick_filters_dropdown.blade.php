<?php
$quick_filters_dropdown = array(
    array("id" => "", "text" => "- " . __('common.quick_filters') . " -"),
    array("id" => "has_active_category", "text" => __('category.has_active_category')),
    array("id" => "has_inactive_category", "text" => __('category.has_inactive_category'))
);
echo json_encode($quick_filters_dropdown);
?>
