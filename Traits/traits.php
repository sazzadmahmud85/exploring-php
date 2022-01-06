<?php
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
    }

    function numberSeriesB(){
        echo "Number Series B\n";
    }
}

trait NumberSeriesTwo{
    function numberSeriesC(){
        echo "Number Series C\n";
    }

    function numberSeriesD(){
        echo "Number Series D\n";
    }
}

class numberSeries{
    use NumberSeriesOne, NumberSeriesTwo;
}

$ns  = new numberSeries();
$ns->numberSeriesA();
$ns->numberSeriesB();
$ns->numberSeriesC();