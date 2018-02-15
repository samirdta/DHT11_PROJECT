<?php
use PHPUnit\Framework\TestCase;
use MeasureDao;
include 'autoload.inc';

class MeasureDaoTest extends TestCase {
    
    
    /**
     *
     * @var MeasureDao
     */
    private $measureDao;
    
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        
        // TODO Auto-generated UserDaoTest::setUp()
        $config = include '../inc/config.php';
        
        $this->measureDao = new MeasureDao($config);
    }
    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        
        
        // TODO Auto-generated UserDaoTest::tearDown()
        $this->measureDao = null;
        
    }
    
   
    public function testInsertMeasure() {
        
        $measure = new Measure(40, 50);
        $id = $this->measureDao->insertMeasure($measure);
        $newMeasure = $this->measureDao->findMeasureById($id);
        
        
        $this->assertEquals(70, $newMeasure->humidite);
        $this->assertEquals(40, $newMeasure->temperature);
        
        
    }
    
}
    