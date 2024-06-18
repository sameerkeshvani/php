<?php
class employee
{
    var $da=20,$hra=10,$ta=5,$it=3000,$pf=5,$pt=5;
    var $ename,$dname,$bsalary,$gs,$cd,$cn;
    function calculate_gross($ename1,$dname1,$bsalary1)
    {
        $this->ename=$ename1;
        $this->dname=$dname1;
        $this->bsalary=$bsalary1;
        $this->gs=$this->bsalary+($this->da*$this->bsalary/100)+($this->hra*$this->bsalary/100)+($this->ta*$this->bsalary/100);
        echo "Gross Salary Of $this->ename working in $this->dname Department is $this->gs<br>";
    }
    function calculate_deduction()
    {
        $this->cd=$this->it+($this->pf*$this->bsalary/100)+($this->pt*$this->bsalary/100);
        echo "Amount To Be Deducted From $this->ename is $this->cd<br>";
    }
    function calculate_net()
    {
        $this->cn=$this->gs-$this->cd;
        echo "Salary After Addition And Deduction Of Required Amount Is $this->cn";
    }
}
$sameer = new employee;
$sameer->calculate_gross("Sameer","Computer",50000);
$sameer->calculate_deduction();
$sameer->calculate_net();
 ?>