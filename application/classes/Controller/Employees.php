<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employees extends Controller_Welcome
{
    
    public function action_index()
    {
        $Model = new Model_Employees;
        $employees = $Model->get_employees();
        $this->template->content = View::factory('employees/show_employees')->set('employees', $employees);
    }
    
    public function action_add_employee()
    {

        $this->template->content = View::factory('employees/add_employee')->set('action', 'add');
    }
    
    public function action_edit_employee()
    {
        $Model = new Model_Employees;
        $pesel = $this->request->param('id');
        $employee = $Model->get_employee($pesel);
        $_POST['pesel'] = $pesel;
        $_POST['name'] = $employee['imie'];
        $_POST['surname'] = $employee['nazwisko'];
        $_POST['position'] = $employee['stanowisko'];
        $this->template->set('action', 'employees/edit');
        $this->template->content = View::factory('employees/add_employee')->set('action', 'edit')->set('old_pesel', $pesel);
    }
    
    public function action_add()
    {
        $Model = new Model_Employees;
        if ($this->request->post())
        {
            $Model->add($_POST);
        }
        $this->action_index();
    }
    
    public function action_edit()
    {
        $Model = new Model_Employees;
        $pesel = $this->request->post('old_pesel');
        $Model->edit_employee($pesel, $_POST);
        $this->action_index();
    }
    
    public function action_delete()
    {
        $pesel = $this->request->param('id');
        $Model = new Model_Employees;
        $Model->delete($pesel);
        $this->action_index();
    }
    
}