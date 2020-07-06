<?php global $prefix;
if (!empty($prefix)) {
    $parentPrefix = $prefix.'/';
    $rootPrefix = $parentPrefix;
} else {
    $parentPrefix = '/';
    $rootPrefix = '';
} ?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="bined.ico" />
<link href="<?php echo $parentPrefix; ?>css/site.css" rel="stylesheet">
<title>Consonica - Audio Editor</title>
</head>

<body>
<div id="name"><h1>Consonica - Audio Editor</a></h1></div>
<div id="divider"></div>

<ul id="navmenu">
  <li><div>Information</div>
    <ul class="submenu">
    <li><a href="<?php echo $rootPrefix; ?>?news">News</a></li>
    <li><a href="<?php echo $rootPrefix; ?>?about">About</a></li>
    </ul>
  </li>
  <li><div>Development</div>
    <ul class="submenu">
    <li><a href="<?php echo $rootPrefix; ?>?development">Development</a></li>
    <li><a href="<?php echo $rootPrefix; ?>?source-codes">Source Codes</a></li>
    </ul>
  </li>
</ul>
