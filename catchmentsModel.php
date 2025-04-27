<?php

class CavingArea
{
    function __construct(public $name, public $subAreas) {}
}

class SubArea
{
    function __construct(public $name, public $catchments = []) {}
}

class Catchment
{
    function __construct(public $name) {}
}

//Replace with call to database when set up
function getAreas($area = 'ALL'): array
{

    $yorkshireDales = new cavingArea(
        'Yorkshire Dales',
        [
            new SubArea(
                "Ingleborough and Whernside",
                [
                    new Catchment('Alum Pot'),
                    new Catchment('Newby Moss'),
                    new Catchment('The Allotment'),
                    new Catchment('Kingsdale Head'),
                    new Catchment('Marble Steps'),
                    new Catchment('Gaping Gill'),
                    new Catchment('Bruntscar'),
                    new Catchment('Park Fell'),
                    new Catchment('White Scar'),
                    new Catchment('West Kingsdale'),
                    new Catchment('East Kingsdale'),
                    new Catchment('Chapel-le-Dale')
                ]
            ),
            new SubArea("Ease Gill")
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
