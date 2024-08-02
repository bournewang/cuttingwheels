<?php
// return [
$full_name  = "Zhengzhou Jinmingwei New Material Technology Co., Ltd.";
$short_name = "Jinmingwei New Material";
$welcome    = "Welcome to Jinmingwei - High-Quality Grinding Wheel Manufacturer";
$address    = "86# Industrial Zone, Zhengzhou, China";
$telphone   = "+86 156-4908-8999, +86 130-0751-5699";
$email      = "sales@cuttingwheels.net";
$contact    = "Mr Zhang";

$team   = [
    ['title' => 'CEO', 'name' => 'Zhang Yanwei',    'avatar' => '/images/avatar.jpg'],
    ['title' => 'COO', 'name' => 'Zhang Jiadong',   'avatar' => '/images/avatar.jpg'],
];

$gallery = [
    "photo-0.jpg" => "Cutting Wheels Machine",
    "photo-1.jpg" => "Cutting Wheels Machine",
    "photo-2.jpg" => "Cutting Wheels Machine",
    "photo-3.jpg" => "Cutting Wheels Plant",
    "photo-4.jpg" => "Cutting Wheels heating furnace",
    "photo-5.jpg" => "The semi-finished grinding wheels are placed into the furnace to be heated.",
    "photo-6.jpg" => "Cutting Wheels material",
    "photo-7.jpg" => "The finished grinding wheels are packed and ready for shipment.",
    "photo-8.jpg" => "The finished grinding wheels are packed and ready for shipment.",
    // "photo-9.jpg" => "The finished grinding wheels are packed and ready for shipment.",
];

$cutting_disc_desc  = file_get_contents(dirname(__FILE__).'/cutting-disc-desc.html');
$mesh_disc_desc     = file_get_contents(dirname(__FILE__).'/mesh-disc-desc.html');
$grinding_disc_desc = file_get_contents(dirname(__FILE__).'/grinding-disc-desc.html');

$products = [
    [
        'series' =>'Cutting Disc', 
        'description' => $cutting_disc_desc,
        'image' => 'image1.jpg',
        'spec' => ["405*3.2*32"]
    ],
    [
        'series' =>'Cutting Disc', 
        'description' => $cutting_disc_desc,
        'image' => 'image1.jpg',
        'spec' => ["355*2.8*25.4"]
    ],
    [
        'series' =>'Cutting Disc', 
        'description' => $cutting_disc_desc,
        'image' => 'image3.jpg',
        'spec' => [
            "107*1.2*16", 
            "115*1.2*22", 
            "125*1.2*22", 
            "150*1.6*22", 
            "180*1.6*22", 
            "230*2*22"
        ]
    ],
    [
        'series' =>'Single Mesh Cutting Disc',
        'description' => $mesh_disc_desc,
        'image' => 'image4.jpg',
        'spec' => ["107*1.2*16"]
    ],
    [
        'series' =>'Grinding Disc',
        'description' => $grinding_disc_desc,
        'image' => 'image5.jpg',
        'spec' => [
            "100*6*16",  
            "115*6*22",
            "125*6*22",
        ]
    ],
    [
        'series' =>'Grinding Disc',
        'description' => $grinding_disc_desc,
        'image' => 'image6.jpg',
        'spec' => [
            "150*6*22",
            "180*6*22",
            "230*6*22"
        ]
    ]
];