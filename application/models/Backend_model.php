<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Backend_model extends CI_Model{

    function averagePoint($dept){
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="$dept"');
        return $query->row();
        }

	function avgACCOUNTING($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="7" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="7"');
            return $query->row();
        }
    }

    function avgAGRI($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="28" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="28"');
            return $query->row();
        }
    }

	function avgANNEX($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="46" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="46"');
            return $query->row();
        }
    }

    function avgASSESOR($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="21" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="21"');
            return $query->row();
        }
    }

    function avgBFP($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="41" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="41"');
            return $query->row();
        }
    }       

	function avgBJMP($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="42" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="42"');
            return $query->row();
        }
    }

	function avgBPLO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="24" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="24"');
            return $query->row();
        }
    }

    function avgBTECH($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="31" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="31"');
            return $query->row();
        }
    }

    function avgBTMO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="34" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="34"');
            return $query->row();
        }
    }

	function avgBUDGET($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="19" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="19"');
            return $query->row();
        }
    }

    function avgCAO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="18" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="18"');
            return $query->row();
        }
    }

    function avgCEMETERY($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="50" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="50"');
            return $query->row();
        }
    }     

	function avgCOA($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="48" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="48"');
            return $query->row();
        }
    }

	function avgCOMELEC($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="43" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="43"');
            return $query->row();
        }
    }

    function avgCONFERENCE($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="47" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="47"');
            return $query->row();
        }
    }

    function avgDILG($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="40" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="40"');
            return $query->row();
        }
    }

	function avgENGINEERING($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="20" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="20"');
            return $query->row();
        }
    }

    function avgGSO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="6" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="6"');
            return $query->row();
        }
    }

    function avgHRMO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="16" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="16"');
            return $query->row();
        }
    }      

	function avgIPU($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="51" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="51"');
            return $query->row();
        }
    }
	function avgLCR($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="8" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="8"');
            return $query->row();
        }
    }

    function avgLIBRARY($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="29" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="29"');
            return $query->row();
        }
    }

    function avgMALASAKIT($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="36" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="36"');
            return $query->row();
        }
    }

	function avgMARKET($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="35" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="35"');
            return $query->row();
        }
    }

    function avgMAYORS($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="13" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="13"');
            return $query->row();
        }
    }

    function avgMDRRMO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="56" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="56"');
            return $query->row();
        }
    }  

	function avgMDRRMO2($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="44" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="44"');
            return $query->row();
        }
    }

	function avgMEEM($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="26" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="26"');
            return $query->row();
        }
    }

    function avgMENRO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="45" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="45"');
            return $query->row();
        }
    }

    function avgMHO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="27" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="27"');
            return $query->row();
        }
    }

	function avgMICTO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="5" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="5"');
            return $query->row();
        }
    }

    function avgMLO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="15" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="15"');
            return $query->row();
        }
    }

    function avgMPDC($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="22" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="22"');
            return $query->row();
        }
    }     

	function avgMSWDO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="25" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="25"');
            return $query->row();
        }
    }

	function avgOSCA($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="38" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="38"');
            return $query->row();
        }
    }

    function avgPDAO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="62" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="62"');
            return $query->row();
        }
    }

    function avgPESO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="32" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="32"');
            return $query->row();
        }
    }

	function avgPIO($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="4" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="4"');
            return $query->row();
        }
    }

    function avgPNP($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="39" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="39"');
            return $query->row();
        }
    }

    function avgPOL($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="60" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="60"');
            return $query->row();
        }
    }      

	function avgPOPCOM($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="17" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="17"');
            return $query->row();
        }
    }

	function avgRHU1($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="9" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="9"');
            return $query->row();
        }
    }

    function avgRHU2($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="10" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="10"');
            return $query->row();
        }
    }

    function avgRHU3($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="11" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="11"');
            return $query->row();
        }
    }

	function avgRHU4($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="12" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="12"');
            return $query->row();
        }
    }

    function avgSB($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="14" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="14"');
            return $query->row();
        }
    }

    function avgSANITATION($year){
       if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="37" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="37"');
            return $query->row();
        }
    }       

	function avgSOME($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="53" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="53"');
            return $query->row();
        }
    }

	function avgSOME2($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="54" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="54"');
            return $query->row();
        }
    }

    function avgSPORTS($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="33" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="33"');
            return $query->row();
        }
    }

    function avgTOURISM($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="49" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="49"');
            return $query->row();
        }
    }

	function avgTOURISM2($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="30" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="30"');
            return $query->row();
        }
    }

    function avgTREASURY($year){
        if(!empty($year)){
            $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="23" AND year(rate_year)="$year"');
            return $query->row();
        }
        else
        {
        $query = $this->db->query('SELECT AVG(points) avg_points FROM rating WHERE dept_id="23"');
            return $query->row();
        }
    }
}
