<?php
require_once(dirname(__FILE__).'/../init.php');

class RanksTest extends MY_UnitTestCase
{
    var $myclass='XoopsRanks';

    public function SetUp() {
    }

    public function test_100() {
        $instance=new $this->myclass();
        $this->assertInstanceOf($this->myclass,$instance);
		$value=$instance->getVars();
        $this->assertTrue(isset($value['rank_id']));
        $this->assertTrue(isset($value['rank_title']));
        $this->assertTrue(isset($value['rank_min']));
        $this->assertTrue(isset($value['rank_max']));
        $this->assertTrue(isset($value['rank_special']));
        $this->assertTrue(isset($value['rank_image']));
    }
}
