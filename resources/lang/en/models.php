<?php

use App\Models\Estate;

return [

    'example' => [
        'first' => [
            Estate::OFFER_SALE => 'Վաճառք',
            Estate::OFFER_RENT => 'Վարձակալություն',
        ],
        'second' => [
            Estate::OBJECT_COMMERCIAL => 'Կոմերցիոն տարածք',
            Estate::OBJECT_APT => 'Բնակարան',
            Estate::OBJECT_HOUSE => 'Սեփական տուն',
            Estate::OBJECT_TERRITORY => 'Հողատարածք',
        ]
    ]

];
