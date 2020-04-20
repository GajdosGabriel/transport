<?php
/**
 * Created by PhpStorm.
 * User: nebster
 * Date: 21.5.2018
 * Time: 13:08
 */

namespace App\Classes;

use Exception;

class Country {
    private $arrCountries = [
        'AFG' => 'Afghanistan',
        'ALA' => 'Åland Islands',
        'ALB' => 'Albania',
        'DZA' => 'Algeria',
        'ASM' => 'American Samoa',
        'AND' => 'Andorra',
        'AGO' => 'Angola',
        'AIA' => 'Anguilla',
        'ATA' => 'Antarctica',
        'ATG' => 'Antigua and Barbuda',
        'ARG' => 'Argentina',
        'ARM' => 'Armenia',
        'ABW' => 'Aruba',
        'AUS' => 'Australia',
        'AUT' => 'Austria',
        'AZE' => 'Azerbaijan',
        'BHS' => 'Bahamas',
        'BHR' => 'Bahrain',
        'BGD' => 'Bangladesh',
        'BRB' => 'Barbados',
        'BLR' => 'Belarus',
        'BEL' => 'Belgium',
        'BLZ' => 'Belize',
        'BEN' => 'Benin',
        'BMU' => 'Bermuda',
        'BTN' => 'Bhutan',
        'BOL' => 'Bolivia, Plurinational State of',
        'BES' => 'Bonaire, Sint Eustatius and Saba',
        'BIH' => 'Bosnia and Herzegovina',
        'BWA' => 'Botswana',
        'BVT' => 'Bouvet Island',
        'BRA' => 'Brazil',
        'IOT' => 'British Indian Ocean Territory',
        'BRN' => 'Brunei Darussalam',
        'BGR' => 'Bulgaria',
        'BFA' => 'Burkina Faso',
        'BDI' => 'Burundi',
        'KHM' => 'Cambodia',
        'CMR' => 'Cameroon',
        'CAN' => 'Canada',
        'CPV' => 'Cape Verde',
        'CYM' => 'Cayman Islands',
        'CAF' => 'Central African Republic',
        'TCD' => 'Chad',
        'CHL' => 'Chile',
        'CHN' => 'China',
        'CXR' => 'Christmas Island',
        'CCK' => 'Cocos (Keeling) Islands',
        'COL' => 'Colombia',
        'COM' => 'Comoros',
        'COG' => 'Congo',
        'COD' => 'Congo, the Democratic Republic of the',
        'COK' => 'Cook Islands',
        'CRI' => 'Costa Rica',
        'CIV' => 'Côte d\'Ivoire',
        'HRV' => 'Croatia',
        'CUB' => 'Cuba',
        'CUW' => 'Curaçao',
        'CYP' => 'Cyprus',
        'CZE' => 'Czech Republic',
        'DNK' => 'Denmark',
        'DJI' => 'Djibouti',
        'DMA' => 'Dominica',
        'DOM' => 'Dominican Republic',
        'ECU' => 'Ecuador',
        'EGY' => 'Egypt',
        'SLV' => 'El Salvador',
        'GNQ' => 'Equatorial Guinea',
        'ERI' => 'Eritrea',
        'EST' => 'Estonia',
        'ETH' => 'Ethiopia',
        'FLK' => 'Falkland Islands (Malvinas)',
        'FRO' => 'Faroe Islands',
        'FJI' => 'Fiji',
        'FIN' => 'Finland',
        'FRA' => 'France',
        'GUF' => 'French Guiana',
        'PYF' => 'French Polynesia',
        'ATF' => 'French Southern Territories',
        'GAB' => 'Gabon',
        'GMB' => 'Gambia',
        'GEO' => 'Georgia',
        'DEU' => 'Germany',
        'GHA' => 'Ghana',
        'GIB' => 'Gibraltar',
        'GRC' => 'Greece',
        'GRL' => 'Greenland',
        'GRD' => 'Grenada',
        'GLP' => 'Guadeloupe',
        'GUM' => 'Guam',
        'GTM' => 'Guatemala',
        'GGY' => 'Guernsey',
        'GIN' => 'Guinea',
        'GNB' => 'Guinea-Bissau',
        'GUY' => 'Guyana',
        'HTI' => 'Haiti',
        'HMD' => 'Heard Island and McDonald Islands',
        'VAT' => 'Holy See (Vatican City State)',
        'HND' => 'Honduras',
        'HKG' => 'Hong Kong',
        'HUN' => 'Hungary',
        'ISL' => 'Iceland',
        'IND' => 'India',
        'IDN' => 'Indonesia',
        'IRN' => 'Iran, Islamic Republic of',
        'IRQ' => 'Iraq',
        'IRL' => 'Ireland',
        'IMN' => 'Isle of Man',
        'ISR' => 'Israel',
        'ITA' => 'Italy',
        'JAM' => 'Jamaica',
        'JPN' => 'Japan',
        'JEY' => 'Jersey',
        'JOR' => 'Jordan',
        'KAZ' => 'Kazakhstan',
        'KEN' => 'Kenya',
        'KIR' => 'Kiribati',
        'PRK' => 'Korea, Democratic People\'s Republic of',
        'KOR' => 'Korea, Republic of',
        'KWT' => 'Kuwait',
        'KGZ' => 'Kyrgyzstan',
        'LAO' => 'Lao People\'s Democratic Republic',
        'LVA' => 'Latvia',
        'LBN' => 'Lebanon',
        'LSO' => 'Lesotho',
        'LBR' => 'Liberia',
        'LBY' => 'Libya',
        'LIE' => 'Liechtenstein',
        'LTU' => 'Lithuania',
        'LUX' => 'Luxembourg',
        'MAC' => 'Macao',
        'MKD' => 'Macedonia, the former Yugoslav Republic of',
        'MDG' => 'Madagascar',
        'MWI' => 'Malawi',
        'MYS' => 'Malaysia',
        'MDV' => 'Maldives',
        'MLI' => 'Mali',
        'MLT' => 'Malta',
        'MHL' => 'Marshall Islands',
        'MTQ' => 'Martinique',
        'MRT' => 'Mauritania',
        'MUS' => 'Mauritius',
        'MYT' => 'Mayotte',
        'MEX' => 'Mexico',
        'FSM' => 'Micronesia, Federated States of',
        'MDA' => 'Moldova, Republic of',
        'MCO' => 'Monaco',
        'MNG' => 'Mongolia',
        'MNE' => 'Montenegro',
        'MSR' => 'Montserrat',
        'MAR' => 'Morocco',
        'MOZ' => 'Mozambique',
        'MMR' => 'Myanmar',
        'NAM' => 'Namibia',
        'NRU' => 'Nauru',
        'NPL' => 'Nepal',
        'NLD' => 'Netherlands',
        'NCL' => 'New Caledonia',
        'NZL' => 'New Zealand',
        'NIC' => 'Nicaragua',
        'NER' => 'Niger',
        'NGA' => 'Nigeria',
        'NIU' => 'Niue',
        'NFK' => 'Norfolk Island',
        'MNP' => 'Northern Mariana Islands',
        'NOR' => 'Norway',
        'OMN' => 'Oman',
        'PAK' => 'Pakistan',
        'PLW' => 'Palau',
        'PSE' => 'Palestinian Territory, Occupied',
        'PAN' => 'Panama',
        'PNG' => 'Papua New Guinea',
        'PRY' => 'Paraguay',
        'PER' => 'Peru',
        'PHL' => 'Philippines',
        'PCN' => 'Pitcairn',
        'POL' => 'Poland',
        'PRT' => 'Portugal',
        'PRI' => 'Puerto Rico',
        'QAT' => 'Qatar',
        'REU' => 'Réunion',
        'ROU' => 'Romania',
        'RUS' => 'Russian Federation',
        'RWA' => 'Rwanda',
        'BLM' => 'Saint Barthélemy',
        'SHN' => 'Saint Helena, Ascension and Tristan da Cunha',
        'KNA' => 'Saint Kitts and Nevis',
        'LCA' => 'Saint Lucia',
        'MAF' => 'Saint Martin (French part)',
        'SPM' => 'Saint Pierre and Miquelon',
        'VCT' => 'Saint Vincent and the Grenadines',
        'WSM' => 'Samoa',
        'SMR' => 'San Marino',
        'STP' => 'Sao Tome and Principe',
        'SAU' => 'Saudi Arabia',
        'SEN' => 'Senegal',
        'SRB' => 'Serbia',
        'SYC' => 'Seychelles',
        'SLE' => 'Sierra Leone',
        'SGP' => 'Singapore',
        'SXM' => 'Sint Maarten (Dutch part)',
        'SVK' => 'Slovakia',
        'SVN' => 'Slovenia',
        'SLB' => 'Solomon Islands',
        'SOM' => 'Somalia',
        'ZAF' => 'South Africa',
        'SGS' => 'South Georgia and the South Sandwich Islands',
        'SSD' => 'South Sudan',
        'ESP' => 'Spain',
        'LKA' => 'Sri Lanka',
        'SDN' => 'Sudan',
        'SUR' => 'Suriname',
        'SJM' => 'Svalbard and Jan Mayen',
        'SWZ' => 'Swaziland',
        'SWE' => 'Sweden',
        'CHE' => 'Switzerland',
        'SYR' => 'Syrian Arab Republic',
        'TWN' => 'Taiwan, Province of China',
        'TJK' => 'Tajikistan',
        'TZA' => 'Tanzania, United Republic of',
        'THA' => 'Thailand',
        'TLS' => 'Timor-Leste',
        'TGO' => 'Togo',
        'TKL' => 'Tokelau',
        'TON' => 'Tonga',
        'TTO' => 'Trinidad and Tobago',
        'TUN' => 'Tunisia',
        'TUR' => 'Turkey',
        'TKM' => 'Turkmenistan',
        'TCA' => 'Turks and Caicos Islands',
        'TUV' => 'Tuvalu',
        'UGA' => 'Uganda',
        'UKR' => 'Ukraine',
        'ARE' => 'United Arab Emirates',
        'GBR' => 'United Kingdom',
        'USA' => 'United States',
        'UMI' => 'United States Minor Outlying Islands',
        'URY' => 'Uruguay',
        'UZB' => 'Uzbekistan',
        'VUT' => 'Vanuatu',
        'VEN' => 'Venezuela, Bolivarian Republic of',
        'VNM' => 'Viet Nam',
        'VGB' => 'Virgin Islands, British',
        'VIR' => 'Virgin Islands, U.S.',
        'WLF' => 'Wallis and Futuna',
        'ESH' => 'Western Sahara',
        'YEM' => 'Yemen',
        'ZMB' => 'Zambia',
        'ZWE' => 'Zimbabwe',
    ];

