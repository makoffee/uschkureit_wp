<?php
add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{

		$googlefonts 	= array("ABeeZee" => "ABeeZee",
					   			"Abel" => "Abel",
								"Abril Fatface" => "Abril Fatface",
								"Aclonica" => "Aclonica",
								"Acme" => "Acme",
								"Actor" => "Actor",
								"Adamina" => "Adamina",
								"Advent Pro" => "Advent Pro",
								"Aguafina Script" => "Aguafina Script",
								"Akronim" => "Akronim",
								"Aladin" => "Aladin",
								"Aldrich" => "Aldrich",
								"Alef" => "Alef",
								"Alegreya" => "Alegreya",
								"Alegreya SC" => "Alegreya SC",
								"Alex Brush" => "Alex Brush",
								"Alfa Slab One" => "Alfa Slab One",
								"Alice" => "Alice",
								"Alike" => "Alike",
								"Alike Angular" => "Alike Angular",
								"Allan" => "Allan",
								"Allerta" => "Allerta",
								"Allerta Stencil" => "Allerta Stencil",
								"Allura" => "Allura",
								"Almendra" => "Almendra",
								"Almendra Display" => "Almendra Display",
								"Almendra SC" => "Almendra SC",
								"Amarante" => "Amarante",
								"Amaranth" => "Amaranth",
								"Amatic SC" => "Amatic SC",
								"Amethysta" => "Amethysta",
								"Anaheim" => "Anaheim",
								"Andada" => "Andada",
								"Andika" => "Andika",
								"Angkor" => "Angkor",
								"Annie Use Your Telescope" => "Annie Use Your Telescope",
								"Anonymous Pro" => "Anonymous Pro",
								"Antic" => "Antic",
								"Antic Didone" => "Antic Didone",
								"Antic Slab" => "Antic Slab",
								"Anton" => "Anton",
								"Arapey" => "Arapey",
								"Arbutus" => "Arbutus",
								"Arbutus Slab" => "Arbutus Slab",
								"Architects Daughter" => "Architects Daughter",
								"Archivo Black" => "Archivo Black",
								"Archivo Narrow" => "Archivo Narrow",
								"Arimo" => "Arimo",
								"Arizonia" => "Arizonia",
								"Armata" => "Armata",
								"Artifika" => "Artifika",
								"Arvo" => "Arvo",
								"Asap" => "Asap",
								"Asset" => "Asset",
								"Astloch" => "Astloch",
								"Asul" => "Asul",
								"Atomic Age" => "Atomic Age",
								"Aubrey" => "Aubrey",
								"Audiowide" => "Audiowide",
								"Autour One" => "Autour One",
								"Average" => "Average",
								"Average Sans" => "Average Sans",
								"Averia Gruesa Libre" => "Averia Gruesa Libre",
								"Averia Libre" => "Averia Libre",
								"Averia Sans Libre" => "Averia Sans Libre",
								"Averia Serif Libre" => "Averia Serif Libre",
								"Bad Script" => "Bad Script",
								"Balthazar" => "Balthazar",
								"Bangers" => "Bangers",
								"Basic" => "Basic",
								"Battambang" => "Battambang",
								"Baumans" => "Baumans",
								"Bayon" => "Bayon",
								"Belgrano" => "Belgrano",
								"Belleza" => "Belleza",
								"BenchNine" => "BenchNine",
								"Bentham" => "Bentham",
								"Berkshire Swash" => "Berkshire Swash",
								"Bevan" => "Bevan",
								"Bigelow Rules" => "Bigelow Rules",
								"Bigshot One" => "Bigshot One",
								"Bilbo" => "Bilbo",
								"Bilbo Swash Caps" => "Bilbo Swash Caps",
								"Bitter" => "Bitter",
								"Black Ops One" => "Black Ops One",
								"Bokor" => "Bokor",
								"Bonbon" => "Bonbon",
								"Boogaloo" => "Boogaloo",
								"Bowlby One" => "Bowlby One",
								"Bowlby One SC" => "Bowlby One SC",
								"Brawler" => "Brawler",
								"Bree Serif" => "Bree Serif",
								"Bubblegum Sans" => "Bubblegum Sans",
								"Bubbler One" => "Bubbler One",
								"Buda" => "Buda",
								"Buenard" => "Buenard",
								"Butcherman" => "Butcherman",
								"Butterfly Kids" => "Butterfly Kids",
								"Cabin" => "Cabin",
								"Cabin Condensed" => "Cabin Condensed",
								"Cabin Sketch" => "Cabin Sketch",
								"Caesar Dressing" => "Caesar Dressing",
								"Cagliostro" => "Cagliostro",
								"Calligraffitti" => "Calligraffitti",
								"Cambo" => "Cambo",
								"Candal" => "Candal",
								"Cantarell" => "Cantarell",
								"Cantata One" => "Cantata One",
								"Cantora One" => "Cantora One",
								"Capriola" => "Capriola",
								"Cardo" => "Cardo",
								"Carme" => "Carme",
								"Carrois Gothic" => "Carrois Gothic",
								"Carrois Gothic SC" => "Carrois Gothic SC",
								"Carter One" => "Carter One",
								"Caudex" => "Caudex",
								"Cedarville Cursive" => "Cedarville Cursive",
								"Ceviche One" => "Ceviche One",
								"Changa One" => "Changa One",
								"Chango" => "Chango",
								"Chau Philomene One" => "Chau Philomene One",
								"Chela One" => "Chela One",
								"Chelsea Market" => "Chelsea Market",
								"Chenla" => "Chenla",
								"Cherry Cream Soda" => "Cherry Cream Soda",
								"Cherry Swash" => "Cherry Swash",
								"Chewy" => "Chewy",
								"Chicle" => "Chicle",
								"Chivo" => "Chivo",
								"Cinzel" => "Cinzel",
								"Cinzel Decorative" => "Cinzel Decorative",
								"Clicker Script" => "Clicker Script",
								"Coda" => "Coda",
								"Coda Caption" => "Coda Caption",
								"Codystar" => "Codystar",
								"Combo" => "Combo",
								"Comfortaa" => "Comfortaa",
								"Coming Soon" => "Coming Soon",
								"Concert One" => "Concert One",
								"Condiment" => "Condiment",
								"Content" => "Content",
								"Contrail One" => "Contrail One",
								"Convergence" => "Convergence",
								"Cookie" => "Cookie",
								"Copse" => "Copse",
								"Corben" => "Corben",
								"Courgette" => "Courgette",
								"Cousine" => "Cousine",
								"Coustard" => "Coustard",
								"Covered By Your Grace" => "Covered By Your Grace",
								"Crafty Girls" => "Crafty Girls",
								"Creepster" => "Creepster",
								"Crete Round" => "Crete Round",
								"Crimson Text" => "Crimson Text",
								"Croissant One" => "Croissant One",
								"Crushed" => "Crushed",
								"Cuprum" => "Cuprum",
								"Cutive" => "Cutive",
								"Cutive Mono" => "Cutive Mono",
								"Damion" => "Damion",
								"Dancing Script" => "Dancing Script",
								"Dangrek" => "Dangrek",
								"Dawning of a New Day" => "Dawning of a New Day",
								"Days One" => "Days One",
								"Delius" => "Delius",
								"Delius Swash Caps" => "Delius Swash Caps",
								"Delius Unicase" => "Delius Unicase",
								"Della Respira" => "Della Respira",
								"Denk One" => "Denk One",
								"Devonshire" => "Devonshire",
								"Didact Gothic" => "Didact Gothic",
								"Diplomata" => "Diplomata",
								"Diplomata SC" => "Diplomata SC",
								"Domine" => "Domine",
								"Donegal One" => "Donegal One",
								"Doppio One" => "Doppio One",
								"Dorsa" => "Dorsa",
								"Dosis" => "Dosis",
								"Dr Sugiyama" => "Dr Sugiyama",
								"Droid Sans" => "Droid Sans",
								"Droid Sans Mono" => "Droid Sans Mono",
								"Droid Serif" => "Droid Serif",
								"Duru Sans" => "Duru Sans",
								"Dynalight" => "Dynalight",
								"EB Garamond" => "EB Garamond",
								"Eagle Lake" => "Eagle Lake",
								"Eater" => "Eater",
								"Economica" => "Economica",
								"Electrolize" => "Electrolize",
								"Elsie" => "Elsie",
								"Elsie Swash Caps" => "Elsie Swash Caps",
								"Emblema One" => "Emblema One",
								"Emilys Candy" => "Emilys Candy",
								"Engagement" => "Engagement",
								"Englebert" => "Englebert",
								"Enriqueta" => "Enriqueta",
								"Erica One" => "Erica One",
								"Esteban" => "Esteban",
								"Euphoria Script" => "Euphoria Script",
								"Ewert" => "Ewert",
								"Exo" => "Exo",
								"Expletus Sans" => "Expletus Sans",
								"Fanwood Text" => "Fanwood Text",
								"Fascinate" => "Fascinate",
								"Fascinate Inline" => "Fascinate Inline",
								"Faster One" => "Faster One",
								"Fasthand" => "Fasthand",
								"Fauna One" => "Fauna One",
								"Federant" => "Federant",
								"Federo" => "Federo",
								"Felipa" => "Felipa",
								"Fenix" => "Fenix",
								"Finger Paint" => "Finger Paint",
								"Fjalla One" => "Fjalla One",
								"Fjord One" => "Fjord One",
								"Flamenco" => "Flamenco",
								"Flavors" => "Flavors",
								"Fondamento" => "Fondamento",
								"Fontdiner Swanky" => "Fontdiner Swanky",
								"Forum" => "Forum",
								"Francois One" => "Francois One",
								"Freckle Face" => "Freckle Face",
								"Fredericka the Great" => "Fredericka the Great",
								"Fredoka One" => "Fredoka One",
								"Freehand" => "Freehand",
								"Fresca" => "Fresca",
								"Frijole" => "Frijole",
								"Fruktur" => "Fruktur",
								"Fugaz One" => "Fugaz One",
								"GFS Didot" => "GFS Didot",
								"GFS Neohellenic" => "GFS Neohellenic",
								"Gabriela" => "Gabriela",
								"Gafata" => "Gafata",
								"Galdeano" => "Galdeano",
								"Galindo" => "Galindo",
								"Gentium Basic" => "Gentium Basic",
								"Gentium Book Basic" => "Gentium Book Basic",
								"Geo" => "Geo",
								"Geostar" => "Geostar",
								"Geostar Fill" => "Geostar Fill",
								"Germania One" => "Germania One",
								"Gilda Display" => "Gilda Display",
								"Give You Glory" => "Give You Glory",
								"Glass Antiqua" => "Glass Antiqua",
								"Glegoo" => "Glegoo",
								"Gloria Hallelujah" => "Gloria Hallelujah",
								"Goblin One" => "Goblin One",
								"Gochi Hand" => "Gochi Hand",
								"Gorditas" => "Gorditas",
								"Goudy Bookletter 1911" => "Goudy Bookletter 1911",
								"Graduate" => "Graduate",
								"Grand Hotel" => "Grand Hotel",
								"Gravitas One" => "Gravitas One",
								"Great Vibes" => "Great Vibes",
								"Griffy" => "Griffy",
								"Gruppo" => "Gruppo",
								"Gudea" => "Gudea",
								"Habibi" => "Habibi",
								"Hammersmith One" => "Hammersmith One",
								"Hanalei" => "Hanalei",
								"Hanalei Fill" => "Hanalei Fill",
								"Handlee" => "Handlee",
								"Hanuman" => "Hanuman",
								"Happy Monkey" => "Happy Monkey",
								"Headland One" => "Headland One",
								"Henny Penny" => "Henny Penny",
								"Herr Von Muellerhoff" => "Herr Von Muellerhoff",
								"Holtwood One SC" => "Holtwood One SC",
								"Homemade Apple" => "Homemade Apple",
								"Homenaje" => "Homenaje",
								"IM Fell DW Pica" => "IM Fell DW Pica",
								"IM Fell DW Pica SC" => "IM Fell DW Pica SC",
								"IM Fell Double Pica" => "IM Fell Double Pica",
								"IM Fell Double Pica SC" => "IM Fell Double Pica SC",
								"IM Fell English" => "IM Fell English",
								"IM Fell English SC" => "IM Fell English SC",
								"IM Fell French Canon" => "IM Fell French Canon",
								"IM Fell French Canon SC" => "IM Fell French Canon SC",
								"IM Fell Great Primer" => "IM Fell Great Primer",
								"IM Fell Great Primer SC" => "IM Fell Great Primer SC",
								"Iceberg" => "Iceberg",
								"Iceland" => "Iceland",
								"Imprima" => "Imprima",
								"Inconsolata" => "Inconsolata",
								"Inder" => "Inder",
								"Indie Flower" => "Indie Flower",
								"Inika" => "Inika",
								"Irish Grover" => "Irish Grover",
								"Istok Web" => "Istok Web",
								"Italiana" => "Italiana",
								"Italianno" => "Italianno",
								"Jacques Francois" => "Jacques Francois",
								"Jacques Francois Shadow" => "Jacques Francois Shadow",
								"Jim Nightshade" => "Jim Nightshade",
								"Jockey One" => "Jockey One",
								"Jolly Lodger" => "Jolly Lodger",
								"Josefin Sans" => "Josefin Sans",
								"Josefin Slab" => "Josefin Slab",
								"Joti One" => "Joti One",
								"Judson" => "Judson",
								"Julee" => "Julee",
								"Julius Sans One" => "Julius Sans One",
								"Junge" => "Junge",
								"Jura" => "Jura",
								"Just Another Hand" => "Just Another Hand",
								"Just Me Again Down Here" => "Just Me Again Down Here",
								"Kameron" => "Kameron",
								"Karla" => "Karla",
								"Kaushan Script" => "Kaushan Script",
								"Kavoon" => "Kavoon",
								"Keania One" => "Keania One",
								"Kelly Slab" => "Kelly Slab",
								"Kenia" => "Kenia",
								"Khmer" => "Khmer",
								"Kite One" => "Kite One",
								"Knewave" => "Knewave",
								"Kotta One" => "Kotta One",
								"Koulen" => "Koulen",
								"Kranky" => "Kranky",
								"Kreon" => "Kreon",
								"Kristi" => "Kristi",
								"Krona One" => "Krona One",
								"La Belle Aurore" => "La Belle Aurore",
								"Lancelot" => "Lancelot",
								"Lato" => "Lato",
								"League Script" => "League Script",
								"Leckerli One" => "Leckerli One",
								"Ledger" => "Ledger",
								"Lekton" => "Lekton",
								"Lemon" => "Lemon",
								"Libre Baskerville" => "Libre Baskerville",
								"Life Savers" => "Life Savers",
								"Lilita One" => "Lilita One",
								"Lily Script One" => "Lily Script One",
								"Limelight" => "Limelight",
								"Linden Hill" => "Linden Hill",
								"Lobster" => "Lobster",
								"Lobster Two" => "Lobster Two",
								"Londrina Outline" => "Londrina Outline",
								"Londrina Shadow" => "Londrina Shadow",
								"Londrina Sketch" => "Londrina Sketch",
								"Londrina Solid" => "Londrina Solid",
								"Lora" => "Lora",
								"Love Ya Like A Sister" => "Love Ya Like A Sister",
								"Loved by the King" => "Loved by the King",
								"Lovers Quarrel" => "Lovers Quarrel",
								"Luckiest Guy" => "Luckiest Guy",
								"Lusitana" => "Lusitana",
								"Lustria" => "Lustria",
								"Macondo" => "Macondo",
								"Macondo Swash Caps" => "Macondo Swash Caps",
								"Magra" => "Magra",
								"Maiden Orange" => "Maiden Orange",
								"Mako" => "Mako",
								"Marcellus" => "Marcellus",
								"Marcellus SC" => "Marcellus SC",
								"Marck Script" => "Marck Script",
								"Margarine" => "Margarine",
								"Marko One" => "Marko One",
								"Marmelad" => "Marmelad",
								"Marvel" => "Marvel",
								"Mate" => "Mate",
								"Mate SC" => "Mate SC",
								"Maven Pro" => "Maven Pro",
								"McLaren" => "McLaren",
								"Meddon" => "Meddon",
								"MedievalSharp" => "MedievalSharp",
								"Medula One" => "Medula One",
								"Megrim" => "Megrim",
								"Meie Script" => "Meie Script",
								"Merienda" => "Merienda",
								"Merienda One" => "Merienda One",
								"Merriweather" => "Merriweather",
								"Merriweather Sans" => "Merriweather Sans",
								"Metal" => "Metal",
								"Metal Mania" => "Metal Mania",
								"Metamorphous" => "Metamorphous",
								"Metrophobic" => "Metrophobic",
								"Michroma" => "Michroma",
								"Milonga" => "Milonga",
								"Miltonian" => "Miltonian",
								"Miltonian Tattoo" => "Miltonian Tattoo",
								"Miniver" => "Miniver",
								"Miss Fajardose" => "Miss Fajardose",
								"Modern Antiqua" => "Modern Antiqua",
								"Molengo" => "Molengo",
								"Molle" => "Molle",
								"Monda" => "Monda",
								"Monofett" => "Monofett",
								"Monoton" => "Monoton",
								"Monsieur La Doulaise" => "Monsieur La Doulaise",
								"Montaga" => "Montaga",
								"Montez" => "Montez",
								"Montserrat" => "Montserrat",
								"Montserrat Alternates" => "Montserrat Alternates",
								"Montserrat Subrayada" => "Montserrat Subrayada",
								"Moul" => "Moul",
								"Moulpali" => "Moulpali",
								"Mountains of Christmas" => "Mountains of Christmas",
								"Mouse Memoirs" => "Mouse Memoirs",
								"Mr Bedfort" => "Mr Bedfort",
								"Mr Dafoe" => "Mr Dafoe",
								"Mr De Haviland" => "Mr De Haviland",
								"Mrs Saint Delafield" => "Mrs Saint Delafield",
								"Mrs Sheppards" => "Mrs Sheppards",
								"Muli" => "Muli",
								"Mystery Quest" => "Mystery Quest",
								"Neucha" => "Neucha",
								"Neuton" => "Neuton",
								"New Rocker" => "New Rocker",
								"News Cycle" => "News Cycle",
								"Niconne" => "Niconne",
								"Nixie One" => "Nixie One",
								"Nobile" => "Nobile",
								"Nokora" => "Nokora",
								"Norican" => "Norican",
								"Nosifer" => "Nosifer",
								"Nothing You Could Do" => "Nothing You Could Do",
								"Noticia Text" => "Noticia Text",
								"Noto Sans" => "Noto Sans",
								"Noto Serif" => "Noto Serif",
								"Nova Cut" => "Nova Cut",
								"Nova Flat" => "Nova Flat",
								"Nova Mono" => "Nova Mono",
								"Nova Oval" => "Nova Oval",
								"Nova Round" => "Nova Round",
								"Nova Script" => "Nova Script",
								"Nova Slim" => "Nova Slim",
								"Nova Square" => "Nova Square",
								"Numans" => "Numans",
								"Nunito" => "Nunito",
								"Odor Mean Chey" => "Odor Mean Chey",
								"Offside" => "Offside",
								"Old Standard TT" => "Old Standard TT",
								"Oldenburg" => "Oldenburg",
								"Oleo Script" => "Oleo Script",
								"Oleo Script Swash Caps" => "Oleo Script Swash Caps",
								"Open Sans" => "Open Sans",
								"Open Sans Condensed" => "Open Sans Condensed",
								"Oranienbaum" => "Oranienbaum",
								"Orbitron" => "Orbitron",
								"Oregano" => "Oregano",
								"Orienta" => "Orienta",
								"Original Surfer" => "Original Surfer",
								"Oswald" => "Oswald",
								"Over the Rainbow" => "Over the Rainbow",
								"Overlock" => "Overlock",
								"Overlock SC" => "Overlock SC",
								"Ovo" => "Ovo",
								"Oxygen" => "Oxygen",
								"Oxygen Mono" => "Oxygen Mono",
								"PT Mono" => "PT Mono",
								"PT Sans" => "PT Sans",
								"PT Sans Caption" => "PT Sans Caption",
								"PT Sans Narrow" => "PT Sans Narrow",
								"PT Serif" => "PT Serif",
								"PT Serif Caption" => "PT Serif Caption",
								"Pacifico" => "Pacifico",
								"Paprika" => "Paprika",
								"Parisienne" => "Parisienne",
								"Passero One" => "Passero One",
								"Passion One" => "Passion One",
								"Pathway Gothic One" => "Pathway Gothic One",
								"Patrick Hand" => "Patrick Hand",
								"Patrick Hand SC" => "Patrick Hand SC",
								"Patua One" => "Patua One",
								"Paytone One" => "Paytone One",
								"Peralta" => "Peralta",
								"Permanent Marker" => "Permanent Marker",
								"Petit Formal Script" => "Petit Formal Script",
								"Petrona" => "Petrona",
								"Philosopher" => "Philosopher",
								"Piedra" => "Piedra",
								"Pinyon Script" => "Pinyon Script",
								"Pirata One" => "Pirata One",
								"Plaster" => "Plaster",
								"Play" => "Play",
								"Playball" => "Playball",
								"Playfair Display" => "Playfair Display",
								"Playfair Display SC" => "Playfair Display SC",
								"Podkova" => "Podkova",
								"Poiret One" => "Poiret One",
								"Poller One" => "Poller One",
								"Poly" => "Poly",
								"Pompiere" => "Pompiere",
								"Pontano Sans" => "Pontano Sans",
								"Port Lligat Sans" => "Port Lligat Sans",
								"Port Lligat Slab" => "Port Lligat Slab",
								"Prata" => "Prata",
								"Preahvihear" => "Preahvihear",
								"Press Start 2P" => "Press Start 2P",
								"Princess Sofia" => "Princess Sofia",
								"Prociono" => "Prociono",
								"Prosto One" => "Prosto One",
								"Puritan" => "Puritan",
								"Purple Purse" => "Purple Purse",
								"Quando" => "Quando",
								"Quantico" => "Quantico",
								"Quattrocento" => "Quattrocento",
								"Quattrocento Sans" => "Quattrocento Sans",
								"Questrial" => "Questrial",
								"Quicksand" => "Quicksand",
								"Quintessential" => "Quintessential",
								"Qwigley" => "Qwigley",
								"Racing Sans One" => "Racing Sans One",
								"Radley" => "Radley",
								"Raleway" => "Raleway",
								"Raleway Dots" => "Raleway Dots",
								"Rambla" => "Rambla",
								"Rammetto One" => "Rammetto One",
								"Ranchers" => "Ranchers",
								"Rancho" => "Rancho",
								"Rationale" => "Rationale",
								"Redressed" => "Redressed",
								"Reenie Beanie" => "Reenie Beanie",
								"Revalia" => "Revalia",
								"Ribeye" => "Ribeye",
								"Ribeye Marrow" => "Ribeye Marrow",
								"Righteous" => "Righteous",
								"Risque" => "Risque",
								"Roboto" => "Roboto",
								"Roboto Condensed" => "Roboto Condensed",
								"Roboto Slab" => "Roboto Slab",
								"Rochester" => "Rochester",
								"Rock Salt" => "Rock Salt",
								"Rokkitt" => "Rokkitt",
								"Romanesco" => "Romanesco",
								"Ropa Sans" => "Ropa Sans",
								"Rosario" => "Rosario",
								"Rosarivo" => "Rosarivo",
								"Rouge Script" => "Rouge Script",
								"Ruda" => "Ruda",
								"Rufina" => "Rufina",
								"Ruge Boogie" => "Ruge Boogie",
								"Ruluko" => "Ruluko",
								"Rum Raisin" => "Rum Raisin",
								"Ruslan Display" => "Ruslan Display",
								"Russo One" => "Russo One",
								"Ruthie" => "Ruthie",
								"Rye" => "Rye",
								"Sacramento" => "Sacramento",
								"Sail" => "Sail",
								"Salsa" => "Salsa",
								"Sanchez" => "Sanchez",
								"Sancreek" => "Sancreek",
								"Sansita One" => "Sansita One",
								"Sarina" => "Sarina",
								"Satisfy" => "Satisfy",
								"Scada" => "Scada",
								"Schoolbell" => "Schoolbell",
								"Seaweed Script" => "Seaweed Script",
								"Sevillana" => "Sevillana",
								"Seymour One" => "Seymour One",
								"Shadows Into Light" => "Shadows Into Light",
								"Shadows Into Light Two" => "Shadows Into Light Two",
								"Shanti" => "Shanti",
								"Share" => "Share",
								"Share Tech" => "Share Tech",
								"Share Tech Mono" => "Share Tech Mono",
								"Shojumaru" => "Shojumaru",
								"Short Stack" => "Short Stack",
								"Siemreap" => "Siemreap",
								"Sigmar One" => "Sigmar One",
								"Signika" => "Signika",
								"Signika Negative" => "Signika Negative",
								"Simonetta" => "Simonetta",
								"Sintony" => "Sintony",
								"Sirin Stencil" => "Sirin Stencil",
								"Six Caps" => "Six Caps",
								"Skranji" => "Skranji",
								"Slackey" => "Slackey",
								"Smokum" => "Smokum",
								"Smythe" => "Smythe",
								"Sniglet" => "Sniglet",
								"Snippet" => "Snippet",
								"Snowburst One" => "Snowburst One",
								"Sofadi One" => "Sofadi One",
								"Sofia" => "Sofia",
								"Sonsie One" => "Sonsie One",
								"Sorts Mill Goudy" => "Sorts Mill Goudy",
								"Source Code Pro" => "Source Code Pro",
								"Source Sans Pro" => "Source Sans Pro",
								"Special Elite" => "Special Elite",
								"Spicy Rice" => "Spicy Rice",
								"Spinnaker" => "Spinnaker",
								"Spirax" => "Spirax",
								"Squada One" => "Squada One",
								"Stalemate" => "Stalemate",
								"Stalinist One" => "Stalinist One",
								"Stardos Stencil" => "Stardos Stencil",
								"Stint Ultra Condensed" => "Stint Ultra Condensed",
								"Stint Ultra Expanded" => "Stint Ultra Expanded",
								"Stoke" => "Stoke",
								"Strait" => "Strait",
								"Sue Ellen Francisco" => "Sue Ellen Francisco",
								"Sunshiney" => "Sunshiney",
								"Supermercado One" => "Supermercado One",
								"Suwannaphum" => "Suwannaphum",
								"Swanky and Moo Moo" => "Swanky and Moo Moo",
								"Syncopate" => "Syncopate",
								"Tangerine" => "Tangerine",
								"Taprom" => "Taprom",
								"Tauri" => "Tauri",
								"Telex" => "Telex",
								"Tenor Sans" => "Tenor Sans",
								"Text Me One" => "Text Me One",
								"The Girl Next Door" => "The Girl Next Door",
								"Tienne" => "Tienne",
								"Tinos" => "Tinos",
								"Titan One" => "Titan One",
								"Titillium Web" => "Titillium Web",
								"Trade Winds" => "Trade Winds",
								"Trocchi" => "Trocchi",
								"Trochut" => "Trochut",
								"Trykker" => "Trykker",
								"Tulpen One" => "Tulpen One",
								"Ubuntu" => "Ubuntu",
								"Ubuntu Condensed" => "Ubuntu Condensed",
								"Ubuntu Mono" => "Ubuntu Mono",
								"Ultra" => "Ultra",
								"Uncial Antiqua" => "Uncial Antiqua",
								"Underdog" => "Underdog",
								"Unica One" => "Unica One",
								"UnifrakturCook" => "UnifrakturCook",
								"UnifrakturMaguntia" => "UnifrakturMaguntia",
								"Unkempt" => "Unkempt",
								"Unlock" => "Unlock",
								"Unna" => "Unna",
								"VT323" => "VT323",
								"Vampiro One" => "Vampiro One",
								"Varela" => "Varela",
								"Varela Round" => "Varela Round",
								"Vast Shadow" => "Vast Shadow",
								"Vibur" => "Vibur",
								"Vidaloka" => "Vidaloka",
								"Viga" => "Viga",
								"Voces" => "Voces",
								"Volkhov" => "Volkhov",
								"Vollkorn" => "Vollkorn",
								"Voltaire" => "Voltaire",
								"Waiting for the Sunrise" => "Waiting for the Sunrise",
								"Wallpoet" => "Wallpoet",
								"Walter Turncoat" => "Walter Turncoat",
								"Warnes" => "Warnes",
								"Wellfleet" => "Wellfleet",
								"Wendy One" => "Wendy One",
								"Wire One" => "Wire One",
								"Yanone Kaffeesatz" => "Yanone Kaffeesatz",
								"Yellowtail" => "Yellowtail",
								"Yeseva One" => "Yeseva One",
								"Yesteryear" => "Yesteryear",
								"Zeyada" => "Zeyada"
					);

		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/

		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post");

		$percent 	= array("0" 	=> "0", 
							".1" 	=> ".1",
							".2" 	=> ".2",
							".3" 	=> ".3",
							".4" 	=> ".4",
							".5" 	=> ".5",
							".6" 	=> ".6",
							".7" 	=> ".7",
							".8" 	=> ".8",
							".9" 	=> ".9",
							"1" 	=> "1"
					);


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

/*-------------------------------------------------------
 *				Google Fonts
 *-------------------------------------------------------*/


// Set the Options Array
global $of_options;
$of_options = array();


/*-------------------------------------------------------
 *				General Settings
 *-------------------------------------------------------*/

$of_options[] = array( 	"name" 		=> "General Settings",
						"type" 		=> "heading"
				);
$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Preset Color Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$skin_images_url = get_template_directory_uri().'/admin/assets/images/skin/';
$presets_images_url = get_template_directory_uri().'/admin/assets/images/presets/';

$of_options[] = array( 	"name" 		=> "Choose Preset Skin Style",
						"desc" 		=> "choose default site skin",
						"id" 		=> "skin",
						"std" 		=> "preset1",
						"type" 		=> "images",
						"options" 	=> array(
							'skin1' 	=> $skin_images_url . 'skin1.png',
							'skin2' 	=> $skin_images_url . 'skin2.png',
						)
				);

$of_options[] = array( 	"name" 		=> "Choose Preset Setting",
						"desc" 		=> "choose your preset color",
						"id" 		=> "preset",
						"std" 		=> "preset1",
						"type" 		=> "images",
						"options" 	=> array(
							'preset1' 	=> $presets_images_url . 'preset1.png',
							'preset2' 	=> $presets_images_url . 'preset2.png',
							'preset3' 	=> $presets_images_url . 'preset3.png',
							'preset4' 	=> $presets_images_url . 'preset4.png',
							'preset5' 	=> $presets_images_url . 'preset5.png',
							'preset6' 	=> $presets_images_url . 'preset6.png'
						)
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Favicon Option",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Favicon Upload",
						"desc" 		=> "upload favicon image",
						"id" 		=> "favicon",
						"std" 		=> "",
						"type" 		=> "upload"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Logo Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Upload Logo",
						"desc" 		=> "upload logo image",
						"id" 		=> "logo",
						"std" 		=> "",
						"type" 		=> "upload"
				);

$of_options[] = array( 	"name" 		=> "Logo Custom Height & Width ",
						"desc" 		=> "Use custom logo height and width click in the checkbox",
						"id" 		=> "custom_wh",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Logo Width",
						"desc" 		=> "write logo width in pixel",
						"id" 		=> "logo_width",
						"std" 		=> "50",
						"fold" 		=> "custom_wh",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Logo Height",
						"desc" 		=> "write logo height in pixel",
						"id" 		=> "logo_height",
						"std" 		=> "50",
						"fold" 		=> "custom_wh",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Text Type Logo Enable",
						"desc" 		=> "Use custom Logo height and width click in the checkbox",
						"id" 		=> "logo_text_en",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Logo Text",
						"desc" 		=> "Write Logo custom Height. It is in pixel",
						"id" 		=> "logo_text",
						"std" 		=> "Enter",
						"fold" 		=> "logo_text_en",
						"type" 		=> "text"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Custom CSS JavaScript Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Custom CSS",
						"desc" 		=> "write custom CSS here",
						"id" 		=> "custom_css",
						"std" 		=> "",
						"type" 		=> "textarea"
				);

$of_options[] = array( 	"name" 		=> "Custom JavaScript/Google Analytics",
						"desc" 		=> "write custom javascript or google analytics Code here",
						"id" 		=> "before_body",
						"std" 		=> "",
						"type" 		=> "textarea"
				);

/*-------------------------------------------------------
 *				Header Settings
 *-------------------------------------------------------*/

$of_options[] = array( 	"name" 		=> "Menu Settings",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Menu Style Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Menu Type",
						"desc" 		=> "select menu color type",
						"id" 		=> "menu_type",
						"std" 		=> "percent",
						"type" 		=> "select",
						"options" 	=> array(
								'color' 		=> 'Solid Color',
								'percent' 		=> 'Transparent Color'
							)
				);

$of_options[] = array( 	"name" 		=> "Menu Background Color",
						"desc" 		=> "pick a background color for Menu (default: #000000).",
						"id" 		=> "menu_color",
						"std" 		=> "#000000",
						"type" 		=> "color"
				);

$of_options[] = array( 	"name" 		=> "Menu Background Color Percent",
						"desc" 		=> "select menu background color opacity",
						"id" 		=> "color_percent",
						"std" 		=> ".6",
						"type" 		=> "select",
						"mod"		=> 'mini',
						"options"	=> $percent
				);

$of_options[] = array(  "name" 		=> "",
						"desc"		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Menu Typography Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Select Menu Font",
						"desc" 		=> "select your desire google font for menu",
						"id" 		=> "menu_font",
						"std" 		=> "Roboto",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "0123456789 <br>
										ABCDEFGHIJKLMNOPQRSTUVWXYZ <br>
										abcdefghijklmnopqrstuvwxyz", //this is the text from preview box
										"size" => "14px" //this is the text size from preview box
						),
						"options" 	=> $googlefonts

				); 
