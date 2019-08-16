<?php 

class Main {
    private $num;
    private $remainder3;
    private $remainder5;
    private $remainder35;    

    /**
     * Get remainder
     *
     * @param Integer $num
     * @param Integer $param
     * @return remainder
     */
    private function getRemainder($num, $param)
    {
        return $num % $param;
    }

    /**
     * add reaminder
     *
     * @param Integer $num3
     * @param Integer $num5
     * @return Integer sum
     */
    private function addRemainder($num3, $num5) : int
    {
        return $num3 +  $num5;
    }

    /**
     * Write to output
     *
     * @return void
     */
    private function write() : void
    {
        switch (true) 
        {
            case ($this->remainder35 === 0):
                echo sprintf("%s\n", "Linianos");
                break;
            case ($this->remainder5 === 0):
                echo sprintf("%s\n", "IT");
                break;
            case ($this->remainder3 === 0):
                echo sprintf("%s\n", "Linio");
                break;
            default:
                echo sprintf("%s\n", $this->num);
        }
    }

    /**
     * Execute
     * @return void
     */
    public function execute() : void
    {
        for ($i = 1; $i <= 100; $i++)
        {
            $this->num = $i;
            $this->remainder3  = $this->getRemainder($i, 3);
            $this->remainder5  = $this->getRemainder($i, 5);
            $this->remainder35 = $this->addRemainder($this->remainder3, $this->remainder5);
            $this->write();
        }
    }    
}