    private $arrPhoneCodes = [
        '213' => 'Algeria(+213)',
        '376' => 'Andorra(+376)',
        '244' => 'Angola(+244)',
        '1264' => 'Anguilla(+1264)',
        '1268' => 'Antigua&amp;Barbuda(+1268)',
        '54' => 'Argentina(+54)',
        '374' => 'Armenia(+374)',
        '297' => 'Aruba(+297)',
        '61' => 'Australia(+61)',
        '43' => 'Austria(+43)',
        '994' => 'Azerbaijan(+994)',
        '1242' => 'Bahamas(+1242)',
        '973' => 'Bahrain(+973)',
        '880' => 'Bangladesh(+880)',
        '1246' => 'Barbados(+1246)',
        '375' => 'Belarus(+375)',
        '32' => 'Belgium(+32)',
        '501' => 'Belize(+501)',
        '229' => 'Benin(+229)',
        '1441' => 'Bermuda(+1441)',
        '975' => 'Bhutan(+975)',
        '591' => 'Bolivia(+591)',
        '387' => 'Bosnia Herzegovina(+387)',
        '267' => 'Botswana(+267)',
        '55' => 'Brazil(+55)',
        '673' => 'Brunei(+673)',
        '359' => 'Bulgaria(+359)',
        '226' => 'Burkina Faso(+226)',
        '257' => 'Burundi(+257)',
        '855' => 'Cambodia(+855)',
        '237' => 'Cameroon(+237)',
        '1' => 'Canada/USA(+1)',
        '238' => 'Cape Verde Islands(+238)',
        '1345' => 'Cayman Islands(+1345)',
        '236' => 'Central African Republic(+236)',
        '56' => 'Chile(+56)',
        '86' => 'China(+86)',
        '57' => 'Colombia(+57)',
        '269' => 'Comoros/Mayotte(+269)',
        '242' => 'Congo(+242)',
        '682' => 'Cook Islands(+682)',
        '506' => 'Costa Rica(+506)',
        '385' => 'Croatia(+385)',
        '53' => 'Cuba(+53)',
        '357' => 'Cyprus South(+357)',
        '420' => 'Czech Republic(+420)',
        '45' => 'Denmark(+45)',
        '253' => 'Djibouti(+253)',
        '1809' => 'Dominican Republic(+1809)',
        '593' => 'Ecuador(+593)',
        '20' => 'Egypt(+20)',
        '503' => 'El Salvador(+503)',
        '240' => 'Equatorial Guinea(+240)',
        '291' => 'Eritrea(+291)',
        '372' => 'Estonia(+372)',
        '251' => 'Ethiopia(+251)',
        '500' => 'Falkland Islands(+500)',
        '298' => 'Faroe Islands(+298)',
        '679' => 'Fiji(+679)',
        '358' => 'Finland(+358)',
        '33' => 'France(+33)',
        '594' => 'French Guiana(+594)',
        '689' => 'French Polynesia(+689)',
        '241' => 'Gabon(+241)',
        '220' => 'Gambia(+220)',
        '7880' => 'Georgia(+7880)',
        '49' => 'Germany(+49)',
        '233' => 'Ghana(+233)',
        '350' => 'Gibraltar(+350)',
        '30' => 'Greece(+30)',
        '299' => 'Greenland(+299)',
        '1473' => 'Grenada(+1473)',
        '590' => 'Guadeloupe(+590)',
        '671' => 'Guam(+671)',
        '502' => 'Guatemala(+502)',
        '224' => 'Guinea(+224)',
        '245' => 'Guinea-Bissau(+245)',
        '592' => 'Guyana(+592)',
        '509' => 'Haiti(+509)',
        '504' => 'Honduras(+504)',
        '852' => 'Hong Kong(+852)',
        '36' => 'Hungary(+36)',
        '354' => 'Iceland(+354)',
        '91' => 'India(+91)',
        '62' => 'Indonesia(+62)',
        '98' => 'Iran(+98)',
        '964' => 'Iraq(+964)',
        '353' => 'Ireland(+353)',
        '972' => 'Israel(+972)',
        '39' => 'Italy(+39)',
        '1876' => 'Jamaica(+1876)',
        '81' => 'Japan(+81)',
        '962' => 'Jordan(+962)',
        '254' => 'Kenya(+254)',
        '686' => 'Kiribati(+686)',
        '850' => 'Korea North(+850)',
        '82' => 'Korea South(+82)',
        '965' => 'Kuwait(+965)',
        '996' => 'Kyrgyzstan(+996)',
        '856' => 'Laos(+856)',
        '371' => 'Latvia(+371)',
        '961' => 'Lebanon(+961)',
        '266' => 'Lesotho(+266)',
        '231' => 'Liberia(+231)',
        '218' => 'Libya(+218)',
        '417' => 'Liechtenstein(+417)',
        '370' => 'Lithuania(+370)',
        '352' => 'Luxembourg(+352)',
        '853' => 'Macao(+853)',
        '389' => 'Macedonia(+389)',
        '261' => 'Madagascar(+261)',
        '265' => 'Malawi(+265)',
        '60' => 'Malaysia(+60)',
        '960' => 'Maldives(+960)',
        '223' => 'Mali(+223)',
        '356' => 'Malta(+356)',
        '692' => 'Marshall Islands(+692)',
        '596' => 'Martinique(+596)',
        '222' => 'Mauritania(+222)',
        '52' => 'Mexico(+52)',
        '691' => 'Micronesia(+691)',
        '373' => 'Moldova(+373)',
        '377' => 'Monaco(+377)',
        '976' => 'Mongolia(+976)',
        '1664' => 'Montserrat(+1664)',
        '212' => 'Morocco(+212)',
        '258' => 'Mozambique(+258)',
        '95' => 'Myanmar(+95)',
        '264' => 'Namibia(+264)',
        '674' => 'Nauru(+674)',
        '977' => 'Nepal(+977)',
        '31' => 'Netherlands(+31)',
        '687' => 'New Caledonia(+687)',
        '64' => 'New Zealand(+64)',
        '505' => 'Nicaragua(+505)',
        '227' => 'Niger(+227)',
        '234' => 'Nigeria(+234)',
        '683' => 'Niue(+683)',
        '670' => 'Northern Marianas(+670)',
        '47' => 'Norway(+47)',
        '968' => 'Oman(+968)',
        '680' => 'Palau(+680)',
        '507' => 'Panama(+507)',
        '675' => 'Papua New Guinea(+675)',
        '595' => 'Paraguay(+595)',
        '51' => 'Peru(+51)',
        '63' => 'Philippines(+63)',
        '48' => 'Poland(+48)',
        '351' => 'Portugal(+351)',
        '1787' => 'Puerto Rico(+1787)',
        '974' => 'Qatar(+974)',
        '262' => 'Reunion(+262)',
        '40' => 'Romania(+40)',
        '7' => 'Russia/Kazakhstan(+7)',
        '250' => 'Rwanda(+250)',
        '378' => 'San Marino(+378)',
        '239' => 'Sao Tome&amp;Principe(+239)',
        '966' => 'Saudi Arabia(+966)',
        '221' => 'Senegal(+221)',
        '381' => 'Serbia(+381)',
        '248' => 'Seychelles(+248)',
        '232' => 'Sierra Leone(+232)',
        '65' => 'Singapore(+65)',
        '421' => 'Slovak Republic(+421)',
        '386' => 'Slovenia(+386)',
        '677' => 'Solomon Islands(+677)',
        '252' => 'Somalia(+252)',
        '27' => 'South Africa(+27)',
        '34' => 'Spain(+34)',
        '94' => 'Sri Lanka(+94)',
        '290' => 'St. Helena(+290)',
        '1869' => 'St. Kitts(+1869)',
        '1758' => 'St. Lucia(+1758)',
        '249' => 'Sudan(+249)',
        '597' => 'Suriname(+597)',
        '268' => 'Swaziland(+268)',
        '46' => 'Sweden(+46)',
        '41' => 'Switzerland(+41)',
        '963' => 'Syria(+963)',
        '886' => 'Taiwan(+886)',
        '66' => 'Thailand(+66)',
        '228' => 'Togo(+228)',
        '676' => 'Tonga(+676)',
        '1868' => 'Trinidad&amp;Tobago(+1868)',
        '216' => 'Tunisia(+216)',
        '90' => 'Turkey(+90)',
        '993' => 'Turkmenistan(+993)',
        '1649' => 'Turks&amp;Caicos Islands(+1649)',
        '688' => 'Tuvalu(+688)',
        '256' => 'Uganda(+256)',
        '44' => 'UK(+44)',
        '380' => 'Ukraine(+380)',
        '971' => 'United Arab Emirates(+971)',
        '598' => 'Uruguay(+598)',
        '678' => 'Vanuatu(+678)',
        '379' => 'Vatican City(+379)',
        '58' => 'Venezuela(+58)',
        '84' => 'Vietnam(+84)',
        '1284' => 'Virgin Islands-British(+1284)',
        '1340' => 'Virgin Islands-US(+1340)',
        '681' => 'Wallis&amp;Futuna(+681)',
        '969' => 'Yemen(North)(+969)',
        '967' => 'Yemen(South)(+967)',
        '260' => 'Zambia(+260)',
        '263' => 'Zimbabwe(+263)'
    ];