$of_options[] = array( 	"name" 		=> "Select Menu Font Style",
						"desc" 		=> "select your font style for menu",
						"id" 		=> "menu_font_style",
						"std" 		=> array('size' => '14px','style' => '400'),
						"type" 		=> "typography"
				);

$of_options[] = array( 	"name" 		=> "Menu Custom Font / Hover Color",
						"desc" 		=> "use custom Font / Hover Color, click on checkbox",
						"id" 		=> "menu_font_hover",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Menu Font Color",
						"desc" 		=> "pick a color for menu font color (default: #ffffff).",
						"id" 		=> "menu_font_color",
						"std" 		=> "#fff",
						"fold" 		=> "menu_font_hover",
						"type" 		=> "color"
				);

$of_options[] = array( 	"name" 		=> "Menu Font Hover Color",
						"desc" 		=> "pick a color for menu font hover color (default: #001100).",
						"id" 		=> "menu_hover_color",
						"std" 		=> "#001100",
						"fold" 		=> "menu_font_hover",
						"type" 		=> "color"
				);

/*-------------------------------------------------------
 *				Styling Settings
 *-------------------------------------------------------*/

$of_options[] = array( 	"name" 		=> "Portfolio Settings",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Portfolio Customize Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Post Per Load More",
						"desc" 		=> "show item number in per click",
						"id" 		=> "post_per_load",
						"std" 		=> "4",
						"min" 		=> "4",
						"step"		=> "4",
						"max" 		=> "8",
						"type" 		=> "sliderui" 
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Disable Options for Portfolio",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Disable Filter",
						"desc" 		=> "click to disable portfolio",
						"id" 		=> "disable_filter",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Disable Portfolio Single View",
						"desc" 		=> "click to disable Portfolio single item view",
						"id" 		=> "disable_single",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Disable Portfolio Image Pop-up",
						"desc" 		=> "click to disable Portfolio image pop-up",
						"id" 		=> "disable_popup",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Disable Ajax Load More",
						"desc" 		=> "click to disable ajax load buttons",
						"id" 		=> "disable_loadmore",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Disable Project Details of Single Item",
						"desc" 		=> "click to disable project details of single item",
						"id" 		=> "disable_pjt_dsc",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Blog Settings",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Extend Blog Page Functionality",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Enable Blog Custom Options",
						"desc" 		=> "click to enable blog options",
						"id" 		=> "blog_extend",
						"std" 		=> 1,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Sidebar Position",
						"desc" 		=> "select your desire sidebar position",
						"id" 		=> "sidebar_pos",
						"std" 		=> "right",
						"type" 		=> "select",
						"options" 	=> array(
								'right' 	=> 'Right Sidebar',
								'left' 		=> 'Left Sidebar',
								'none' 		=> 'No Sidebar',
							)

				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Blog & Single Post Custom Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Disable Blog Comment",
						"desc" 		=> "click to disable post, page comment",
						"id" 		=> "disable_comment",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Disable Author Details",
						"desc" 		=> "click to disable author details of single page",
						"id" 		=> "disable_author_dts",
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Typography",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Body Font Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Body Font ",
						"desc" 		=> "Add Google Body Font",
						"id" 		=> "g_select",
						"std" 		=> "Roboto",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "0123456789 <br>
										ABCDEFGHIJKLMNOPQRSTUVWXYZ <br>
										abcdefghijklmnopqrstuvwxyz", //this is the text from preview box
										"size" => "14px" //this is the text size from preview box
						),
						"options" 	=> $googlefonts

				); 
