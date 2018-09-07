<?php
class StaffModel{
   private $staff_name;
   private $staff_position;
   private $department_name;
   private $staff_salary;

    /**
     * StaffModel constructor.
     */
    public function __construct ($row){
        $this->staff_name=$row['staff_name'];
        $this->staff_position=$row['job'];
        $this->department_name=$row['departmant_name'];
        $this->staff_salary=$row['staff_salary'];
    }
    /**
     * @return mixed
     */
    public function getStaffSalary ()
    {
        return $this->staff_salary;
    }

    /**
     * @param mixed $staff_salary
     */
    public function setStaffSalary ( $staff_salary )
    {
        $this->staff_salary = $staff_salary;
    }



    /**
     * @return mixed
     */
    public function getDepartmentName ()
    {
        return $this->department_name;
    }

    /**
     * @param mixed $department_name
     */
    public function setDepartmentName ( $department_name )
    {
        $this->department_name = $department_name;
    }

    /**
     * @return mixed
     */
    public function getStaffName ()
    {
        return $this->staff_name;
    }

    /**
     * @param mixed $staff_name
     */
    public function setStaffName ( $staff_name )
    {
        $this->staff_name = $staff_name;
    }

    /**
     * @return mixed
     */
    public function getStaffPosition ()
    {
        return $this->staff_position;
    }

    /**
     * @param mixed $staff_position
     */
    public function setStaffPosition ( $staff_position )
    {
        $this->staff_position = $staff_position;
    }
}
class printStaff extends StaffModel {
    public function printStaffName(){
        echo $this->getStaffName ();
    }
    public function printStaffJob(){
        echo $this->getStaffPosition ();
    }
    public function printDepartmant(){
        echo $this->getDepartmentName ();
    }
    public function printSalary(){
        echo $this->getStaffSalary ();
    }
}