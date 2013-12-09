<?php

if (!defined("WHMCS")) {

  //end execution
  die("This file can not be accessed directly.");

}

function mybb_config() {

  //register whmcs config array to tell whmcs about our plugin
  $configarray = array(
    "name" => "MyBB Bridge",
    "description" => "Creates a bridge between mybb, and whmcs allowing you to use mybb with whmcs",
    "version" => "0.1",
    "author" => "XAOS Interactive",
    "fields" => array(
      "mybbpath"  => array("FriendlyName" => "MyBB Path", "Type" => "text", "Description" => "The path to your mybb install", "Default" => "/path/to/mybb/"),
      "mybburl" => array("FriendlyName" => "MyBB Url", "Type" => "text", "Description" => "The url to your mybb install."),
    )
  );
  
  //return the config array
  return $configarray;

}

function mybb_activate() {
  
}

function mybb_deactivate() {
  
}

function mybb_upgrade($vars) {
  
  //get the current version
  $version = $vars['version'];
  
}

function mybb_output($vars) {
  
  //module link
  $modulelink = $vars['modulelink'];
  
  //version
  $version = $vars['version'];
  
  //mybb settings
  
}

function mybb_sidebar($vars) {
  
  //module link
  $modulelink = $vars['modulelink'];
  
  //version
  $version = $vars['version'];
  
  //sidebar content
  $sidebar = "<span class='header'>
  <img src='images/icons/addonmodules.png' class='absmiddle' width='16' height='16'>
  MyBB Bridge
  </span>
  <ul class='menu'>
    <li><a href='$modulelink/admin/index.php?module=config'>Configuration</a></li>
    <li><a href='$modulelink/admin/index.php?module=forum'>Forums & Posts</a></li>
    <li><a href='$modulelink/admin/index.php?module=user'>Users & Groups</a></li>
    <li><a href='$modulelink/admin/index.php?module=style'>Templates & Style</a></li>
    <li><a href='$modulelink/admin/index.php?module=tools'>Tools & Maintenance</a></li>
    <li><a href='#'>Version: $version</a></li>
  </ul>
  ";
  
  //return the sidebar
  return $sidebar;
  
}

?>
