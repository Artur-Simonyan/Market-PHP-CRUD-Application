<?php
class ProductModel{
    private $product_id;
    private $product_name;
    private $department_name;

    public function __construct ($row){
        $this->product_name=$row['Product_name'];
        $this->department_name=$row['departmant_name'];
        $this->product_id=$row['Product_id'];
    }
    /**
     * @return mixed
     */
    public function getProductId ()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId ( $product_id )
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getProductName ()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName ( $product_name )
    {
        $this->product_name = $product_name;
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

}
class printProduct extends ProductModel {
    public function productsList(){
        echo $this->getProductName ();
    }
    public function departmentList(){
        echo $this->getDepartmentName ();
    }
    public function productId(){
       echo $this->getProductId ();
    }
}
