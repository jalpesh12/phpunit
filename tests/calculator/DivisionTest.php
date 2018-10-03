<?php
Use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /** @test */
    
    public function divides_given_operands()
    {
        $division = new \App\Calculator\Division;
        $division->setOperands([100, 2, 2]);
        
        $this->assertEquals(25, $division->calculate());
    }
    
    /** @test */
    
    public function removes_division_by_zero_operands()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
        
        $addition = new \App\Calculator\Addition;
        
        $addition->calculate();
        
    }
    
    /** @test */
    
    public function no_operands_given_throws_exception_when_calculating()
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);
        
        $addition = new \App\Calculator\Division;
        
        $addition->calculate();
        
    }
    
    
    
    
    
    
    
    
    
}