<?php
namespace  App\Calculator;

class Calculator
{
    protected $operations = [];
    
    public function setOperation(OperationInterface $operation)
    {
        $this->operations[] = $operation;
    }
    
    public function getOperations()
    {
        return $this->operations;
    }
    
    public function setOperations(array $operations)
    { 
        $fileteredOptions = array_filter($operations, function($operation){
            return $operation instanceof OperationInterface;
        });
        $this->operations = array_merge($this->operations, $fileteredOptions);
    }
    
    public function calculate()
    {   
        return $this->operations[0]->calculate();
    }
    
}