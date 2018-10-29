<?php

declare(strict_types=1);

// Data array containing all news items information and content
$newsItems = [
  [
    'title' => 'Cheeseburgers',
    'content' => 'The palatable sensation we lovingly refer to as The Cheeseburger has a distinguished and illustrious history. It was born from humble roots, only to rise to well-seasoned greatness.',
    'author' => 1,
    'publishedDate' => '02-03-2018',
    'likeCount' => 5
  ],
  [
    'title' => 'Glamburgers',
    'content' => 'From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something for everyone. Some burgers are humble, and some are ostentatious, and you just have to try them all to figure out what you want.',
    'author' => 1,
    'publishedDate' => '01-06-2018',
    'likeCount' => 2
  ],
  [
    'title' => 'Dingbat',
    'content' => 'Dingbat jazz hostess trolley saul bass scandinavian eichler dieter rams highway, suburban floating staircase hostess trolley bourbon big band. Hepcat bowling alley drive-in big band starburst carport, upswept drive-in ring-a-ding aviation.',
    'author' => 2,
    'publishedDate' => '01-08-2016',
    'likeCount' => 44
  ],
  [
    'title' => 'Bourbon',
    'content' => 'Bourbon pocket square starburst bachelor pad? Dingbat swingin\' kodachrome naugahyde sport coat frutiger sassy jetsons dieter rams, vinyl danish modern saul bass roadside big band hostess trolley selectric zephyr. Interior drive-in mid-century bowling alley ranch home jetsons! Bourbon naugahyde diner upswept jet-age palm springs interior!',
    'author' => 2,
    'publishedDate' => '06-01-2018',
    'likeCount' => 24
  ],
  [
    'title' => 'Kodachrome',
    'content' => 'Interior acetate dingbat vinyl naugahyde jazz, starburst keen ranch home cocktail jazz tailfin kodachrome whiskey? Bowling alley atompunk saul bass googie drive-in, frutiger whiskey helvetica sport coat!',
    'author' => 3,
    'publishedDate' => '01-02-2018',
    'likeCount' => 41
  ],
  [
    'title' => 'Geometric thoughts',
    'content' => 'Broad pan am palm springs drive-in bachelor pad executive bourbon pocket square interior, geometric hot rod sport coat hip? Geometric executive selectric copasetic bowling alley keen hepcat tailfin broad, modern frutiger pocket square naugahyde?',
    'author' => 3,
    'publishedDate' => '01-09-2018',
    'likeCount' => 51
  ],
  [
    'title' => 'Ray guns?',
    'content' => 'Bakelite cocktail floating staircase television big band hepcat sleek hip teak. Big band interior art department sport coat atomic, ray gun floating staircase kodachrome art department.',
    'author' => 4,
    'publishedDate' => '10-12-2016',
    'likeCount' => 0
  ],
  [
    'title' => 'Starbursts..',
    'content' => 'Pocket square populuxe jazz helvetica selectric, jetsons aviation starburst kodachrome? Art department abstract palm springs kodachrome ratpack hip doo-wop? Geometric copasetic formica modern.',
    'author' => 4,
    'publishedDate' => '10-10-2017',
    'likeCount' => 11
  ],
  [
    'title' => 'Not again',
    'content' => 'Sleek television populuxe vinyl keen jetsons. Floating staircase whiskey art department bachelor pad herman miller geometric hostess trolley bakelite.',
    'author' => 5,
    'publishedDate' => '01-02-2018',
    'likeCount' => 220
  ],
  [
    'title' => 'Aviation is a myth',
    'content' => 'Jetsons aviation cocktail hip danish modern brylcreem big band, hepcat executive frutiger futuristic. Sport coat creative drive-in swingin\' teak populuxe executive space-age kodachrome!',
    'author' => 5,
    'publishedDate' => '12-09-2018',
    'likeCount' => 19
  ],

];

// Data array containing authors full names and user IDs
$authors = [
  [
    'name' => 'Ford Ipsum',
    'userId' => 1,
    'articles' =>  ['Cheesburgers','Glamburgers'],
    'img' => "default.jpeg"
  ],
  [
    'name' => 'Glenn Burger',
    'userId' => 2,
    'articles' => ['Dingbat','Bourbon'],
    'img' => "default.jpeg"
  ],
  [
    'name' => 'Matthew Lincoln',
    'userId' => 3,
    'articles' => ['Kodachrome', 'Geometric thoughts'],
    'img' => "default.jpeg"
  ],
  [
    'name' => 'Michael Scott',
    'userId' => 4,
    'articles' => ['Ray guns?', 'Starbursts...'],
    'img' => "default.jpeg"
  ],
  [
    'name' => 'Andrew Nort',
    'userId' => 5,
    'articles' => ['Not again','Aviation is a myth'],
    'img' => "default.jpeg"
  ]
];
