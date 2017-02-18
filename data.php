<?php
$presets = [
  "no_research" => ["itemPool" => "b2mnotwt0i6nvydvpvcwpc7"],
  "random_research" => [
    "itemPool" => "a1e20isavx9ykbz3uwow3",
    "rows" => 4
  ]
];

$things = [
  // resources
  "compound" => [
    "id" => 0,
    "actions" => ["collect_a_stack"],
    "category" => "resources",
  ],
  "resin" => [
    "id" => 1,
    "actions" => ["collect_a_stack"],
    "category" => "resources",
  ],
  "laterite" => [
    "id" => 2,
    "actions" => ["collect_a_stack", "smelt"],
    "url" => "/9/90/Laterite_stack.jpg",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "malachite" => [
    "id" => 3,
    "actions" => ["collect_a_stack", "smelt"],
    "url" => "/7/7e/Malachite_stack.jpg",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "aluminum" => [
    "id" => 4,
    "actions" => ["collect_a_stack"],
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "copper" => [
    "id" => 5,
    "actions" => ["collect_a_stack"],
    "url" => "/2/2b/Copper_stack.jpg",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "titanium" => [
    "id" => 6,
    "actions" => ["collect_a_stack"],
    "url" => "/6/6c/Titanium_stack.jpg",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "lithium" => [
    "id" => 7,
    "actions" => ["collect_a_stack"],
    "url" => "/4/4b/Lithium_stack.jpg",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "coal" => [
    "id" => 8,
    "actions" => ["collect_a_stack"],
    "url" => "/a/a7/Coal.png",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "organic" => [
    "id" => 9,
    "actions" => ["collect_a_stack"],
    "url" => "/d/d8/Small_generator_organic.jpg",
    "category" => "resources",
  ],
  "hydrazine" => [
    "id" => 10,
    "actions" => ["collect_a_stack"],
    "url" => "/b/bc/Hydrazine.png",
    "category" => "resources",
    "in_default_item_pool" => true,
  ],
  "hematite" => [
    "id" => 11,
    "actions" => ["collect_a_stack"],
    "category" => "resources",
  ],
  "astronium" => [
    "id" => 12,
    "actions" => ["collect_a_stack"],
    "category" => "resources",
  ],
  "oxygen" => [
    "id" => 13,
    "actions" => ["collect_a_stack"],
    "url" => "/0/0b/Oxygen_stacks.jpg",
    "category" => "resources",
  ],
  "power" => [
    "id" => 14,
    "actions" => ["collect_a_stack"],
    "category" => "resources",
  ],

  // planets
  "terran" => [
    "id" => 15,
    "actions" => ["go_to_planet"],
    "category" => "planets",
  ],
  "barren" => [
    "id" => 16,
    "actions" => ["go_to_planet"],
    "category" => "planets",
  ],
  "exotic" => [
    "id" => 17,
    "actions" => ["go_to_planet"],
    "category" => "planets",
  ],
  "radiated" => [
    "id" => 18,
    "actions" => ["go_to_planet"],
    "category" => "planets",
  ],
  "arid" => [
    "id" => 19,
    "actions" => ["go_to_planet"],
    "category" => "planets",
  ],
  "tundra" => [
    "id" => 20,
    "actions" => ["go_to_planet"],
    "category" => "planets",
  ],

  // modules
  "platform" => [
    "id" => 21,
    "actions" => ["print"],
    "category" => "buildings",
  ],
  "module_platform" => [
    "id" => 22,
    "actions" => ["print"],
    "url" => "/c/c1/Module-platform-example.jpg",
    "category" => "buildings",
  ],
  "printer" => [
    "id" => 23,
    "actions" => ["print"],
    "category" => "buildings",
    "in_default_item_pool" => true,
  ],
  "smelter" => [
    "id" => 24,
    "actions" => ["print"],
    "category" => "buildings",
    "in_default_item_pool" => true,
  ],
  "vehicle_bay" => [
    "id" => 25,
    "actions" => ["print"],
    "category" => "buildings",
    "in_default_item_pool" => true,
  ],
  "research" => [
    "id" => 26,
    "actions" => ["print"],
    "category" => "buildings",
    "in_default_item_pool" => true,
  ],
  "fuel_condenser" => [
    "id" => 27,
    "actions" => ["print", "get_blueprint"],
    "category" => "buildings",
    "in_default_item_pool" => true,
  ],
  "trade_platform" => [
    "id" => 28,
    "actions" => ["print", "get_blueprint"],
    "category" => "buildings",
    "in_default_item_pool" => true,
  ],

  // backpack items
  "small_solar_panel" => [
    "id" => 29,
    "actions" => ["print"],
    "category" => "backpack_items",
  ],
  "small_battery" => [
    "id" => 30,
    "actions" => ["print"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],
  "small_generator" => [
    "id" => 31,
    "actions" => ["print"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],
  "beacon" => [
    "id" => 32,
    "actions" => ["print"],
    "category" => "backpack_items",
  ],
  "tank" => [
    "id" => 33,
    "actions" => ["print"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],
  "wind_vane" => [
    "id" => 34,
    "actions" => ["print"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],
  "tether" => [
    "id" => 35,
    "actions" => ["print"],
    "category" => "backpack_items",
  ],
  "filters" => [
    "id" => 36,
    "actions" => ["print", "get_blueprint"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],
  "power_cells" => [
    "id" => 37,
    "actions" => ["print", "get_blueprint"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],
  "dynamite" => [
    "id" => 98,
    "actions" => ["print", "get_blueprint"],
    "category" => "backpack_items",
    "in_default_item_pool" => true,
  ],

  // printer item
  "solar_panel" => [
    "id" => 38,
    "actions" => ["print"],
    "category" => "printer_items",
  ],
  "battery" => [
    "id" => 39,
    "actions" => ["print"],
    "category" => "printer_items",
    "in_default_item_pool" => true,
  ],
  "wind_turbine" => [
    "id" => 40,
    "actions" => ["print"],
    "category" => "printer_items",
    "in_default_item_pool" => true,
  ],
  "storage" => [
    "id" => 41,
    "actions" => ["print"],
    "category" => "printer_items",
  ],
  "1_seat" => [
    "id" => 42,
    "actions" => ["print"],
    "category" => "printer_items",
  ],
  "generator" => [
    "id" => 43,
    "actions" => ["print", "get_blueprint"],
    "category" => "printer_items",
    "in_default_item_pool" => true,
  ],
  "habitat" => [
    "id" => 44,
    "actions" => ["print", "get_blueprint"],
    "url" => "/4/49/Habitat.jpg",
    "category" => "printer_items",
    "in_default_item_pool" => true,
  ],
  "winch" => [
    "id" => 45,
    "actions" => ["print", "get_blueprint"],
    "category" => "printer_items",
    "in_default_item_pool" => true,
  ],
  "drill_head" => [
    "id" => 46,
    "actions" => ["print", "get_blueprint"],
    "category" => "printer_items",
    "in_default_item_pool" => true,
  ],

  // vehicle items
  "vehicle_1_seat" => [
    "id" => 47,
    "actions" => ["print"],
    "category" => "vehicle_items",
  ],
  "vehicle_storage" => [
    "id" => 48,
    "actions" => ["print", "get_blueprint"],
    "category" => "vehicle_items",
    "in_default_item_pool" => true,
  ],
  "3_seat" => [
    "id" => 49,
    "actions" => ["print", "get_blueprint"],
    "category" => "vehicle_items",
    "in_default_item_pool" => true,
  ],
  "crane" => [
    "id" => 50,
    "actions" => ["print", "get_blueprint"],
    "category" => "vehicle_items",
    "in_default_item_pool" => true,
  ],

  // vehicles
  "rover" => [
    "id" => 51,
    "actions" => ["print"],
    "category" => "vehicles",
  ],
  "shuttle" => [
    "id" => 52,
    "actions" => ["print"],
    "category" => "vehicles",
  ],
  "spaceship" => [
    "id" => 53,
    "actions" => ["print", "get_blueprint"],
    "category" => "vehicles",
    "in_default_item_pool" => true,
  ],
  "truck" => [
    "id" => 54,
    "actions" => ["print", "get_blueprint"],
    "category" => "vehicles",
    "in_default_item_pool" => true,
  ],

  // spire fountains
  "oxygen_spire" => [
    "id" => 55,
    "actions" => ["collect_from_fountain"],
    "category" => "resource_fountains",
  ],
  "power_spire" => [
    "id" => 56,
    "actions" => ["collect_from_fountain"],
    "url" => "/d/d4/Resource-Spire-power.jpg",
    "category" => "resource_fountains",
  ],
  "compound_spire" => [
    "id" => 57,
    "actions" => ["collect_from_fountain"],
    "url" => "/c/cb/Compound_Spire.jpg",
    "category" => "resource_fountains",
    "in_default_item_pool" => true,
  ],
  "resin_spire" => [
    "id" => 58,
    "actions" => ["collect_from_fountain"],
    "url" => "/7/7d/Resin_Spire.jpg",
    "category" => "resource_fountains",
    "in_default_item_pool" => true,
  ],

  // research items
  "research_item_sphere_red_hair" => [
    "id" => 59,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],
  "research_item_sphere_green_hair" => [
    "id" => 60,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],
  "research_item_barbecue_white_rounded_top" => [
    "id" => 61,
    "actions" => ["do_research"],
    "url" => "/c/c7/Space-research.PNG",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_barbecue_white_flat_top" => [
    "id" => 62,
    "actions" => ["do_research"],
    "url" => "/2/28/Research_flat_barbecue.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_barbecue_cylinder_blue" => [
    "id" => 63,
    "actions" => ["do_research"],
    "url" => "/c/c5/Research_Canister.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_barbecue_cube_lego" => [
    "id" => 64,
    "actions" => ["do_research"],
    "url" => "/b/bb/Research_white_lego.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_cube_yellow" => [
    "id" => 65,
    "actions" => ["do_research"],
    "url" => "/4/4f/Research_yellow_cubiod.jpg",
    "category" => "research_items",
  ],
  "research_item_cube_orange" => [
    "id" => 66,
    "actions" => ["do_research"],
    "url" => "/2/2f/Research_orange_cubiod.jpg",
    "category" => "research_items",
  ],
  "research_item_cube_white" => [
    "id" => 67,
    "actions" => ["do_research"],
    "url" => "/a/aa/Research_gray_cube.jpg",
    "category" => "research_items",
  ],
  "research_item_cube_green_orange_cristals" => [
    "id" => 68,
    "actions" => ["do_research"],
    "url" => "0/03/Research_green_orange_crystal.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_cube_cyan_red_green_cristals" => [
    "id" => 69,
    "actions" => ["do_research"],
    "url" => "/3/39/Research_cyan_red_crystal.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_blob_pink" => [
    "id" => 70,
    "actions" => ["do_research"],
    "url" => "/e/e9/Research_pink_blob.jpg",
    "category" => "research_items",
  ],
  "research_item_blob_cyan" => [
    "id" => 71,
    "actions" => ["do_research"],
    "url" => "/8/80/Research_blue-green_blob.jpg",
    "category" => "research_items",
  ],
  "research_item_sphere_green_blue_cristals" => [
    "id" => 72,
    "actions" => ["do_research"],
    "url" => "/e/e0/Research_round_blue_crystal.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_sphere_purple_red_cristals" => [
    "id" => 73,
    "actions" => ["do_research"],
    "url" => "f/f4/Research_dark_purple_round_red_crystal.jpg",
    "category" => "research_items",
  ],
  "research_item_sphere_green_bumped" => [
    "id" => 74,
    "actions" => ["do_research"],
    "url" => "/4/4d/Research_green_bumped_sphere.jpg",
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_sphere_grey_bumped_blue_strip" => [
    "id" => 75,
    "actions" => ["do_research"],
    "url" => "/1/1e/Research_grey_bumped_sphere.jpg",
    "category" => "research_items",
  ],
  "research_item_cuboid_red_green_part" => [
    "id" => 76,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],
  "research_item_cuboid_blue_orange_part" => [
    "id" => 77,
    "actions" => ["do_research"],
    "url" => "/b/be/Research_blue_red_bits.jpg",
    "category" => "research_items",
  ],
  "research_item_cuboid_blue_orange_part" => [
    "id" => 77,
    "actions" => ["do_research"],
    "url" => "/b/be/Research_blue_red_bits.jpg",
    "category" => "research_items",
  ],
  "research_item_cuboid_yellow_orange_part" => [
    "id" => 104,
    "actions" => ["do_research"],
    "category" => "research_items",
    "in_default_item_pool" => true,
  ],
  "research_item_triangle_orange" => [
    "id" => 103,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],
  "research_item_onion_purple" => [
    "id" => 105,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],
  "research_item_yellow_mushroom_red_bits" => [
    "id" => 113,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],
  "research_item_green_ball_neon_stripe" => [
    "id" => 114,
    "actions" => ["do_research"],
    "category" => "research_items",
  ],

  // hazards
  "exploder" => [
    "id" => 78,
    "actions" => ["kill", "get_killed"],
    "url" => "/1/1a/Hazard-Exploders.jpg",
    "category" => "hazards",
  ],
  "gaz_pumkin" => [
    "id" => 79,
    "actions" => ["kill", "get_killed"],
    "url" => "/e/e4/Hazard-Spewers.jpg",
    "category" => "hazards",
  ],
  "spiker" => [
    "id" => 80,
    "actions" => ["kill", "get_killed"],
    "category" => "hazards",
    "in_default_item_pool" => true,
  ],
  "spiker_seed" => [
    "id" => 102,
    "actions" => ["kill", "get_killed"],
    "category" => "hazards",
    "in_default_item_pool" => true,
  ],
  "lure_plant" => [
    "id" => 81,
    "actions" => ["kill", "get_killed"],
    "category" => "hazards",
    "in_default_item_pool" => true,
  ],
  "worm" => [
    "id" => 82,
    "actions" => ["get_killed"],
    "category" => "hazards",
  ],
  "tumbleweeds" => [
    "id" => 83,
    "actions" => ["get_killed"],
    "url" => "/a/ae/Hazard-Tumbleweeds.jpg",
    "category" => "hazards",
  ],
  "storm" => [
    "id" => 84,
    "actions" => ["get_killed"],
    "url" => "/3/3f/Astroneer-storm-alpha.jpg",
    "category" => "hazards",
  ],
  "suffocation" => [
    "id" => 107,
    "actions" => ["get_killed"],
    "category" => "hazards",
  ],
  "fall" => [
    "id" => 108,
    "actions" => ["get_killed"],
    "category" => "hazards",
  ],
  "dynamite_explosion" => [
    "id" => 109,
    "actions" => ["get_killed"],
    "category" => "hazards",
  ],

  // discoveries
  "crashed_ship_1" => [
    "id" => 85,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "crashed_ship_2" => [
    "id" => 106,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "crashed_ship_3" => [
    "id" => 110,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "crashed_ship_4" => [
    "id" => 111,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "crashed_ship_5" => [
    "id" => 112,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "crashed_pod" => [
    "id" => 86,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "solar_array" => [
    "id" => 87,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "resource_drop" => [
    "id" => 88,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "sputnik" => [
    "id" => 89,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "mariner_10" => [
    "id" => 90,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "voyager" => [
    "id" => 91,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "hubble" => [
    "id" => 92,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "new_horizons" => [
    "id" => 93,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "kepler" => [
    "id" => 94,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "dead_body" => [
    "id" => 95,
    "actions" => ["find"],
    "category" => "discoveries",
    "in_default_item_pool" => true,
  ],
  "rib_cage" => [
    "id" => 96,
    "actions" => ["find"],
    "category" => "discoveries",
  ],
  "thruster" => [
    "id" => 97,
    "actions" => ["find"],
    "category" => "discoveries",
  ],

  // allmighty gods
  "zebra_ball" => [
    "id" => 99,
    "actions" => ["find"],
    "url" => "/3/3c/Zebra_Ball.jpg",
    "category" => "allmighty_gods",
  ],
  "chess_ball" => [
    "id" => 100,
    "actions" => ["find"],
    "url" => "/b/bf/Disco_Ball.jpg",
    "category" => "allmighty_gods",
  ],
  "dalmatian_ball" => [
    "id" => 101,
    "actions" => ["find"],
    "url" => "/5/5d/Polka_Ball.jpg",
    "category" => "allmighty_gods",
  ],
];

// next id: 115


$wikiCDNUrl = "https://hydra-media.cursecdn.com/astroneer.gamepedia.com";
