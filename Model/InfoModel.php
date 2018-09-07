<?php
class InfoModel{
private $product_name;
private $price;
private $quantity;
private $date;
private $id;

    /**
     * InfoModel constructor.
     */
    public function __construct ($row){
        $this->product_name=$row['Product_name'];
        $this->price=$row['price'];
        $this->quantity=$row['quanity'];
        $this->date=$row['date'];
        $this->id=$row['info_id'];
    }

    /**
     * @return mixed
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId ( $id )
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQuantity ()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity ( $quantity )
    {
        $this->quantity = $quantity;
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
    public function getPrice ()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice ( $price )
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDate ()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate ( $date )
    {
        $this->date = $date;
    }
}
class InfoPrint extends InfoModel {
    public function productList(){
        echo $this->getProductName ();
    }
    public function priceList(){
        echo $this->getPrice ();
    }
    public function quantityList(){
        echo $this->getQuantity ();
    }
    public function dateList(){
        echo $this->getDate ();
    }
    public function infoId(){
        echo $this->getId ();
    }
}

