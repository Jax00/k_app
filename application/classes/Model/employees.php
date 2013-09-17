<?php defined('SYSPATH') or die('No direct script access.');

Class Model_Employees extends Kohana_Model
{
    
    public function add($page_data)
    {
        $insert = array(
            'PESEL' => $page_data['pesel'],
            'imie' => $page_data['name'],
            'nazwisko' => $page_data['surname'],
            'stanowisko' => $page_data['position'],
        );
        $result = DB::insert('employees', array_keys($insert))->values($insert)->execute();
        return $result;
    }
    
    public function get_employees()
    {
        $result = DB::select('*')->from('employees')->execute()->as_array();
        return $result;
    }
    
    public function get_employee($pesel)
    {
        $result = DB::select('*')->from('employees')->where('PESEL', '=', $pesel)->execute()->current();
        return $result;
    }
    
    public function edit_employee($pesel, $page_data)
    {
        $update = array(
            'PESEL' => $page_data['pesel'],
            'imie' => $page_data['name'],
            'nazwisko' => $page_data['surname'],
            'stanowisko' => $page_data['position']
        );
        $result = DB::update('employees')->set($update)->where('PESEL', '=', $pesel)->execute();
        return $result;
    }
    
    public function delete($pesel) {
        $result = DB::delete('employees')->where('PESEL', '=', $pesel)->execute();
        return $result;
    }
    
}