    private $arrCodes = [
        [
        "code" => 213,
        "country" => "Algeria(+213)"
        ],
        [
            "code" => 376,
        "country" => "Andorra(+376)"
        ],
        [
            "code" => 244,
        "country" => "Angola(+244)"
        ],
        [
            "code" => 1264,
        "country" => "Anguilla(+1264)"
        ],
        [
            "code" => 1268,
        "country" => "Antigua&amp;Barbuda(+1268)"
        ],
        [
            "code" => 54,
        "country" => "Argentina(+54)"
        ],
        [
            "code" => 374,
        "country" => "Armenia(+374)"
        ],
        [
            "code" => 297,
        "country" => "Aruba(+297)"
        ],
        [
            "code" => 61,
        "country" => "Australia(+61)"
        ],
        [
            "code" => 43,
        "country" => "Austria(+43)"
        ],
        [
            "code" => 994,
        "country" => "Azerbaijan(+994)"
        ],
        [
            "code" => 1242,
        "country" => "Bahamas(+1242)"
        ],
        [
            "code" => 973,
        "country" => "Bahrain(+973)"
        ],
        [
            "code" => 880,
        "country" => "Bangladesh(+880)"
        ],
        [
            "code" => 1246,
        "country" => "Barbados(+1246)"
        ],
        [
            "code" => 375,
        "country" => "Belarus(+375)"
        ],
        [
            "code" => 32,
        "country" => "Belgium(+32)"
        ],
        [
            "code" => 501,
        "country" => "Belize(+501)"
        ],
        [
            "code" => 229,
        "country" => "Benin(+229)"
        ],
        [
            "code" => 1441,
        "country" => "Bermuda(+1441)"
        ],
        [
            "code" => 975,
        "country" => "Bhutan(+975)"
        ],
        [
            "code" => 591,
        "country" => "Bolivia(+591)"
        ],
        [
            "code" => 387,
        "country" => "Bosnia Herzegovina(+387)"
        ],
        [
            "code" => 267,
        "country" => "Botswana(+267)"
        ],
        [
            "code" => 55,
        "country" => "Brazil(+55)"
        ],
        [
            "code" => 673,
        "country" => "Brunei(+673)"
        ],
        [
            "code" => 359,
        "country" => "Bulgaria(+359)"
        ],
        [
            "code" => 226,
        "country" => "Burkina Faso(+226)"
        ],
        [
            "code" => 257,
        "country" => "Burundi(+257)"
        ],
        [
            "code" => 855,
        "country" => "Cambodia(+855)"
        ],
        [
            "code" => 237,
        "country" => "Cameroon(+237)"
        ],
        [
            "code" => 1,
        "country" => "Canada(+1)"
        ],
        [
            "code" => 238,
        "country" => "Cape Verde Islands(+238)"
        ],
        [
            "code" => 1345,
        "country" => "Cayman Islands(+1345)"
        ],
        [
            "code" => 236,
        "country" => "Central African Republic(+236)"
        ],
        [
            "code" => 56,
        "country" => "Chile(+56)"
        ],
        [
            "code" => 86,
        "country" => "China(+86)"
        ],
        [
            "code" => 57,
        "country" => "Colombia(+57)"
        ],
        [
            "code" => 269,
        "country" => "Comoros/Mayotte(+269)"
        ],
        [
            "code" => 242,
        "country" => "Congo(+242)"
        ],
        [
            "code" => 682,
        "country" => "Cook Islands(+682)"
        ],
        [
            "code" => 506,
        "country" => "Costa Rica(+506)"
        ],
        [
            "code" => 385,
        "country" => "Croatia(+385)"
        ],
        [
            "code" => 53,
        "country" => "Cuba(+53)"
        ],
        [
            "code" => 357,
        "country" => "Cyprus South(+357)"
        ],
        [
            "code" => 420,
        "country" => "Czech Republic(+420)"
        ],
        [
            "code" => 45,
        "country" => "Denmark(+45)"
        ],
        [
            "code" => 253,
        "country" => "Djibouti(+253)"
        ],
        [
            "code" => 1809,
        "country" => "Dominican Republic(+1809)"
        ],
        [
            "code" => 593,
        "country" => "Ecuador(+593)"
        ],
        [
            "code" => 20,
        "country" => "Egypt(+20)"
        ],
        [
            "code" => 503,
        "country" => "El Salvador(+503)"
        ],
        [
            "code" => 240,
        "country" => "Equatorial Guinea(+240)"
        ],
        [
            "code" => 291,
        "country" => "Eritrea(+291)"
        ],
        [
            "code" => 372,
        "country" => "Estonia(+372)"
        ],
        [
            "code" => 251,
        "country" => "Ethiopia(+251)"
        ],
        [
            "code" => 500,
        "country" => "Falkland Islands(+500)"
        ],
        [
            "code" => 298,
        "country" => "Faroe Islands(+298)"
        ],
        [
            "code" => 679,
        "country" => "Fiji(+679)"
        ],
        [
            "code" => 358,
        "country" => "Finland(+358)"
        ],
        [
            "code" => 33,
        "country" => "France(+33)"
        ],
        [
            "code" => 594,
        "country" => "French Guiana(+594)"
        ],
        [
            "code" => 689,
        "country" => "French Polynesia(+689)"
        ],
        [
            "code" => 241,
        "country" => "Gabon(+241)"
        ],
        [
            "code" => 220,
        "country" => "Gambia(+220)"
        ],
        [
            "code" => 7880,
        "country" => "Georgia(+7880)"
        ],
        [
            "code" => 49,
        "country" => "Germany(+49)"
        ],
        [
            "code" => 233,
        "country" => "Ghana(+233)"
        ],
        [
            "code" => 350,
        "country" => "Gibraltar(+350)"
        ],
        [
            "code" => 30,
        "country" => "Greece(+30)"
        ],
        [
            "code" => 299,
        "country" => "Greenland(+299)"
        ],
        [
            "code" => 1473,
        "country" => "Grenada(+1473)"
        ],
        [
            "code" => 590,
        "country" => "Guadeloupe(+590)"
        ],
        [
            "code" => 671,
        "country" => "Guam(+671)"
        ],
        [
            "code" => 502,
        "country" => "Guatemala(+502)"
        ],
        [
            "code" => 224,
        "country" => "Guinea(+224)"
        ],
        [
            "code" => 245,
        "country" => "Guinea-Bissau(+245)"
        ],
        [
            "code" => 592,
        "country" => "Guyana(+592)"
        ],
        [
            "code" => 509,
        "country" => "Haiti(+509)"
        ],
        [
            "code" => 504,
        "country" => "Honduras(+504)"
        ],
        [
            "code" => 852,
        "country" => "Hong Kong(+852)"
        ],
        [
            "code" => 36,
        "country" => "Hungary(+36)"
        ],
        [
            "code" => 354,
        "country" => "Iceland(+354)"
        ],
        [
            "code" => 91,
        "country" => "India(+91)"
        ],
        [
            "code" => 62,
        "country" => "Indonesia(+62)"
        ],
        [
            "code" => 98,
        "country" => "Iran(+98)"
        ],
        [
            "code" => 964,
        "country" => "Iraq(+964)"
        ],
        [
            "code" => 353,
        "country" => "Ireland(+353)"
        ],
        [
            "code" => 972,
        "country" => "Israel(+972)"
        ],
        [
            "code" => 39,
        "country" => "Italy(+39)"
        ],
        [
            "code" => 1876,
        "country" => "Jamaica(+1876)"
        ],
        [
            "code" => 81,
        "country" => "Japan(+81)"
        ],
        [
            "code" => 962,
        "country" => "Jordan(+962)"
        ],
        [
            "code" => 254,
        "country" => "Kenya(+254)"
        ],
        [
            "code" => 686,
        "country" => "Kiribati(+686)"
        ],
        [
            "code" => 850,
        "country" => "Korea North(+850)"
        ],
        [
            "code" => 82,
        "country" => "Korea South(+82)"
        ],
        [
            "code" => 965,
        "country" => "Kuwait(+965)"
        ],
        [
            "code" => 996,
        "country" => "Kyrgyzstan(+996)"
        ],
        [
            "code" => 856,
        "country" => "Laos(+856)"
        ],
        [
            "code" => 371,
        "country" => "Latvia(+371)"
        ],
        [
            "code" => 961,
        "country" => "Lebanon(+961)"
        ],
        [
            "code" => 266,
        "country" => "Lesotho(+266)"
        ],
        [
            "code" => 231,
        "country" => "Liberia(+231)"
        ],
        [
            "code" => 218,
        "country" => "Libya(+218)"
        ],
        [
            "code" => 417,
        "country" => "Liechtenstein(+417)"
        ],
        [
            "code" => 370,
        "country" => "Lithuania(+370)"
        ],
        [
            "code" => 352,
        "country" => "Luxembourg(+352)"
        ],
        [
            "code" => 853,
        "country" => "Macao(+853)"
        ],
        [
            "code" => 389,
        "country" => "Macedonia(+389)"
        ],
        [
            "code" => 261,
        "country" => "Madagascar(+261)"
        ],
        [
            "code" => 265,
        "country" => "Malawi(+265)"
        ],
        [
            "code" => 60,
        "country" => "Malaysia(+60)"
        ],
        [
            "code" => 960,
        "country" => "Maldives(+960)"
        ],
        [
            "code" => 223,
        "country" => "Mali(+223)"
        ],
        [
            "code" => 356,
        "country" => "Malta(+356)"
        ],
        [
            "code" => 692,
        "country" => "Marshall Islands(+692)"
        ],
        [
            "code" => 596,
        "country" => "Martinique(+596)"
        ],
        [
            "code" => 222,
        "country" => "Mauritania(+222)"
        ],
        [
            "code" => 52,
        "country" => "Mexico(+52)"
        ],
        [
            "code" => 691,
        "country" => "Micronesia(+691)"
        ],
        [
            "code" => 373,
        "country" => "Moldova(+373)"
        ],
        [
            "code" => 377,
        "country" => "Monaco(+377)"
        ],
        [
            "code" => 976,
        "country" => "Mongolia(+976)"
        ],
        [
            "code" => 1664,
        "country" => "Montserrat(+1664)"
        ],
        [
            "code" => 212,
        "country" => "Morocco(+212)"
        ],
        [
            "code" => 258,
        "country" => "Mozambique(+258)"
        ],
        [
            "code" => 95,
        "country" => "Myanmar(+95)"
        ],
        [
            "code" => 264,
        "country" => "Namibia(+264)"
        ],
        [
            "code" => 674,
        "country" => "Nauru(+674)"
        ],
        [
            "code" => 977,
        "country" => "Nepal(+977)"
        ],
        [
            "code" => 31,
        "country" => "Netherlands(+31)"
        ],
        [
            "code" => 687,
        "country" => "New Caledonia(+687)"
        ],
        [
            "code" => 64,
        "country" => "New Zealand(+64)"
        ],
        [
            "code" => 505,
        "country" => "Nicaragua(+505)"
        ],
        [
            "code" => 227,
        "country" => "Niger(+227)"
        ],
        [
            "code" => 234,
        "country" => "Nigeria(+234)"
        ],
        [
            "code" => 683,
        "country" => "Niue(+683)"
        ],
        [
            "code" => 670,
        "country" => "Northern Marianas(+670)"
        ],
        [
            "code" => 47,
        "country" => "Norway(+47)"
        ],
        [
            "code" => 968,
        "country" => "Oman(+968)"
        ],
        [
            "code" => 680,
        "country" => "Palau(+680)"
        ],
        [
            "code" => 507,
        "country" => "Panama(+507)"
        ],
        [
            "code" => 675,
        "country" => "Papua New Guinea(+675)"
        ],
        [
            "code" => 595,
        "country" => "Paraguay(+595)"
        ],
        [
            "code" => 51,
        "country" => "Peru(+51)"
        ],
        [
            "code" => 63,
        "country" => "Philippines(+63)"
        ],
        [
            "code" => 48,
        "country" => "Poland(+48)"
        ],
        [
            "code" => 351,
        "country" => "Portugal(+351)"
        ],
        [
            "code" => 1787,
        "country" => "Puerto Rico(+1787)"
        ],
        [
            "code" => 974,
        "country" => "Qatar(+974)"
        ],
        [
            "code" => 262,
        "country" => "Reunion(+262)"
        ],
        [
            "code" => 40,
        "country" => "Romania(+40)"
        ],
        [
            "code" => 7,
        "country" => "Russia/Kazakhstan(+7)"
        ],
        [
            "code" => 250,
        "country" => "Rwanda(+250)"
        ],
        [
            "code" => 378,
        "country" => "San Marino(+378)"
        ],
        [
            "code" => 239,
        "country" => "Sao Tome&amp;Principe(+239)"
        ],
        [
            "code" => 966,
        "country" => "Saudi Arabia(+966)"
        ],
        [
            "code" => 221,
        "country" => "Senegal(+221)"
        ],
        [
            "code" => 381,
        "country" => "Serbia(+381)"
        ],
        [
            "code" => 248,
        "country" => "Seychelles(+248)"
        ],
        [
            "code" => 232,
        "country" => "Sierra Leone(+232)"
        ],
        [
            "code" => 65,
        "country" => "Singapore(+65)"
        ],
        [
            "code" => 421,
        "country" => "Slovak Republic(+421)"
        ],
        [
            "code" => 386,
        "country" => "Slovenia(+386)"
        ],
        [
            "code" => 677,
        "country" => "Solomon Islands(+677)"
        ],
        [
            "code" => 252,
        "country" => "Somalia(+252)"
        ],
        [
            "code" => 27,
        "country" => "South Africa(+27)"
        ],
        [
            "code" => 34,
        "country" => "Spain(+34)"
        ],
        [
            "code" => 94,
        "country" => "Sri Lanka(+94)"
        ],
        [
            "code" => 290,
        "country" => "St. Helena(+290)"
        ],
        [
            "code" => 1869,
        "country" => "St. Kitts(+1869)"
        ],
        [
            "code" => 1758,
        "country" => "St. Lucia(+1758)"
        ],
        [
            "code" => 249,
        "country" => "Sudan(+249)"
        ],
        [
            "code" => 597,
        "country" => "Suriname(+597)"
        ],
        [
            "code" => 268,
        "country" => "Swaziland(+268)"
        ],
        [
            "code" => 46,
        "country" => "Sweden(+46)"
        ],
        [
            "code" => 41,
        "country" => "Switzerland(+41)"
        ],
        [
            "code" => 963,
        "country" => "Syria(+963)"
        ],
        [
            "code" => 886,
        "country" => "Taiwan(+886)"
        ],
        [
            "code" => 66,
        "country" => "Thailand(+66)"
        ],
        [
            "code" => 228,
        "country" => "Togo(+228)"
        ],
        [
            "code" => 676,
        "country" => "Tonga(+676)"
        ],
        [
            "code" => 1868,
        "country" => "Trinidad&amp;Tobago(+1868)"
        ],
        [
            "code" => 216,
        "country" => "Tunisia(+216)"
        ],
        [
            "code" => 90,
        "country" => "Turkey(+90)"
        ],
        [
            "code" => 993,
        "country" => "Turkmenistan(+993)"
        ],
        [
            "code" => 1649,
        "country" => "Turks&amp;Caicos Islands(+1649)"
        ],
        [
            "code" => 688,
        "country" => "Tuvalu(+688)"
        ],
        [
            "code" => 256,
        "country" => "Uganda(+256)"
        ],
        [
            "code" => 44,
        "country" => "UK(+44)"
        ],
        [
            "code" => 380,
        "country" => "Ukraine(+380)"
        ],
        [
            "code" => 971,
        "country" => "United Arab Emirates(+971)"
        ],
        [
            "code" => 1,
            "country" => "United States of America(+1)"
        ],
        [
            "code" => 598,
        "country" => "Uruguay(+598)"
        ],
        [
            "code" => 678,
        "country" => "Vanuatu(+678)"
        ],
        [
            "code" => 379,
        "country" => "Vatican City(+379)"
        ],
        [
            "code" => 58,
        "country" => "Venezuela(+58)"
        ],
        [
            "code" => 84,
        "country" => "Vietnam(+84)"
        ],
        [
            "code" => 1284,
        "country" => "Virgin Islands-British(+1284)"
        ],
        [
            "code" => 1340,
        "country" => "Virgin Islands-US(+1340)"
        ],
        [
            "code" => 681,
        "country" => "Wallis&amp;Futuna(+681)"
        ],
        [
            "code" => 969,
        "country" => "Yemen(North)(+969)"
        ],
        [
            "code" => 967,
        "country" => "Yemen(South)(+967)"
        ],
        [
            "code" => 260,
        "country" => "Zambia(+260)"
        ],
        [
            "code" => 263,
        "country" => "Zimbabwe(+263)"
        ]
    ];

