<?php 

namespace Wooletthedevsout\Shipping\Zone;

class Creator implements \Countable
{
    protected $shipping_zones;
    
    protected $shipping_core;
    
    public $data;
    
    public function __construct(array $zones_data)
    {
        $this->shipping_core = new \WC_Shipping();
        $this->shipping_zones = new \WC_Shipping_Zones();
        $this->data = $zones_data;
    }
    
    public function if_method(mixed $method_names)
    {
        $j = $this->count;
        $methods = $this->shipping_core->get_shipping_methods();
        
        for($i = 0; $i < $j, $i++) {
            foreach($method_names as $method) {
                if(in_array($method, $methods) {
                
                }
            }   
        }
    }
    
    public function count()
    {
       return count($this->data);
    }
}