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
  
}

function mybb_output($vars) {
  
}

function mybb_sidebar($vars) {
  
}

?>
