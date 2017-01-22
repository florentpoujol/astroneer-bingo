<?php
$things = [
  // resources
  "compound" => [
    "id" => "a",
    "actions" => ["collect_a_stack"],
    "url" => "/8/83/CompoundResource.png",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "resin" => [
    "id" => "b",
    "actions" => ["collect_a_stack"],
    "url" => "/c/c3/ResinResource.png",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "laterite" => [
    "id" => "c",
    "actions" => ["collect_a_stack", "smelt"],
    "url" => "/9/90/Laterite_stack.jpg",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "malachite" => [
    "id" => "d",
    "actions" => ["collect_a_stack", "smelt"],
    "url" => "/7/7e/Malachite_stack.jpg",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "aluminum" => [
    "id" => "e",
    "actions" => ["collect_a_stack"],
    "url" => "/2/20/AluminumStack.png",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "copper" => [
    "id" => "f",
    "actions" => ["collect_a_stack"],
    "url" => "/2/2b/Copper_stack.jpg",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "titanium" => [
    "id" => "g",
    "actions" => ["collect_a_stack"],
    "url" => "/6/6c/Titanium_stack.jpg",
    "category" => "resources",
    "selected_by_default" => false,
  ],
  "lithium" => [
    "id" => "h",
    "actions" => ["collect_a_stack"],
    "url" => "/4/4b/Lithium_stack.jpg",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "coal" => [
    "id" => "i",
    "actions" => ["collect_a_stack"],
    "url" => "/a/a7/Coal.png",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "organic" => [
    "id" => "j",
    "actions" => ["collect_a_stack"],
    "url" => "/d/d8/Small_generator_organic.jpg",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "hydrazine" => [
    "id" => "k",
    "actions" => ["collect_a_stack"],
    "url" => "/b/bc/Hydrazine.png",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "hematite" => [
    "id" => "l",
    "actions" => ["collect_a_stack"],
    "url" => "/a/a5/HematiteResource.png",
    "category" => "resources",
    "selected_by_default" => false,
  ],
  "astronium" => [
    "id" => "m",
    "actions" => ["collect_a_stack"],
    "url" => "/5/5a/AstroniumResource.png",
    "category" => "resources",
    "selected_by_default" => false,
  ],
  "oxygen" => [
    "id" => "n",
    "actions" => ["collect_a_stack"],
    "url" => "/0/0b/Oxygen_stacks.jpg",
    "category" => "resources",
    "selected_by_default" => true,
  ],
  "power" => [
    "id" => "o",
    "actions" => ["collect_a_stack"],
    "url" => "/b/b3/PowerResource.png",
    "category" => "resources",
    "selected_by_default" => true,
  ],

  // planets
  "terran" => [
    "actions" => ["go_to_planet"],
    "url" => "/b/b0/Terran.png",
    "category" => "planets",
    "selected_by_default" => false,
  ],
  "barren" => [
    "actions" => ["go_to_planet"],
    "url" => "/7/78/Barren.png",
    "category" => "planets",
    "selected_by_default" => false,
  ],
  "exotic" => [
    "actions" => ["go_to_planet"],
    "url" => "/d/de/Exoitc.png",
    "category" => "planets",
    "selected_by_default" => false,
  ],
  "radiated" => [
    "actions" => ["go_to_planet"],
    "url" => "/9/99/Radiated.png",
    "category" => "planets",
    "selected_by_default" => false,
  ],
  "arid" => [
    "actions" => ["go_to_planet"],
    "url" => "/6/6a/Arid.png",
    "category" => "planets",
    "selected_by_default" => false,
  ],
  "tundra" => [
    "actions" => ["go_to_planet"],
    "url" => "/1/17/Tundra.png",
    "category" => "planets",
    "selected_by_default" => false,
  ],

  // modules
  "platform" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "module_platform" => [
    "actions" => ["print"],
    "url" => "/c/c1/Module-platform-example.jpg",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "printer" => [
    "actions" => ["print"],
    "url" => "/9/98/Printer.png",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "smelter" => [
    "actions" => ["print"],
    "url" => "/4/45/Smelter.png",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "vehicle_bay" => [
    "actions" => ["print"],
    "url" => "/c/c3/VehicleBay2.png",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "research" => [
    "actions" => ["print"],
    "url" => "/b/b9/Research_Station.jpg",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "fuel_condenser" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/3/39/FuelCondenser.png",
    "category" => "buildings",
    "selected_by_default" => true,
  ],
  "trade_platform" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/f/f0/TradePlatform.png",
    "category" => "buildings",
    "selected_by_default" => true,
  ],

  // backpack items
  "small_solar_panel" => [
    "actions" => ["print"],
    "url" => "/2/25/Solar.png",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "small_battery" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "small_generator" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "beacon" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "tank" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "wind_vane" => [
    "actions" => ["print"],
    "url" => "/f/fc/Wind_Vane.png",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "tether" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "filters" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],
  "power_cells" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "",
    "category" => "backpack_items",
    "selected_by_default" => true,
  ],

  // printer item
  "solar_panel" => [
    "actions" => ["print"],
    "url" => "/d/df/SolarPanel.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "battery" => [
    "actions" => ["print"],
    "url" => "/6/6d/Battery.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "wind_turbine" => [
    "actions" => ["print"],
    "url" => "/3/3e/Wind_Turbine.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "storage" => [
    "actions" => ["print"],
    "url" => "/4/48/Storage.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "1_seat" => [
    "actions" => ["print"],
    "url" => "/6/69/1-seat.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "generator" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/c/c2/Generator.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "habitat" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/4/49/Habitat.jpg",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "winch" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/3/31/Winch.png",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],
  "drill_head" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "",
    "category" => "printer_items",
    "selected_by_default" => true,
  ],

  // vehicle items
  "vehicle_1_seat" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "vehicle_items",
    "selected_by_default" => true,
  ],
  "vehicle_storage" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "",
    "category" => "vehicle_items",
    "selected_by_default" => true,
  ],
  "3_seat" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "",
    "category" => "vehicle_items",
    "selected_by_default" => true,
  ],
  "crane" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "",
    "category" => "vehicle_items",
    "selected_by_default" => true,
  ],

  // vehicles
  "rover" => [
    "actions" => ["print"],
    "url" => "/9/96/Rover.jpg",
    "category" => "vehicles",
    "selected_by_default" => true,
  ],
  "shuttle" => [
    "actions" => ["print"],
    "url" => "",
    "category" => "vehicles",
    "selected_by_default" => true,
  ],
  "spaceship" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/2/21/Spaceship.png",
    "category" => "vehicles",
    "selected_by_default" => true,
  ],
  "truck" => [
    "actions" => ["print", "research_blueprint"],
    "url" => "/3/37/AstroneerTruck.jpg",
    "category" => "vehicles",
    "selected_by_default" => true,
  ],

  // spire fountains
  "oxygen_spire" => [
    "actions" => ["collect_from_fountain"],
    "url" => "/3/3d/Oxygen_Spire.jpg",
    "category" => "resource_fountains",
    "selected_by_default" => true,
  ],
  "power_spire" => [
    "actions" => ["collect_from_fountain"],
    "url" => "/d/d4/Resource-Spire-power.jpg",
    "category" => "resource_fountains",
    "selected_by_default" => true,
  ],
  "compound_spire" => [
    "actions" => ["collect_from_fountain"],
    "url" => "/c/cb/Compound_Spire.jpg",
    "category" => "resource_fountains",
    "selected_by_default" => true,
  ],
  "resin_spire" => [
    "actions" => ["collect_from_fountain"],
    "url" => "/7/7d/Resin_Spire.jpg",
    "category" => "resource_fountains",
    "selected_by_default" => true,
  ],

  // research items
  "research_chest_sphere_red_hair" => [
    "actions" => ["research_chest"],
    "url" => "/e/e7/Research_red_ball_hair.jpg",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_sphere_red_green" => [
    "actions" => ["research_chest"],
    "url" => "/7/7f/Research_green_ball_hair.jpg",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_barbecue_white_rounded_top" => [
    "actions" => ["research_chest"],
    "url" => "/c/c7/Space-research.PNG",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_barbecue_white_flat_top" => [
    "actions" => ["research_chest"],
    "url" => "/2/28/Research_flat_barbecue.jpg",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_barbecue_cylinder_blue" => [
    "actions" => ["research_chest"],
    "url" => "/c/c5/Research_Canister.jpg",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_barbecue_cube_lego" => [
    "actions" => ["research_chest"],
    "url" => "/b/bb/Research_white_lego.jpg",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_cube_yellow" => [
    "actions" => ["research_chest"],
    "url" => "/4/4f/Research_yellow_cubiod.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_cube_orange" => [
    "actions" => ["research_chest"],
    "url" => "/2/2f/Research_orange_cubiod.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_cube_white" => [
    "actions" => ["research_chest"],
    "url" => "/a/aa/Research_gray_cube.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_cube_green_orange_cristals" => [
    "actions" => ["research_chest"],
    "url" => "0/03/Research_green_orange_crystal.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_cube_cyan_red_green_cristals" => [
    "actions" => ["research_chest"],
    "url" => "/3/39/Research_cyan_red_crystal.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_blob_pink" => [
    "actions" => ["research_chest"],
    "url" => "/e/e9/Research_pink_blob.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_blob_cyan" => [
    "actions" => ["research_chest"],
    "url" => "/8/80/Research_blue-green_blob.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_sphere_green_blue_cristals" => [
    "actions" => ["research_chest"],
    "url" => "/e/e0/Research_round_blue_crystal.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_sphere_purple_red_cristals" => [
    "actions" => ["research_chest"],
    "url" => "f/f4/Research_dark_purple_round_red_crystal.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_sphere_green_bumped" => [
    "actions" => ["research_chest"],
    "url" => "/4/4d/Research_green_bumped_sphere.jpg",
    "category" => "research_chests",
    "selected_by_default" => true,
  ],
  "research_chest_sphere_grey_bumped_blue_strip" => [
    "actions" => ["research_chest"],
    "url" => "/1/1e/Research_grey_bumped_sphere.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_cuboid_red_green_part" => [
    "actions" => ["research_chest"],
    "url" => "/4/4c/Research_Pod.png",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],
  "research_chest_cuboid_blue_orange_part" => [
    "actions" => ["research_chest"],
    "url" => "/b/be/Research_blue_red_bits.jpg",
    "category" => "research_chests",
    "selected_by_default" => false,
  ],

  // hazards
  "exploder" => [
    "actions" => ["kill", "get_killed"],
    "url" => "/1/1a/Hazard-Exploders.jpg",
    "category" => "hazards",
    "selected_by_default" => true,
  ],
  "gaz_pumkin" => [
    "actions" => ["kill", "get_killed"],
    "url" => "/e/e4/Hazard-Spewers.jpg",
    "category" => "hazards",
    "selected_by_default" => true,
  ],
  "spiker" => [
    "actions" => ["kill", "get_killed"],
    "url" => "",
    "category" => "hazards",
    "selected_by_default" => false,
  ],
  "lure_plant" => [
    "actions" => ["kill", "get_killed"],
    "url" => "/a/a5/Lure.jpg",
    "category" => "hazards",
    "selected_by_default" => false,
  ],
  "worm" => [
    "actions" => ["get_killed"],
    "url" => "/6/60/Hazard-Worm.jpg",
    "category" => "hazards",
    "selected_by_default" => false,
  ],
  "tumbleweeds" => [
    "actions" => ["get_killed"],
    "url" => "/a/ae/Hazard-Tumbleweeds.jpg",
    "category" => "hazards",
    "selected_by_default" => false,
  ],
  "storm" => [
    "actions" => ["get_killed"],
    "url" => "/3/3f/Astroneer-storm-alpha.jpg",
    "category" => "hazards",
    "selected_by_default" => true,
  ],

  // discoveries
  "crashed_ship" => [
    "actions" => ["find"],
    "url" => "/c/ca/LargeWhiteCylinder.png",
    "category" => "discoveries",
    "selected_by_default" => true,
  ],
  "crashed_pod" => [
    "actions" => ["find"],
    "url" => "/3/34/CrashedPod.PNG",
    "category" => "discoveries",
    "selected_by_default" => true,
  ],
  "solar_array" => [
    "actions" => ["find"],
    "url" => "/b/be/CrashedSolar.png",
    "category" => "discoveries",
    "selected_by_default" => true,
  ],
  "resource_drop" => [
    "actions" => ["find"],
    "url" => "/f/fe/ResourceDropOpen.png",
    "category" => "discoveries",
    "selected_by_default" => true,
  ],
  "spoutnik" => [
    "actions" => ["find"],
    "url" => "/7/7a/Sputnik.png",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "mariner_10" => [
    "actions" => ["find"],
    "url" => "/4/44/Mariner_10_%282%29.jpg",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "voyager" => [
    "actions" => ["find"],
    "url" => "/d/d2/Voyager.jpg",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "hubble" => [
    "actions" => ["find"],
    "url" => "/5/5c/Satelite.jpg",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "new_horizons" => [
    "actions" => ["find"],
    "url" => "/6/6c/New_Horizons.png",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "kepler" => [
    "actions" => ["find"],
    "url" => "/2/24/Kepler.jpg",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "dead_body" => [
    "actions" => ["find"],
    "url" => "/5/51/DeadExplorer.png",
    "category" => "discoveries",
    "selected_by_default" => true,
  ],
  "rib_cage" => [
    "actions" => ["find"],
    "url" => "",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "thruster" => [
    "actions" => ["find"],
    "url" => "/6/62/Thruster.png",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "zebra_ball" => [
    "actions" => ["find"],
    "url" => "/3/3c/Zebra_Ball.jpg",
    "category" => "discoveries",
    "selected_by_default" => false,
  ],
  "dynamite" => [
    "actions" => ["find"],
    "url" => "/f/fc/Dynamite.png",
    "category" => "discoveries",
    "selected_by_default" => true,
  ],
];

$actions = [
  "collect_a_stack",
  "collect_from_fountain",
  "smelt",
  "go_to_planet",
  "print",
  "research_chest",
  "research_blueprint",
  "get_killed",
  "kill",
  "find",
];

$wikiCDNUrl = "https://hydra-media.cursecdn.com/astroneer.gamepedia.com";


/*$data = [
  [ "strId" => "compound" ],
  [ "strId" => "resin" ],
];*/

