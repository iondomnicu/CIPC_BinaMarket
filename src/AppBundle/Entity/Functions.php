<?php
class Functions {
    public function showItems(){
        $connect = $this->get('database_connection');
        $items['result']= $connect->fetchAll('select * from items');
        return $items['result'];
    }
}
