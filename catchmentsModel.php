<?php


//Replace with call to database when set up
function getAreas($area = 'ALL'): array {

    $yorkshireDales = [
        'Ingleborough and Whernside' => [
            'Alum Pot',
            'Newby Moss',
            'The Allotment',
            'Kingsdale Head',
            'Marble Steps',
            'Gaping Gill',
            'Bruntscar',
            'Park Fell',
            'White Scar',
            'West Kingsdale',
            'East Kingsdale',
            'Chapel-le-Dale'    
        ],
        'Ease Gill' => [],
        'Leck Fell' => [],
        'Ribblesdale' => []
    ];

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
            'Yorkshire Dales' => $yorkshireDales,
            'Peak District' => $peakDistrict,
            'South Wales' => $southWales,
            'Mendips' => $mendips,
            'Forest of Dean' => $forestOfDean,
            'Scotland' => $scotland
        ];
    } elseif ($area === 'YORKSHIREDALES') {
        return [
            'Yorkshire Dales' => $yorkshireDales
        ];
    } elseif ($area === 'PEAKDISTRICT') {
        return [
            'Peak District' => $peakDistrict
        ];
    } else {
        return [];
    }

}
?>