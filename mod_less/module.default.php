<?php

// (c) 2015 q23.medien GmbH - planen . beraten . entwickeln
// by Marcel "geckse" Claus
//

// register module name
//DO NOT USE SPECIAL CHARS HERE, NO WHITE SPACES, USE LOWER CASE!!!
$_module_name 			= 'less';

// module type - defines where used
// 0 = BE and FE, 1 = BE only, 2 = FE only
$_module_type 			= 0;

// Set if it should be listed as content part
// has content part: true or false
$_module_contentpart	= false;

$_module_fe_render		= false;
$_module_fe_init		= true;
$_module_fe_search		= false;
$_module_fe_setting		= false;

$_module_less_version = "0.921"; 

if(file_exists(__DIR__.'/log/log.txt') && file_get_contents(__DIR__.'/log/log.txt') != "" && function_exists('set_status_message')){
	set_status_message('Oups! There is a syntax-error in your lessfile. Check Less-Compiler for more information.',"error");
}


?>