<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddnsplan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('Hacking Attempt');

}

$l['slave_cant'] = 'Add DNS Plan Error';
$l['slave_cant_exp'] = 'Slave servers are not allowed to add DNS Plans !';
$l['no_name'] = 'Please specify the Name of the plan';
$l['plannameexist'] = 'Plan Name already exists';
$l['no_hostmasteremail'] = 'Please specify the hostmaster email';
$l['no_maxdomains'] = 'Please specify the maximum number of domains';
$l['no_maxdomainsrec'] = 'Please specify the maximum number of records per domain';
$l['no_ttl'] = 'Please specify the default TTL value';
$l['no_pdns'] = 'There are no DNS servers. Please <a href="'.$globals['index'].'act=addpdns">Add</a> DNS server';

//Theme Settings
$l['<title>'] = 'Add DNS Plan';
$l['add_dns_plan'] = 'Add DNS Plan';
$l['submit'] = 'Add DNS Plan';
$l['done'] = 'The DNS Plan has been saved. Return to <a href="'.$globals['index'].'act=dnsplans">Plans Overview</a>';
$l['planname'] = 'Plan Name';
$l['nameofplan'] = 'The name of this plan';
$l['dnsserver'] = 'DNS Server';
$l['nameofdnsserver'] = 'The DNS server to be used';
$l['hostmasteremail'] = 'Hostmaster Email';
$l['nameserver'] = 'Nameserver';
$l['exp_hostmasteremail'] = 'Email address of the person responsible for this zone';
$l['maxdomains'] = 'Max Domains';
$l['maxdomainsrec'] = 'Max Domain Records';
$l['ttl'] = 'Default TTL';


?>