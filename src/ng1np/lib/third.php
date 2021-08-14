<?php
#---pozivanje klase---#
$eng = new ng1np();
#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '0110, 0000, 1111, 1001';
$eng->author = 'rootwalker';
$eng->description = '0110';
$eng->title = '1001';

$eng->sadrzaj = array( 
	array(
	"proces1" => "0110",
	"proces2" => "1111",
	"proces3" => "1001",
	"proces4" => "0000"
	),
	array(
	"proces1" => "1111",
        "proces2" => "0110",
        "proces3" => "1001",
        "proces4" => "0000"
	),
	array(
	"proces1" => "1001",
        "proces2" => "0000",
        "proces3" => "0110",
        "proces4" => "1111"
	)
);

$eng->strana = array( 
        array(
        "server1" => "0010",
        "server2" => "1100",
        "server3" => "1010"
        ),
        array(
        "server1" => "0011",
        "server2" => "1101",
        "server3" => "0101"
        )
);


#---render metoda---#
echo $eng->render('up/third.tpl');