    private $arrCountriesInverted = [
        'Afghanistan' => 'AFG',
        'Åland Islands' => 'ALA',
        'Albania' => 'ALB',
        'Algeria' => 'DZA',
        'American Samoa' => 'ASM',
        'Andorra' => 'AND',
        'Angola' => 'AGO',
        'Anguilla' => 'AIA',
        'Antarctica' => 'ATA',
        'Antigua and Barbuda' => 'ATG',
        'Argentina' => 'ARG',
        'Armenia' => 'ARM',
        'Aruba' => 'ABW',
        'Australia' => 'AUS',
        'Austria' => 'AUT',
        'Azerbaijan' => 'AZE',
        'Bahamas' => 'BHS',
        'Bahrain' => 'BHR',
        'Bangladesh' => 'BGD',
        'Barbados' => 'BRB',
        'Belarus' => 'BLR',
        'Belgium' => 'BEL',
        'Belize' => 'BLZ',
        'Benin' => 'BEN',
        'Bermuda' => 'BMU',
        'Bhutan' => 'BTN',
        'Bolivia' => 'BOL',
        'Bonaire' => 'BES',
        'Bosnia and Herzegovina' => 'BIH',
        'Botswana' => 'BWA',
        'Bouvet Island' => 'BVT',
        'Brazil' => 'BRA',
        'British Indian Ocean Territory' => 'IOT',
        'Brunei Darussalam' => 'BRN',
        'Bulgaria' => 'BGR',
        'Burkina Faso' => 'BFA',
        'Burundi' => 'BDI',
        'Cambodia' => 'KHM',
        'Cameroon' => 'CMR',
        'Canada' => 'CAN',
        'Cape Verde' => 'CPV',
        'Cayman Islands' => 'CYM',
        'Central African Republic' => 'CAF',
        'Chad' => 'TCD',
        'Chile' => 'CHL',
        'China' => 'CHN',
        'Christmas Island' => 'CXR',
        'Cocos Islands' => 'CCK',
        'Colombia' => 'COL',
        'Comoros' => 'COM',
        'Congo' => 'COG',
        'Congo, the Democratic Republic of the' => 'COD',
        'Cook Islands' => 'COK',
        'Costa Rica' => 'CRI',
        'Côte d\'Ivoire' => 'CIV',
        'Croatia' => 'HRV',
        'Cuba' => 'CUB',
        'Curaçao' => 'CUW',
        'Cyprus' => 'CYP',
        'Czech Republic' => 'CZE',
        'Denmark' => 'DNK',
        'Djibouti' => 'DJI',
        'Dominica' => 'DMA',
        'Dominican Republic' => 'DOM',
        'Ecuador' => 'ECU',
        'Egypt' => 'EGY',
        'El Salvador' => 'SLV',
        'Equatorial Guinea' => 'GNQ',
        'Eritrea' => 'ERI',
        'Estonia' => 'EST',
        'Ethiopia' => 'ETH',
        'Falkland Islands' => 'FLK',
        'Faroe Islands' => 'FRO',
        'Fiji' => 'FJI',
        'Finland' => 'FIN',
        'France' => 'FRA',
        'French Guiana' => 'GUF',
        'French Polynesia' => 'PYF',
        'French Southern Territories' => 'ATF',
        'Gabon' => 'GAB',
        'Gambia' => 'GMB',
        'Georgia' => 'GEO',
        'Germany' => 'DEU',
        'Ghana' => 'GHA',
        'Gibraltar' => 'GIB',
        'Greece' => 'GRC',
        'Greenland' => 'GRL',
        'Grenada' => 'GRD',
        'Guadeloupe' => 'GLP',
        'Guam' => 'GUM',
        'Guatemala' => 'GTM',
        'Guernsey' => 'GGY',
        'Guinea' => 'GIN',
        'Guinea-Bissau' => 'GNB',
        'Guyana' => 'GUY',
        'Haiti' => 'HTI',
        'Heard Island and McDonald Islands' => 'HMD',
        'Holy See' => 'VAT',
        'Honduras' => 'HND',
        'Hong Kong' => 'HKG',
        'Hungary' => 'HUN',
        'Iceland' => 'ISL',
        'India' => 'IND',
        'Indonesia' => 'IDN',
        'Iran' => 'IRN',
        'Iraq' => 'IRQ',
        'Ireland' => 'IRL',
        'Isle of Man' => 'IMN',
        'Israel' => 'ISR',
        'Italy' => 'ITA',
        'Jamaica' => 'JAM',
        'Japan' => 'JPN',
        'Jersey' => 'JEY',
        'Jordan' => 'JOR',
        'Kazakhstan' => 'KAZ',
        'Kenya' => 'KEN',
        'Kiribati' => 'KIR',
        'Korea' => 'KOR',
        'Kuwait' => 'KWT',
        'Kyrgyzstan' => 'KGZ',
        'Lao People\'s Democratic Republic' => 'LAO',
        'Latvia' => 'LVA',
        'Lebanon' => 'LBN',
        'Lesotho' => 'LSO',
        'Liberia' => 'LBR',
        'Libya' => 'LBY',
        'Liechtenstein' => 'LIE',
        'Lithuania' => 'LTU',
        'Luxembourg' => 'LUX',
        'Macao' => 'MAC',
        'Macedonia, the former Yugoslav Republic of' => 'MKD',
        'Madagascar' => 'MDG',
        'Malawi' => 'MWI',
        'Malaysia' => 'MYS',
        'Maldives' => 'MDV',
        'Mali' => 'MLI',
        'Malta' => 'MLT',
        'Marshall Islands' => 'MHL',
        'Martinique' => 'MTQ',
        'Mauritania' => 'MRT',
        'Mauritius' => 'MUS',
        'Mayotte' => 'MYT',
        'Mexico' => 'MEX',
        'Micronesia' => 'FSM',
        'Moldova, Republic of' => 'MDA',
        'Monaco' => 'MCO',
        'Mongolia' => 'MNG',
        'Montenegro' => 'MNE',
        'Montserrat' => 'MSR',
        'Morocco' => 'MAR',
        'Mozambique' => 'MOZ',
        'Myanmar' => 'MMR',
        'Namibia' => 'NAM',
        'Nauru' => 'NRU',
        'Nepal' => 'NPL',
        'Netherlands' => 'NLD',
        'New Caledonia' => 'NCL',
        'New Zealand' => 'NZL',
        'Nicaragua' => 'NIC',
        'Niger' => 'NER',
        'Nigeria' => 'NGA',
        'Niue' => 'NIU',
        'Norfolk Island' => 'NFK',
        'Northern Mariana Islands' => 'MNP',
        'Norway' => 'NOR',
        'Oman' => 'OMN',
        'Pakistan' => 'PAK',
        'Palau' => 'PLW',
        'Palestinian Territory' => 'PSE',
        'Panama' => 'PAN',
        'Papua New Guinea' => 'PNG',
        'Paraguay' => 'PRY',
        'Peru' => 'PER',
        'Philippines' => 'PHL',
        'Pitcairn' => 'PCN',
        'Poland' => 'POL',
        'Portugal' => 'PRT',
        'Puerto Rico' => 'PRI',
        'Qatar' => 'QAT',
        'Réunion' => 'REU',
        'Romania' => 'ROU',
        'Russian Federation' => 'RUS',
        'Rwanda' => 'RWA',
        'Saint Barthélemy' => 'BLM',
        'Saint Helena, Ascension and Tristan da Cunha' => 'SHN',
        'Saint Kitts and Nevis' => 'KNA',
        'Saint Lucia' => 'LCA',
        'Saint Martin (French part)' => 'MAF',
        'Saint Pierre and Miquelon' => 'SPM',
        'Saint Vincent and the Grenadines' => 'VCT',
        'Samoa' => 'WSM',
        'San Marino' => 'SMR',
        'Sao Tome and Principe' => 'STP',
        'Saudi Arabia' => 'SAU',
        'Senegal' => 'SEN',
        'Serbia' => 'SRB',
        'Seychelles' => 'SYC',
        'Sierra Leone' => 'SLE',
        'Singapore' => 'SGP',
        'Sint Maarten (Dutch part)' => 'SXM',
        'Slovakia' => 'SVK',
        'Slovenia' => 'SVN',
        'Solomon Islands' => 'SLB',
        'Somalia' => 'SOM',
        'South Africa' => 'ZAF',
        'South Georgia and the South Sandwich Islands' => 'SGS',
        'South Sudan' => 'SSD',
        'Spain' => 'ESP',
        'Sri Lanka' => 'LKA',
        'Sudan' => 'SDN',
        'Suriname' => 'SUR',
        'Svalbard and Jan Mayen' => 'SJM',
        'Swaziland' => 'SWZ',
        'Sweden' => 'SWE',
        'Switzerland' => 'CHE',
        'Syrian Arab Republic' => 'SYR',
        'Taiwan, Province of China' => 'TWN',
        'Tajikistan' => 'TJK',
        'Tanzania, United Republic of' => 'TZA',
        'Thailand' => 'THA',
        'Timor-Leste' => 'TLS',
        'Togo' => 'TGO',
        'Tokelau' => 'TKL',
        'Tonga' => 'TON',
        'Trinidad and Tobago' => 'TTO',
        'Tunisia' => 'TUN',
        'Turkey' => 'TUR',
        'Turkmenistan' => 'TKM',
        'Turks and Caicos Islands' => 'TCA',
        'Tuvalu' => 'TUV',
        'Uganda' => 'UGA',
        'Ukraine' => 'UKR',
        'United Arab Emirates' => 'ARE',
        'United Kingdom' => 'GBR',
        'United States' => 'USA',
        'United States Minor Outlying Islands' => 'UMI',
        'Uruguay' => 'URY',
        'Uzbekistan' => 'UZB',
        'Vanuatu' => 'VUT',
        'Venezuela, Bolivarian Republic of' => 'VEN',
        'Viet Nam' => 'VNM',
        'Virgin Islands, British' => 'VGB',
        'Virgin Islands, U.S.' => 'VIR',
        'Wallis and Futuna' => 'WLF',
        'Western Sahara' => 'ESH',
        'Yemen' => 'YEM',
        'Zambia' => 'ZMB',
        'Zimbabwe' => 'ZWE'
    ];

