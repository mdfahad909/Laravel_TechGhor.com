<?php
$quick_filters_dropdown = array(
    array("id" => "", "text" => "- " . __('common.quick_filters') . " -"),
    array("id" => "has_active_service", "text" => __('service.has_active_service')),
    array("id" => "has_inactive_service", "text" => __('service.has_inactive_service'))
);
echo json_encode($quick_filters_dropdown);
?>
