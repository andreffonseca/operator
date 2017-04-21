<?php

namespace Operator\Database;

use Medoo\Medoo;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description Database
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
class Database {
    
    public $connection;
    
    /**
     * 
     * @return Medoo
     */
    public function open() {
        
        $this->connection = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'itmon',
            'server' => 'localhost',
            'username' => 'operator',
            'password' => 'operator',
            'charset' => 'utf8'
        ]);
        
        return $this;
    }
    
    public function close() {
        $this->connection = null;
    }
}
