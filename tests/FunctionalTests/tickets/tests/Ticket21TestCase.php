<?php

class Ticket21TestCase extends PradoGenericSelenium2Test
{
	function test()
	{
		$this->url('tickets/index.php?page=Ticket21');
		$this->assertEquals($this->title(), "Verifying Ticket 21");
		$this->byId("ctl0_Content_button1")->click();
		$this->assertContains("Radio button clicks: 1", $this->source());
		$this->byId("ctl0_Content_button1")->click();
		$this->assertContains("Radio button clicks: 1", $this->source());
	}
}
