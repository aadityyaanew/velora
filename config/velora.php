<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Brand Information & Contacts
    |--------------------------------------------------------------------------
    */
    'brand' => [
        'name' => 'VELORA PURE',
        'subname' => 'PURE',
        'tagline' => 'PURE BY NATURE 💧 TRUSTED WORLDWIDE',
        'category' => 'PREMIUM PACKAGED DRINKING WATER',
        'phone' => '+91 98765 43210',
        'phone_raw' => '+919876543210',
        'whatsapp_number' => '919876543210',
        'email' => 'info@velorapure.com',
        'instagram' => 'https://www.instagram.com/velorapure',
        'instagram_handle' => '@velorapure',
        'address' => 'Industrial Area, Bottling Plant Boulevard, VELORA Hydration Facility',
        'plant_certifications' => 'FSSAI Lic. • BIS IS 14543 • ISO 22000 & 9001',
    ],

    /*
    |--------------------------------------------------------------------------
    | Product Lineup (All 6 Formats)
    |--------------------------------------------------------------------------
    */
    'products' => [
        [
            'id' => '250ml',
            'size' => '250 ML',
            'name' => 'VELORA Petite Banquet',
            'badge' => 'Boutique & Aviation',
            'tagline' => 'Pocket Luxury & Single-Serve Hospitality',
            'description' => 'Designed for fine banquets, airline cabins, executive meetings, and luxury hotel welcome trays to eliminate water wastage with pristine elegance.',
            'specs' => [
                'Packaging' => 'BPA-Free Food Grade PET',
                'Ideal For' => 'Events, Airlines, Hotel Rooms',
                'Cap Type' => 'Tamper-Evident Safety Seal',
                'Carton Size' => '24 / 48 Units',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I would like to enquire about bulk supply for 250 ML banquet bottles.',
        ],
        [
            'id' => '500ml',
            'size' => '500 ML',
            'name' => 'VELORA Active Classic',
            'badge' => 'Daily Essential',
            'tagline' => 'Everyday On-The-Go Cellular Hydration',
            'description' => 'The quintessential daily hydration format. Ergonomically contoured for sports grips, travel holders, and premium retail counters.',
            'specs' => [
                'Packaging' => 'Reinforced Recyclable PET',
                'Ideal For' => 'Commuting, Gym Sessions, Work Desks',
                'Cap Type' => 'High-Grip Hermetic Cap',
                'Carton Size' => '24 Units',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I would like to place an enquiry for 500 ML bottles.',
        ],
        [
            'id' => '1l',
            'size' => '1 LITER',
            'name' => 'VELORA Dining Standard',
            'badge' => 'Signature Format',
            'popular' => true,
            'tagline' => 'The Gold Standard for Tables & Restaurants',
            'description' => 'Our flagship silhouette. Favored by high-end restaurants, conference suites, and wellness enthusiasts aiming for complete daily intake goals.',
            'specs' => [
                'Packaging' => 'Ultra-Clear Virgin PET',
                'Ideal For' => 'Fine Dining, Executive Suites, Families',
                'Cap Type' => 'Aura-Sealed Safety Cap',
                'Carton Size' => '12 / 24 Units',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I would like to enquire about 1 Liter bottles supply.',
        ],
        [
            'id' => '2-5l',
            'size' => '2.5 LITER',
            'name' => 'VELORA Endurance Pitcher',
            'badge' => 'Athletic & Home',
            'tagline' => 'Tabletop Carafe & High-Performance Training',
            'description' => 'Engineered for athletes, boutique fitness studios, and dining table centerpieces needing high-volume hydration with a sturdy molded handle.',
            'specs' => [
                'Packaging' => 'Heavy-Duty Molded PET with Grip',
                'Ideal For' => 'Athletic Training, Dinner Tables, Road Trips',
                'Cap Type' => 'Wide-Mouth Pour Cap',
                'Carton Size' => '6 Units',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I would like to enquire for 2.5 Liter formats.',
        ],
        [
            'id' => '5l',
            'size' => '5 LITER',
            'name' => 'VELORA Countertop Dispenser',
            'badge' => 'Pantry & Suite',
            'tagline' => 'Integrated Smart-Tap Pour Station',
            'description' => 'Features an integrated no-spill flow tap. Fits effortlessly in home refrigerators, executive pantries, boutique cafes, and villa suites.',
            'specs' => [
                'Packaging' => 'Multi-Use Rigid Food-Grade Poly',
                'Ideal For' => 'Pantry Reserves, Modern Kitchens, Cafes',
                'Cap Type' => 'Precision Flow Dispenser Tap',
                'Carton Size' => '2 / 4 Units',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I am enquiring for 5 Liter countertop dispenser units.',
        ],
        [
            'id' => '20l',
            'size' => '20 LITER',
            'name' => 'VELORA Commercial Jar',
            'badge' => 'Institutional Supply',
            'tagline' => 'Automated Sanitized Bulk Cooler Supply',
            'description' => 'Industrial-strength sanitized polycarbonate jars compatible with standard hot & cold dispensers for commercial offices, clinics, and residential towers.',
            'specs' => [
                'Packaging' => 'UV-Sterilized Multi-Use Polycarbonate',
                'Ideal For' => 'Offices, Medical Centers, Gyms',
                'Cap Type' => 'Single-Use Spill-Proof Hygienic Cap',
                'Supply' => 'Scheduled Doorstep Delivery',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I would like to enquire about scheduled 20 Liter jar supply.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | B2B Commercial Sectors
    |--------------------------------------------------------------------------
    */
    'sectors' => [
        'gym' => [
            'id' => 'gym',
            'title' => 'Gyms & Performance Studios',
            'subtitle' => 'Peak Hydration & Rapid Recovery',
            'icon' => 'fa-dumbbell',
            'lead' => 'Empower athletes with electrolyte-enhanced hydration and ionized alkaline water designed to reduce lactic acid fatigue and boost stamina.',
            'features' => [
                'Alkaline (pH 8.5+) supply to neutralize workout metabolic acidity',
                'Available in 500 ML, 1 L, and 2.5 L endurance formats',
                'Custom co-branding with your fitness center logo',
                'Weekly automated replenishment with priority logistics',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I run a Gym/Fitness center and want to enquire for regular water supply.',
        ],
        'clinic' => [
            'id' => 'clinic',
            'title' => 'Clinics, Hospitals & Doctors',
            'subtitle' => 'Pharmaceutical-Grade Sterility & Patient Trust',
            'icon' => 'fa-stethoscope',
            'lead' => 'Cleanroom-bottled water tested to rigorous microbiological thresholds for patient waiting lounges, consultation cabins, and recovery wards.',
            'features' => [
                'Untouched by human hands: 100% automated cleanroom packaging',
                '0% microplastics, zero chlorine and heavy-metal impurities',
                'Sanitized individual 250 ML & 500 ML sealed patient bottles',
                'Strict compliance with FSSAI & BIS medical facility hygiene norms',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I am enquiring on behalf of a Medical Clinic/Hospital for sterile water supply.',
        ],
        'office' => [
            'id' => 'office',
            'title' => 'Corporate Offices & Workspaces',
            'subtitle' => 'Dependable Daily Workplace Hydration',
            'icon' => 'fa-building',
            'lead' => 'Elevate workplace energy and wellness with scheduled doorstep delivery of 20L jars and premium bottles for executive boardrooms.',
            'features' => [
                'Scheduled weekly/daily automated 20L dispenser jar replacement',
                'Sleek 500 ML & 1 L glass/PET bottles for client conferences',
                'Centralized corporate GST billing with flexible monthly invoicing',
                'Dedicated commercial account manager with express hotline',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I would like to enquire about corporate office water supply contracts.',
        ],
        'hotel' => [
            'id' => 'hotel',
            'title' => 'Hotels, Banquets & Hospitality',
            'subtitle' => 'Understated Luxury for Discerning Guests',
            'icon' => 'fa-hotel',
            'lead' => 'Create a memorable guest experience with bottles that elevate dining tables, luxury hotel guest rooms, wedding banquets, and executive lounges.',
            'features' => [
                'Bespoke 250 ML and 1 Liter luxury bottle silhouettes',
                'Private label custom branding options for premium hospitality partners',
                'Reliable high-capacity logistics for banquets and luxury weddings',
                'Exceptional crystal clarity matching fine glassware and crystal settings',
            ],
            'whatsapp_text' => 'Hi Velora Pure, I am enquiring about luxury hotel and banquet water supply.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Quality & 7-Stage Scientific Purification
    |--------------------------------------------------------------------------
    */
    'purification_stages' => [
        [
            'num' => '01',
            'title' => 'Dual Media Multi-Barrier Filter',
            'desc' => 'High-velocity sand and graded gravel beds trap physical particulates, suspended turbidity, and silt down to 10 microns.',
        ],
        [
            'num' => '02',
            'title' => 'High-Adsorption Activated Carbon',
            'desc' => 'Coconut-shell activated carbon eliminates pesticide residues, organic volatile compounds, chlorine, and unwanted odors.',
        ],
        [
            'num' => '03',
            'title' => 'Precision Micron Cartridge',
            'desc' => 'Sub-micron poly filters extract microscopic colloids and prepare the water stream for high-pressure membrane separation.',
        ],
        [
            'num' => '04',
            'title' => 'High-Pressure Reverse Osmosis (RO)',
            'desc' => '0.0001-micron semi-permeable membranes filter out dissolved inorganic salts, heavy metals, arsenic, and nitrates.',
        ],
        [
            'num' => '05',
            'title' => 'Ultraviolet (UV) Sterilization',
            'desc' => 'High-output germicidal 254nm ultraviolet lamps dismantle bacterial and viral DNA, guaranteeing complete biological purity.',
        ],
        [
            'num' => '06',
            'title' => 'Medical Ozonation & Mineralization',
            'desc' => 'Controlled ozone (O3) maintains lasting freshness in sealed bottles while natural magnesium and calcium ions are restored.',
        ],
        [
            'num' => '07',
            'title' => 'Automated Cleanroom Bottling',
            'desc' => 'Contactless automated air-rinse, fill, and hermetic cap sealing in an ISO Class positive-pressure cleanroom.',
        ],
    ],
];
