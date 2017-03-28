<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_parceiro'))
{
    function load_parceiro($parceiro){
		
		$dir = base_url('assets/imgs/parceiros/' . $parceiro);
		$count = count(glob($dir));
		echo $count;
		return $count;
    }   
}