<?php
$url       = isset($url)       ? $url       : '#';
$linkClass = isset($linkClass) ? $linkClass : 'btn btn-xs btn-inverse';
$iconClass = isset($iconClass) ? $iconClass : 'fa fa-fw fa-power-off';
$linkTitle = isset($linkTitle) ? $linkClass : trans('core::actions.disable');
$disabled  = isset($disabled)  ? $disabled  : false;
?>
@include('core::admin._includes.actions.icon-links._base', compact('url', 'linkClass', 'linkTitle', 'iconClass', 'disabled'))