$of_options[] = array( 	"name" 		=> "Body Font Style",
						"desc" 		=> "Add Font Style",
						"id" 		=> "body_font_style",
						"std" 		=> array('size' => '14px','style' => '400','color' => '#333333'),
						"type" 		=> "typography"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Heading Font Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Heading Font",
						"desc" 		=> "Add Google heading Font",
						"id" 		=> "head_font",
						"std" 		=> "Roboto",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "0123456789 <br>
										ABCDEFGHIJKLMNOPQRSTUVWXYZ <br>
										abcdefghijklmnopqrstuvwxyz", //this is the text from preview box
										"size" => "14px" //this is the text size from preview box
						),
						"options" 	=> $googlefonts

				); 

$of_options[] = array( 	"name" 		=> "Heading Font Style",
						"desc" 		=> "Specify the heading font properties",
						"id" 		=> "heading_font_style",
						"std" 		=> array('color' => '#000000'),
						"type" 		=> "typography"
				);

$of_options[] = array( 	"name" 		=> "Contact Settings",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Contact Map Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Contact Map Lattitude",
						"desc" 		=> "write your map lattitude",
						"id" 		=> "map_lat",
						"std" 		=> "43.04446",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Contact Map Longitude",
						"desc" 		=> "write your map longitude",
						"id" 		=> "map_log",
						"std" 		=> "-76.130791",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Contact Map Zoom Label",
						"desc" 		=> "choose google map zoom level",
						"id" 		=> "map_zoom",
						"std" 		=> "10",
						"min" 		=> "1",
						"step"		=> "1",
						"max" 		=> "20",
						"type" 		=> "sliderui" 
				);