    private $arrISO2 = [
        'AF' => 'AFG',
        'AL' => 'ALB',
        'DZ' => 'DZA',
        'AS' => 'ASM',
        'AD' => 'AND',
        'AO' => 'AGO',
        'AI' => 'AIA',
        'AQ' => 'ATA',
        'AG' => 'ATG',
        'AR' => 'ARG',
        'AM' => 'ARM',
        'AW' => 'ABW',
        'AU' => 'AUS',
        'AT' => 'AUT',
        'AZ' => 'AZE',
        'BS' => 'BHS',
        'BH' => 'BHR',
        'BD' => 'BGD',
        'BB' => 'BRB',
        'BY' => 'BLR',
        'BE' => 'BEL',
        'BZ' => 'BLZ',
        'BJ' => 'BEN',
        'BM' => 'BMU',
        'BT' => 'BTN',
        'BO' => 'BOL',
        'BA' => 'BIH',
        'BW' => 'BWA',
        'BV' => 'BVT',
        'BR' => 'BRA',
        'IO' => 'IOT',
        'VG' => 'VGB',
        'BN' => 'BRN',
        'BG' => 'BGR',
        'BF' => 'BFA',
        'BI' => 'BDI',
        'KH' => 'KHM',
        'CM' => 'CMR',
        'CA' => 'CAN',
        'CV' => 'CPV',
        'KY' => 'CYM',
        'CF' => 'CAF',
        'TD' => 'TCD',
        'CL' => 'CHL',
        'CN' => 'CHN',
        'CX' => 'CXR',
        'CC' => 'CCK',
        'CO' => 'COL',
        'KM' => 'COM',
        'CD' => 'COD',
        'CG' => 'COG',
        'CK' => 'COK',
        'CR' => 'CRI',
        'CI' => 'CIV',
        'CU' => 'CUB',
        'CY' => 'CYP',
        'CZ' => 'CZE',
        'DK' => 'DNK',
        'DJ' => 'DJI',
        'DM' => 'DMA',
        'DO' => 'DOM',
        'EC' => 'ECU',
        'EG' => 'EGY',
        'SV' => 'SLV',
        'GQ' => 'GNQ',
        'ER' => 'ERI',
        'EE' => 'EST',
        'ET' => 'ETH',
        'FO' => 'FRO',
        'FK' => 'FLK',
        'FJ' => 'FJI',
        'FI' => 'FIN',
        'FR' => 'FRA',
        'GF' => 'GUF',
        'PF' => 'PYF',
        'TF' => 'ATF',
        'GA' => 'GAB',
        'GM' => 'GMB',
        'GE' => 'GEO',
        'DE' => 'DEU',
        'GH' => 'GHA',
        'GI' => 'GIB',
        'GR' => 'GRC',
        'GL' => 'GRL',
        'GD' => 'GRD',
        'GP' => 'GLP',
        'GU' => 'GUM',
        'GT' => 'GTM',
        'GN' => 'GIN',
        'GW' => 'GNB',
        'GY' => 'GUY',
        'HT' => 'HTI',
        'HM' => 'HMD',
        'VA' => 'VAT',
        'HN' => 'HND',
        'HK' => 'HKG',
        'HR' => 'HRV',
        'HU' => 'HUN',
        'IS' => 'ISL',
        'IN' => 'IND',
        'ID' => 'IDN',
        'IR' => 'IRN',
        'IQ' => 'IRQ',
        'IE' => 'IRL',
        'IL' => 'ISR',
        'IT' => 'ITA',
        'JM' => 'JAM',
        'JP' => 'JPN',
        'JO' => 'JOR',
        'KZ' => 'KAZ',
        'KE' => 'KEN',
        'KI' => 'KIR',
        'KP' => 'PRK',
        'KR' => 'KOR',
        'KW' => 'KWT',
        'KG' => 'KGZ',
        'LA' => 'LAO',
        'LV' => 'LVA',
        'LB' => 'LBN',
        'LS' => 'LSO',
        'LR' => 'LBR',
        'LY' => 'LBY',
        'LI' => 'LIE',
        'LT' => 'LTU',
        'LU' => 'LUX',
        'MO' => 'MAC',
        'MK' => 'MKD',
        'MG' => 'MDG',
        'MW' => 'MWI',
        'MY' => 'MYS',
        'MV' => 'MDV',
        'ML' => 'MLI',
        'MT' => 'MLT',
        'MH' => 'MHL',
        'MQ' => 'MTQ',
        'MR' => 'MRT',
        'MU' => 'MUS',
        'YT' => 'MYT',
        'MX' => 'MEX',
        'FM' => 'FSM',
        'MD' => 'MDA',
        'MC' => 'MCO',
        'MN' => 'MNG',
        'MS' => 'MSR',
        'MA' => 'MAR',
        'MZ' => 'MOZ',
        'MM' => 'MMR',
        'NA' => 'NAM',
        'NR' => 'NRU',
        'NP' => 'NPL',
        'AN' => 'ANT',
        'NL' => 'NLD',
        'NC' => 'NCL',
        'NZ' => 'NZL',
        'NI' => 'NIC',
        'NE' => 'NER',
        'NG' => 'NGA',
        'NU' => 'NIU',
        'NF' => 'NFK',
        'MP' => 'MNP',
        'NO' => 'NOR',
        'OM' => 'OMN',
        'PK' => 'PAK',
        'PW' => 'PLW',
        'PS' => 'PSE',
        'PA' => 'PAN',
        'PG' => 'PNG',
        'PY' => 'PRY',
        'PE' => 'PER',
        'PH' => 'PHL',
        'PN' => 'PCN',
        'PL' => 'POL',
        'PT' => 'PRT',
        'PR' => 'PRI',
        'QA' => 'QAT',
        'RE' => 'REU',
        'RO' => 'ROU',
        'RU' => 'RUS',
        'RW' => 'RWA',
        'SH' => 'SHN',
        'KN' => 'KNA',
        'LC' => 'LCA',
        'PM' => 'SPM',
        'VC' => 'VCT',
        'WS' => 'WSM',
        'SM' => 'SMR',
        'ST' => 'STP',
        'SA' => 'SAU',
        'SN' => 'SEN',
        'CS' => 'SCG',
        'SC' => 'SYC',
        'SL' => 'SLE',
        'SG' => 'SGP',
        'SK' => 'SVK',
        'SI' => 'SVN',
        'SB' => 'SLB',
        'SO' => 'SOM',
        'ZA' => 'ZAF',
        'GS' => 'SGS',
        'ES' => 'ESP',
        'LK' => 'LKA',
        'SD' => 'SDN',
        'SR' => 'SUR',
        'SJ' => 'SJM',
        'SZ' => 'SWZ',
        'SE' => 'SWE',
        'CH' => 'CHE',
        'SY' => 'SYR',
        'TW' => 'TWN',
        'TJ' => 'TJK',
        'TZ' => 'TZA',
        'TH' => 'THA',
        'TL' => 'TLS',
        'TG' => 'TGO',
        'TK' => 'TKL',
        'TO' => 'TON',
        'TT' => 'TTO',
        'TN' => 'TUN',
        'TR' => 'TUR',
        'TM' => 'TKM',
        'TC' => 'TCA',
        'TV' => 'TUV',
        'VI' => 'VIR',
        'UG' => 'UGA',
        'UA' => 'UKR',
        'AE' => 'ARE',
        'GB' => 'GBR',
        'UM' => 'UMI',
        'US' => 'USA',
        'UY' => 'URY',
        'UZ' => 'UZB',
        'VU' => 'VUT',
        'VE' => 'VEN',
        'VN' => 'VNM',
        'WF' => 'WLF',
        'EH' => 'ESH',
        'YE' => 'YEM',
        'ZM' => 'ZMB',
        'ZW' => 'ZWE'
    ];
    
