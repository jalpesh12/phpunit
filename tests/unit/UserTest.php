<?php

Use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;
    
    public function setUp()
    {
        $this->user = new \App\Models\User;
    }

    public function testThatWeCanGetTheFirstName()
    {
            
//         $user = new \App\Models\User;
        
        $this->user->setFirstName('Jalpesh');
        
        $this->assertEquals($this->user->getFirstName(), 'Jalpesh');
        
        
    }
    
    public function testThatWeCanGetTheLastName()
    {
        
//         $user = new \App\Models\User;
        
        $this->user->setLastName('Patel');
        
        $this->assertEquals($this->user->getLastName(), 'Patel');
        
        
    }
    
    public function testFullNameIsReturned()
    {
//         $user = new \App\Models\User;
        
        $this->user->setFirstName('Jalpesh');
        
        $this->user->setLastName('Patel');
        
        $this->assertEquals($this->user->getFullName(),'Jalpesh Patel');
        
    }
    
    public function testFirstNameAndLastNameAreTrimmed()
    {
//         $user = new \App\Models\User;
        
        $this->user->setFirstName(' Jalpesh  ');
        $this->user->setLastName('   Patel');
        
        $this->assertEquals($this->user->getFirstName(),'Jalpesh');
        $this->assertEquals($this->user->getLastName(),'Patel');
        
        
    }
    
    public function testEmailVariablesContainCorrectValues()
    {
//         $user = new \App\Models\User;
        
        $this->user->setFirstName('Jalpesh');
        $this->user->setLastName('Patel');
        $this->user->setEmail('jalpesh.patel1@gmail.com');
        
        $emailVariable = $this->user->getEmailVariables();
        
        $this->assertArrayHasKey('full_name', $emailVariable);
        $this->assertArrayHasKey('email', $emailVariable);
        
        $this->assertEquals($emailVariable['full_name'], 'Jalpesh Patel');
        $this->assertEquals($emailVariable['email'], 'jalpesh.patel1@gmail.com');
        
    }
    
    
}