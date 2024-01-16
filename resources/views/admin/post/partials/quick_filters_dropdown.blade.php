<?php
$quick_filters_dropdown = array(
    array("id" => "", "text" => "- " . __('common.quick_filters') . " -"),
    array("id" => "has_active_post", "text" => __('Active Post')),
    array("id" => "has_inactive_post", "text" => __('Inactive Post'))
);
echo json_encode($quick_filters_dropdown);
?>