    private $arrPhoneCodesToCountryCodes = [
        "1" => "USA",
        "7" => "RUS",
        "20" => "EGY",
        "27" => "ZAF",
        "30" => "GRC",
        "31" => "NLD",
        "32" => "BEL",
        "33" => "FRA",
        "34" => "ESP",
        "36" => "HUN",
        "39" => "ITA",
        "40" => "ROU",
        "41" => "CHE",
        "43" => "AUT",
        "44" => "GBR",
        "45" => "DNK",
        "46" => "SWE",
        "47" => "NOR",
        "48" => "POL",
        "49" => "DEU",
        "51" => "PER",
        "52" => "MEX",
        "53" => "CUB",
        "54" => "ARG",
        "55" => "BRA",
        "56" => "CHL",
        "57" => "COL",
        "58" => "VEN",
        "60" => "MYS",
        "61" => "AUS",
        "62" => "IDN",
        "63" => "PHL",
        "64" => "NZL",
        "65" => "SGP",
        "66" => "THA",
        "81" => "JPN",
        "82" => "KOR",
        "84" => "VNM",
        "86" => "CHN",
        "90" => "TUR",
        "91" => "IND",
        "94" => "LKA",
        "95" => "MMR",
        "98" => "IRN",
        "212" => "MAR",
        "213" => "DZA",
        "216" => "TUN",
        "218" => "LBY",
        "220" => "GMB",
        "221" => "SEN",
        "222" => "MRT",
        "223" => "MLI",
        "224" => "GIN",
        "226" => "BFA",
        "227" => "NER",
        "228" => "TGO",
        "229" => "BEN",
        "231" => "LBR",
        "232" => "SLE",
        "233" => "GHA",
        "234" => "NGA",
        "236" => "CAF",
        "237" => "CMR",
        "238" => "CPV",
        "239" => "STP",
        "240" => "GNQ",
        "241" => "GAB",
        "242" => "COG",
        "244" => "AGO",
        "245" => "GNB",
        "248" => "SYC",
        "249" => "SDN",
        "250" => "RWA",
        "251" => "ETH",
        "252" => "SOM",
        "253" => "DJI",
        "254" => "KEN",
        "256" => "UGA",
        "257" => "BDI",
        "258" => "MOZ",
        "260" => "ZMB",
        "261" => "MDG",
        "262" => "REU",
        "263" => "ZWE",
        "264" => "NAM",
        "265" => "MWI",
        "266" => "LSO",
        "267" => "BWA",
        "268" => "SWZ",
        "269" => "COM",
        "290" => "SHN",
        "291" => "ERI",
        "297" => "ABW",
        "298" => "FRO",
        "299" => "GRL",
        "350" => "GIB",
        "351" => "PRT",
        "352" => "LUX",
        "353" => "IRL",
        "354" => "ISL",
        "356" => "MLT",
        "357" => "CYP",
        "358" => "FIN",
        "359" => "BGR",
        "370" => "LTU",
        "371" => "LVA",
        "372" => "EST",
        "373" => "MDA",
        "374" => "ARM",
        "375" => "BLR",
        "376" => "AND",
        "377" => "MCO",
        "378" => "SMR",
        "379" => "VAT",
        "380" => "UKR",
        "381" => "SRB",
        "385" => "HRV",
        "386" => "SVN",
        "387" => "BIH",
        "389" => "MKD",
        "417" => "LIE",
        "420" => "CZE",
        "421" => "SVK",
        "500" => "FLK",
        "501" => "BLZ",
        "502" => "GTM",
        "503" => "SLV",
        "504" => "HND",
        "505" => "NIC",
        "506" => "CRI",
        "507" => "PAN",
        "509" => "HTI",
        "590" => "GLP",
        "591" => "BOL",
        "592" => "GUY",
        "593" => "ECU",
        "594" => "GUF",
        "595" => "PRY",
        "596" => "MTQ",
        "597" => "SUR",
        "598" => "URY",
        "670" => "MNP",
        "671" => "GUM",
        "673" => "BRN",
        "674" => "NRU",
        "675" => "PNG",
        "676" => "TON",
        "677" => "SLB",
        "678" => "VUT",
        "679" => "FJI",
        "680" => "PLW",
        "681" => "WLF",
        "682" => "COK",
        "683" => "NIU",
        "686" => "KIR",
        "687" => "NCL",
        "688" => "TUV",
        "689" => "PYF",
        "691" => "FSM",
        "692" => "MHL",
        "850" => "PRK",
        "852" => "HKG",
        "853" => "MAC",
        "855" => "KHM",
        "856" => "LAO",
        "880" => "BGD",
        "886" => "TWN",
        "960" => "MDV",
        "961" => "LBN",
        "962" => "JOR",
        "963" => "SYR",
        "964" => "IRQ",
        "965" => "KWT",
        "966" => "SAU",
        "967" => "YEM",
        "968" => "OMN",
        "969" => "YEM",
        "971" => "ARE",
        "972" => "ISR",
        "973" => "BHR",
        "974" => "QAT",
        "975" => "BTN",
        "976" => "MNG",
        "977" => "NPL",
        "993" => "TKM",
        "994" => "AZE",
        "996" => "KGZ",
        "1242" => "BHS",
        "1246" => "BRB",
        "1264" => "AIA",
        "1268" => "ATG",
        "1284" => "VGB",
        "1340" => "VIR",
        "1345" => "CYM",
        "1441" => "BMU",
        "1473" => "GRD",
        "1649" => "TCA",
        "1664" => "MSR",
        "1758" => "LCA",
        "1787" => "PRI",
        "1809" => "DOM",
        "1868" => "TTO",
        "1869" => "KNA",
        "1876" => "JAM",
        "7880" => "GEO"
    ];

    public static function countries($strSelected = null) {
        $objCountry = new Country();

        foreach ($objCountry->arrCountries as $key => $value) {
            if ($strSelected == $key) echo '<option value="' . $key . '" selected>' . $value . '</option>';
            else echo '<option value="' . $key . '">' . $value . '</option>';
        }

        return null;
    }

    public static function phoneCodes($strSelected = null) {
        $objCountry = new Country();

        foreach ($objCountry->arrCodes as $code) {
            if ($strSelected == $code['code']) echo '<option value="' . $code['code'] . '" selected>' . $code['country'] . '</option>';
            else echo '<option value="' . $code['code'] . '">' . $code['country'] . '</option>';
        }

        return null;
    }

    public static function countryNameToISO3($strCountry) {
        $objCountry = new Country();

        try {
            if (strlen($strCountry) == 2) return $objCountry->arrISO2[$strCountry];
            else return $objCountry->arrCountriesInverted[$strCountry];
        }
        catch (Exception $e) {
            return 'UNK';
        }
    }

    public static function phoneCodeToCountryCode($code) {
        $objCountry = new Country();

        try {
            return $objCountry->arrPhoneCodesToCountryCodes[$code];
        }
        catch (Exception $objException) {
            return 'UNK';
        }
    }
}