<?php

class Area
{
    function __construct(public $name, public $subAreas = []) {}
}

//Replace with call to database when set up
function getAreas($area = 'ALL'): array
{

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

    // $yorkshireDales = [
    //     'subAreas' => [
    //         "subAreaName" => "Ingleborough and Whernside",
    //         "catchments" => [
    //         'Alum Pot',
    //         'Newby Moss',
    //         'The Allotment',
    //         'Kingsdale Head',
    //         'Marble Steps',
    //         'Gaping Gill',
    //         'Bruntscar',
    //         'Park Fell',
    //         'White Scar',
    //         'West Kingsdale',
    //         'East Kingsdale',
    //         'Chapel-le-Dale' 
    //         ]
    //     ]
    // ];

    // $yorkshireDales = [
    //     'Ingleborough and Whernside' => [
    //         'Alum Pot',
    //         'Newby Moss',
    //         'The Allotment',
    //         'Kingsdale Head',
    //         'Marble Steps',
    //         'Gaping Gill',
    //         'Bruntscar',
    //         'Park Fell',
    //         'White Scar',
    //         'West Kingsdale',
    //         'East Kingsdale',
    //         'Chapel-le-Dale'    
    //     ],
    //     'Ease Gill' => [],
    //     'Leck Fell' => [],
    //     'Ribblesdale' => []
    // ];

    $peakDistrict = [
        'Aldery Edge',
        'Ashover and Crich',
        'Bradbourne',
        'Bradford',
        'Buxton',
        'Castleton',
        'Derwent North',
        'Derwent South',
        'Dove',
        'Gritstone',
        'Hamps and Manifold',
        'Lathkill Dale',
        'Magnesian',
        'Wormhill',
        'Wye'
    ];
    $southWales = [];
    $mendips = [];
    $forestOfDean = [];
    $scotland = [];

    if ($area === 'ALL') {
        return [
            $yorkshireDales,
            $peakDistrict,
            $southWales,
            $mendips,
            $forestOfDean,
            $scotland
        ];
    } elseif ($area === 'YORKSHIREDALES') {
        return [
            $yorkshireDales
        ];
    } elseif ($area === 'PEAKDISTRICT') {
        return [
            $peakDistrict
        ];
    } else {
        return [];
    }
}
