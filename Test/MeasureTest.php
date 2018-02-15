<?php
use PHPUnit\Framework\TestCase;
use classes\Measure;
include '../inc/autoload.inc';


class MeasureTest extends TestCase {
    
    public function testMeasure() {
        
        $measure = new Measure(NULL, 50, 50);
        
        $this->assertEquals(NULL, $measure->id);
        $this->assertEquals(50, $measure->temperature);
        $this->assertEquals(50, $measure->humidite);
        
       
    }
   
}

