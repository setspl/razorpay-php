<?php

namespace Razorpay\Tests;

use Razorpay\Api\Request;

class AddonTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }
    
    public function testcreate()  // Create an Add-on
    {
        $data =  $this->api->subscription->fetch('sub_HowiBGCx3q8sVs')->createAddon(array('item' => array('name' => 'Extra Chair', 'amount' => 3000, 'currency' => 'INR'), 'quantity' => 1));
        
        $this->assertTrue(is_array($data->toArray()));
        
        $this->assertTrue(is_object($data['item']));
    }
    
    public function testFetchId() // Fetch Subscription Link by ID
    {
        $data = $this->api->addon->fetch('ao_I47DYIbTSXtqcU');
        
        $this->assertTrue(is_array($data->toArray()));
        
        $this->assertTrue($data['entity']=='addon');
    }
    
    public function testFetchall() // Fetch all addons
    {
        $data = $this->api->addon->fetchAll();
        
        $this->assertTrue(is_array($data->toArray()));
        
        $this->assertTrue(is_array($data['items']));
    }

}