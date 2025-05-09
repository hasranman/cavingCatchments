<?php

class Area
{
    function __construct(public $name, public $subAreas = []) {}
}

//Replace with call to database when set up
function getAreas($area = 'ALL'): array
{

    // $db = new SQLite3('../database.db');

    $yorkshireDales = new Area(
        'Yorkshire Dales',
        [
            new Area(
                "Ingleborough and Whernside",
                [
                    new Area('Alum Pot'),
                    new Area('Newby Moss'),
                    new Area('The Allotment'),
                    new Area('Kingsdale Head'),
                    new Area('Marble Steps'),
                    new Area('Gaping Gill'),
                    new Area('Bruntscar'),
                    new Area('Park Fell'),
                    new Area('White Scar'),
                    new Area('West Kingsdale'),
                    new Area('East Kingsdale'),
                    new Area('Chapel-le-Dale')
                ]
            ),
            new Area("Ease Gill")
        ]
    );

    if ($area === 'ALL') {
        return [
            $yorkshireDales
        ];
    } elseif ($area === 'YORKSHIREDALES') {
        return [
            $yorkshireDales
        ];
    } else {
        return [];
    }
}
