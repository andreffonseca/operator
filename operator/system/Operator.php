<?php

namespace Operator\System;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Operator\Database\Database;

/**
 * Description Operator
 * 
 * Long Description
 *
 * @package
 * @category
 * @version 1.0.a
 * 
 * @author Andre Fonseca <andre.fg.fonseca@gmail.com>
 * @since 1.0.a
 * 
 */

class Operator {
    
    private $db;
    
    private $alertConfig;
    
    public function __construct() {
        
    }
    
    /**
     * 
     * @return $this
     */
    public function initialize() {
        
        $dbSpec = new Database();
        $this->db = $dbSpec->open();
        return $this;
    }
    
    /**
     * 
     */
    public function process() {
        
        try {
            
            $alerts =  $this->db->connection->select('ods_api_call_temp',"*",[
                "flg_stat[=]" => 0],["order" => ["HOST,IP,ALERT_ID" => "ASC"]]);

            
            if (count($alerts) > 0) {

                $process = new Process();
                $process->setAlertsList($alerts);
                $process->setAlertConfigTable($this->alertConfig);
                $process->processList();
            }
        
        } catch (Exception $ex) {
            print_r($ex);
        }
    }
    
    /**
     * 
     * @return $this
     */
    public function preprocess() {
        
        return $this;
    }
    
    /**
     * 
     * @return $this
     */
    public function posprocess() {
        
        return $this;
    }
    
    /**
     * 
     */
    public function end() {
        $this->db->close();
    }
}
