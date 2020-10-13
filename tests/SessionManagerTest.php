<?php
use PHPUnit\Framework\TestCase;

/**
*Is the SessionManager object Created
*/
class SessionManagerTest extends TestCase
{
	public function testSessionObjectIsCreated() : void
	{
		$this->assertIsObject(new SessionManager);
	}
	
	public function testSessionManagerHasStaticMethodCreate() : void
	{
		$method = new ReflectionMethod('SessionManager', 'create');
		$this->assertTrue($method->isStatic(), 'Method created(0 exists but is not static');
	}
	
	public function testSessionContainerCreated() : void
	{
		SessionManager::create();
		$this->assertArrayHasKey('container', $_SERVER, );
		$this->assertIsArray($_SESSION['container']);
	}
	
	public function testSessionHasMethodDestroy() : void
	{
		
		
	}
}
