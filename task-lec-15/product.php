<?php

class product
{
    public $name;
    private $price;
    public $brand;
    public $image;
    public $description;
    public $tax;

    public function __construct($name,$price,$tax)
    {
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }
    
    // public function getPrice(){
    //     return $this->price;
    // }

    public function getName(){
        return $this->name;
    }


    public function priceAfterDiscount($discount){
        $amount = (int)$this->price * (float)$discount;
        if($this->price > $amount){
            $this->price -= $amount;
            return  $this->price ;
        }else{
            echo "Invalid Request";
        }
    }

    public function getFinalPrice($discount){
        $amount = $this->price * $this->tax;
        $this->price += $amount;
        return $this->price;
    }
}
echo "PRODUCT 1" ,"<br>","<br>";
$prod1 = new product("Laptop",45000 ,0.05);
$prod1->brand = "Lenovo"; 
$prod1->image = "https://www.rawpixel.com/image/12362751/png-background-sky#eyJrZXlzIjoibGFwdG9wIiwic29ydGVkS2V5cyI6ImxhcHRvcCJ9"; 
$prod1->description = "This is a smart device";
echo "Price After Discount: ". $prod1->priceAfterDiscount(0.1);
echo "<br>";
echo "Final Price: " . $prod1->getFinalPrice(0.1);
echo "<pre>";
print_r($prod1);

echo "============================================================" ,"<br>";
echo "PRODUCT 2","<br>","<br>";
$prod2 = new product("Iphone13",30000 ,0.3);
$prod2->brand = "Apple"; 
$prod2->image = "https://www.rawpixel.com/image/12362751/png-background-sky#eyJrZXlzIjoibGFwdG9wIiwic29ydGVkS2V5cyI6ImxhcHRvcCJ9"; 
$prod2->description = "This is a smart Phone";
echo "Price After Discount: ". $prod2->priceAfterDiscount(0.2);
echo "<br>";
echo "Final Price: " . $prod2->getFinalPrice(0.2);
echo "<pre>";
print_r($prod2);


echo "============================================================" ,"<br>";


echo "PRODUCT 3","<br>","<br>";
$prod2 = new product("Monitor",7000 ,0.1);
$prod2->brand = "MSI"; 
$prod2->image = "https://www.rawpixel.com/image/12362751/png-background-sky#eyJrZXlzIjoibGFwdG9wIiwic29ydGVkS2V5cyI6ImxhcHRvcCJ9"; 
$prod2->description = "This is a smart Phone";
echo "Price After Discount: ". $prod2->priceAfterDiscount(0.2);
echo "<br>";
echo "Final Price: " . $prod2->getFinalPrice(0.2);
echo "<pre>";
print_r($prod2);

