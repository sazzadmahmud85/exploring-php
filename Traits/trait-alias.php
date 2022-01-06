<?php
trait NumberSeriesOne{
   private function numberSeriesA()
    {
        echo "Number Series A\n";
    }

    function numberSeriesB()
    {
        echo "Number Series B\n";
    }
}

class SomeClass
{
    function numberSeriesA()
    {
        echo "Printing + Printing Number Series A\n";
    }
}

class NumberSeries extends SomeClass
{
    use NumberSeriesOne {
        numberSeriesA as numberSeriesAA;
    }

    function numberSeriesA()
    {
        echo "Printing + Printing Number Series A\n";
    }
}

$ns = new NumberSeries();
// $ns->numberSeriesAA();