$of_options[] = array( 	"name" 		=> "Contact Map Adress",
						"desc" 		=> "write your map address",
						"id" 		=> "map_address",
						"std" 		=> "",
						"type" 		=> "textarea"
				);

$of_options[] = array( 	"name" 		=> "Contact Map Marker",
						"desc" 		=> "upload custom map marker image",
						"id" 		=> "map_logo",
						"std" 		=> "",
						"type" 		=> "upload"
				);

$of_options[] = array( 	"name" 		=> "Social Settings",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Social Media Apps Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Facebook URL",
						"desc" 		=> "Facebook url",
						"id" 		=> "facebook_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Twitter URL",
						"desc" 		=> "twitter url",
						"id" 		=> "twitter_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Pinterest URL",
						"desc" 		=> "pinterest url",
						"id" 		=> "pinterest_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Google Plus URL",
						"desc" 		=> "Google Plus url",
						"id" 		=> "gplus_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "LinkedIn URL",
						"desc" 		=> "linkedin url",
						"id" 		=> "linkin_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Flickr URL",
						"desc" 		=> "Flickr url",
						"id" 		=> "flickr_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Youtube URL",
						"desc" 		=> "youtube url",
						"id" 		=> "youtube_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Dribble URL",
						"desc" 		=> "dribble url",
						"id" 		=> "dribble_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "RSS",
						"desc" 		=> "rss",
						"id" 		=> "rss_url",
						"std" 		=> "#",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Footer Settings",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Footer Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);
	
$of_options[] = array( 	"name" 		=> "Footer Background Color",
						"desc" 		=> "Pick a background color for the footer (default: #34495E).",
						"id" 		=> "footer_bg",
						"std" 		=> "#181818",
						"type" 		=> "color"
				);

$of_options[] = array( 	"name" 		=> "Footer Text Left",
						"desc" 		=> "write copyright information here",
						"id" 		=> "footer_text_1",
						"std" 		=> "Copyright  ©2014<a target=\"_blank\" href=\"http://www.themeum.com/\"> Enter </a>Theme.",
						"type" 		=> "textarea"
				);

$of_options[] = array( 	"name" 		=> "Footer Text Right",
						"desc" 		=> "write others information here",
						"id" 		=> "footer_text_2",
						"std" 		=> "Designed by <a target=\"_blank\" href=\"http://www.themeum.com/\">Themeum</a>",
						"type" 		=> "textarea"
				);

$of_options[] = array( 	"name" 		=> "Fade Slider",
						"type" 		=> "heading"
				);

$of_options[] = array(  "name" 		=> "",
						"desc" 		=> "",
						"id" 		=> "general_heading",
						"std" 		=> "Fade Slider Options",
						"icon" 		=> false,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Slide Settings",
						"desc" 		=> "use this shortcode for this slider [fade_slider]",
						"id" 		=> "fade_slider",
						"std" 		=> "",
						"type" 		=> "slider"
				);

$of_options[] = array( 	"name" 		=> "Slide Interval",
						"desc" 		=> "slide Interval in second",
						"id" 		=> "slide_interval",
						"std" 		=> "4",
						"min" 		=> "2",
						"step"		=> "1",
						"max" 		=> "20",
						"type" 		=> "sliderui"
				);

				
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>