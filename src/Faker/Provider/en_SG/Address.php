<?php

namespace Faker\Provider\en_SG;

     /**
     * This reflects bth HDB and Landed property address conventions.
     * It includes the most common names and takes account of the Jalan and Street XX naming formats too.
     */


class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array();
    protected static $citySuffix = array();
    protected static $buildingNumber = array('#####', '####', '###');
    protected static $streetSuffix = array('Avenue', 'Avenue North', 'Center', 'Circle', 'Court', 'Crescent', 'Drive', 
        'Estate' , 'Field', 'Gate', 'Garden' , 'Green', 'Heights', 'Hill', 'Junction','Lane','Park', 'Point', 'Road', 
        'Terrace', 'View', 'Vista', 'Walk'
    );
    protected static $postcode = array('######');
    protected static $towns = array(
        'Admiralty', 'Aljunied', 'Ang Mo Kio', 'Anson Road', 'Balestier', 'Bartley', 'Bedok', 'Bedok Reservoir', 'Bencoolen', 
        'Bidadari', 'Boon Keng', 'Boon Keng', 'Boon Lay', 'Buangkok', 'Bugis', 'Bukit Batok',  
        'Bukit Gombak', 'Bukit Ho Swee', 'Bukit Merah', 'Bukit Panjang', 'Bukit Purmei', 'Bukit Timah', 'Buona Vista', 
        'Cairnhill', 'Caldecott', 'Cheng San', 'Chin Bee', 'Choa Chu Kang', 'Chong Boon', 'Chong Pang', 
        'Clementi', 'Commonwealth', 'Dover', 'Dunearn', 'Farrer', 'Fidelio', 'Frankel', 'Gek Poh Ville', 'Geylang', 
        'Geylang East', 'Ghim Moh', 'Hillview', 'Hougang', 'Innova', 'Joo Koon', 'Jurong', 'Jurong Central', 'Jurong East', 
        'Jurong West', 'Kallang', 'Kembangan', 'Lavender', 'Lim Chu Kang', 'Lok Yang', 'MacPherson', 'Mandai', 'Marine Parade', 
        'Marsiling', 'Mattar', 'Nanyang', 'Novena', 'Orchard Road', 'Pandan Valley', 'Pasir Panjang', 'Pasir Ris', 'Paya Lebar', 
        'Pioneer', 'Potong Pasir', 'Punggol', 'Queenstown', 'Rochor', 'Seletar', 'Sengkang', 'Sennett', 'Serangoon', 
        'Serangoon Gardens', 'Serangoon North', 'Shunfu', 'Simei', 'Simpang', 'Sin Ming', 'Somerset', 'Sungei Gedong', 
        'Tai Seng', 'Tampines', 'Tanglin', 'Tanjong Pagar', 'Teck Ghee', 'Telok Blangah', 'Tengah', 'Thomson', 'Tiong Bahru', 
        'Toa Payoh', 'Watten', 'Woodgrove', 'Woodlands', 'Yew Tee', 'Yishun', 'Yuhua'

    );

    protected static $majorEstates = array(
        'Aljunied', 'Ang Mo Kio', 'Bedok', 'Boon Lay', 'Bukit Merah', 'Bukit Panjang', 'Clementi', 'Geylang', 
        'Geylang East', 'Hougang', 'Jurong Central', 'Jurong East', 'Jurong West', 'Kallang', 
        'Marine Parade', 'Pasir Ris', 'Sengkang', 'Serangoon Gardens', 'Serangoon North',  'Tampines',  'Toa Payoh', 
        'Woodlands', 'Yishun'
    );


    protected static $jalanPlaces = array(
        'Adat', 'Afifi', 'Ahmad Ibrahim', 'Ampang', 'Ampas', 'Anak Bukit', 'Anak Patong', 'Anggerek', 'Angin Laut', 'Antoi', 'Arif', 'Ariff', 'Arnap', 'Aruan', 'Asas', 'Asuhan', 'Awan', 'Awang', 'Ayer', 'Azam', 'Bahagia', 'Bahar', 'Bahasa', 'Bahtera', 'Baiduri', 'Bangau', 'Bangket', 'Bangsawan', 'Batai', 'Batalong', 'Batu', 'Batu Nilam', 'Belangkas', 'Belibas', 'Bena', 'Benaan Kapal', 'Beringin', 'Berjaya', 'Berseh', 'Berseri', 'Besar', 'Besar Plaza', 'Besar Road', 'Besut', 'Bilal', 'Binchang', 'Bingka', 'Binja', 'Bintang Tiga', 'Boon Lay', 'Bukit Merah', 'Bukit Anak', 'Bukit Ho Swee', 'Bukit Merah', 'Buloh Perindu', 'Bumbong', 'Bunga', 'Bunga Rampai', 'Bunga Raya', 'Bungai Rampai', 'Buroh', 'Chegar', 'Chelagi', 'Chempadek', 'Chempah', 'Chempaka Kuning', 'Chempaka Puteh', 'Chempedak', 'Chengam', 'Chengkek', 'Cherah', 'Chermai', 'Chermat', 'Cherpen', 'Chorak', 'Chulek', 'Daliah', 'Damai', 'Damansara', 'Datoh', 'Daud', 'Demak', 'Dermawan', 'Derum', 'Dinding', 'Dua', 'Dusan', 'Dusun', 'Dusun Road', 'Elok', 'Emas Urai', 'Empat', 'Enam', 'Eunos', 'Gaharu', 'Gajus', 'Gali Batu', 'Gapis', 'Gelam', 'Gelegar', 'Gelenggang', 'Gemala', 'Gembira', 'Gendang', 'Geneng', 'Girang', 'Greja', 'Grisek', 'Gumilang', 'Haji Alias', 'Haji Salam', 'Hajijah', 'Hang Jebat', 'Hari Raya', 'Harom Setangkai', 'Harum', 'Hiboran', 'Hikayat', 'Hitam Manis', 'Hock Chye', 'Hussein', 'Hwi Yoh', 'Ibadat', 'Ikan Merah', 'Ilmu', 'Inggu', 'Insaf', 'Intan', 'Ishak', 'Ismail', 'Isnin', 'Istimewa', 'Jamal', 'Jambo Ayer', 'Jambu Ayer', 'Jambu Batu', 'Jambu Mawar', 'Janggus', 'Jarak', 'Jati', 'Jelita', 'Jendela', 'Jentera', 'Jermin', 'Jeruju', 'Jintan', 'Jitong', 'Joran', 'Jumbu Mawar', 'Jurong Kechil', 'Kakatua', 'Kalapa', 'Kampong Chantek', 'Kandis', 'Kapal', 'Kasau', 'Kathi', 'Kayu', 'Kayu Estate', 'Kayu Manis', 'Kebaya', 'Kebun Limau', 'Kechil', 'Kechot', 'Kechubong', 'Kelabu Asap', 'Kelawar', 'Kelempong', 'Keli', 'Kelichap', 'Kelulut', 'Kemajuan', 'Kemaman', 'Kembang Melati', 'Kembangan', 'Kemboja', 'Kemuning', 'Kenarah', 'Kerayong', 'Keria', 'Keris', 'Keruing', 'Kesoma', 'Ketumbit', 'Khairuddin', 'Khamis', 'Kilang', 'Kilang Barat', 'Kilang Timor', 'Klapa', 'Kledek', 'Klinik', 'Korban', 'Korma', 'Krian', 'Kuak', 'Kuala', 'Kuang', 'Kubor', 'Kukoh', 'Kumia', 'Kuning', 'Kupang', 'Kuras', 'Kurnia', 'Kwok Min', 'Labu', 'Labu Ayer', 'Labu Manis', 'Labu Merah', 'Lady Maxwell', 'Lakum', 'Lam Huat', 'Lam Sam', 'Lana', 'Langgar Bedok', 'Lanjut', 'Lapang', 'Lateh', 'Leban', 'Lebat Daun', 'Legundi', 'Lekar', 'Lekub', 'Lembah Bedok', 'Lembah Kallang', 'Lempeng', 'Lengkok Sembawang', 'Lengkong Tiga', 'Lepas', 'Lim Tai', 'Lim Tai See', 'Limau Bali', 'Limau Balli', 'Limau Kasturi', 'Limau Manis', 'Limau Nipis', 'Limau Purut', 'Limbok', 'Lokam', 'Loyang Besar', 'Lye Kwee', 'Ma\'mor', 'Machang', 'Mahir', 'Malu Malu', 'Mamor', 'Manis', 'Mariam', 'Marican', 'Marzuki', 'Mas Kuning', 'Mas Kunning', 'Mas Merah', 'Mas Puteh', 'Mashhor', 'Masjib', 'Masjid', 'Mastuli', 'Mat Jambol', 'Mata Ayer', 'Mawal', 'Mawar', 'Mayaanam', 'Melati', 'Melor', 'Membina', 'Membina Barat', 'Menarong', 'Mengkudu', 'Meragi', 'Merah Saga', 'Merbok', 'Merdu', 'Merlimau', 'Mesin', 'Mesra', 'Minggu', 'Minyak', 'Miutiara', 'Molek', 'Muhibbah', 'Mulia', 'Murai', 'Mutiara', 'Mydin', 'Naga Sari', 'Nallur', 'Nam Seng', 'Naung', 'Nipah', 'Nira', 'Novena', 'Novena Barat', 'Novena Selatan', 'Novena Timor', 'Novena Utara', 'Nuri', 'Pacheli', 'Pakis', 'Pandan', 'Papan', 'Paras', 'Pari Burong', 'Pari Dedap', 'Pari Kikis', 'Pari Unak', 'Pasar Baru', 'Pasir Ria', 'Pasiran', 'Payoh Lai', 'Pelajau', 'Pelangi', 'Pelatina', 'Pelatok', 'Pelepah', 'Pelikat', 'Pemimpin', 'Peminpin', 'Penjara', 'Peradun', 'Perahu', 'Pergam', 'Pernama', 'Pesawat', 'Piala', 'Pinang', 'Pintau', 'Piring', 'Pisang', 'Pokok Serunai', 'Punai', 'Puteh Jerneh', 'Puteh Jula', 'Puyoh', 'Rabu', 'Rahmat', 'Raja Udang', 'Rajah', 'Rajah Road', 'Rajawali', 'Rama Rama', 'Rama Rama', 'Ramaja', 'Ramis', 'Rasok', 'Rasok Park', 'Raya', 'Rebana', 'Redop', 'Remaja', 'Remis', 'Rendang', 'Rengas', 'Rengkam', 'Resak', 'Ria', 'Riang', 'Rimau', 'Rindu', 'Rukam', 'Rumah Tinggi', 'Rumbia', 'Rumia', 'Sahabat', 'Sajak', 'Salang', 'Samarinda', 'Sampurna', 'Samulun', 'Sankam', 'Sappan', 'Satu', 'Saudara Ku', 'Sayang', 'Seaview', 'Sedap', 'Segam', 'Seh Chuan', 'Sejarah', 'Selamat', 'Selangat', 'Selanting', 'Selasah', 'Selaseh', 'Selendang Delima', 'Selimang', 'Sembilang', 'Semerbak', 'Sempadan', 'Senang', 'Sendudok', 'Seni', 'Sentosa', 'Senyum', 'Serene', 'Serengam', 'Seruling', 'Setia', 'Shaer', 'Siantan', 'Siap', 'Sikudangan', 'Simpang Bedok', 'Sinar Bintang', 'Sinar Bulan', 'Sindor', 'Singa', 'Songket', 'Soo Bee', 'Suasa', 'Suka', 'Sukachita', 'Sultan', 'Sungei', 'Sungei Poyan', 'Surau', 'Tabur', 'Tai See', 'Taman', 'Tamban', 'Tambur', 'Tampang', 'Tan Tock Seng', 'Tanah Puteh', 'Tanah Rata', 'Tani', 'Tanjong', 'Tapisan', 'Tari Dulang', 'Tari Lilin', 'Tari Piring', 'Tari Serimpi', 'Tari Zapin', 'Tarum', 'Teban', 'Teck Kee', 'Teck Whye', 'Tekad', 'Tekukor', 'Telang', 'Telawi', 'Telipok', 'Teliti', 'Tembusu', 'Tempua', 'Tenaga', 'Tenang', 'Tenggiri', 'Tenon', 'Tenteram', 'Tepong', 'Terang Bulan', 'Terang Bulan, Opera Estate', 'Terap', 'Terentang', 'Terubok', 'Terusan', 'Tiga', 'Tiga Ratus', 'Todak', 'Tua Kong', 'Tukang', 'Tumpu', 'Tupai', 'Turi', 'Ubi', 'Uji', 'Ulu Seletar', 'Ulu Sembawang', 'Ulu Siglap', 'Unggas', 'Usaha', 'Wajek', 'Wak Selat', 'Wakaff', 'Wangi', 'Waringin', 'Warkaff', 'Woodbridge', 'Yasin', 'Yasin', 'Zamrud'
    );

    protected static $country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 
        'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 
        'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territory', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );



    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}'
    );
    protected static $streetNameFormats = array(
        '{{towns}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{block}} {{lorongAddress}} {{towns}}, {{flatNumberPrefix}}-{{flatNumberSuffix}}',
        '{{block}} {{majorEstates}} {{streetAddy}}, {{flatNumberPrefix}}-{{flatNumberSuffix}}',
        '{{block}} {{majorEstates}} {{streetAddy}}, {{flatNumberPrefix}}-{{flatNumberSuffix}}',
        '{{block}} {{majorEstates}} {{streetAddy}}, {{flatNumberPrefix}}-{{flatNumberSuffix}}',
        '{{streetNumber}} Jalan {{jalanPlace}}',
        '{{streetNumber}} {{streetName}}, {{flatNumberPrefix}}-{{flatNumberSuffix}}',
        '{{streetNumber}} {{streetName}}',
        '{{streetNumber}} {{streetName}}'
    );
    protected static $addressFormats = array(
        "{{streetAddress}}",
    );

 
     /**
     * The script kept churning out numbers starting in 0 so I've constrained it...
     */

  protected static $streetNumber = array(
    '1', '2', '3', '4', '5', '6', '7', '8', '9', 
    '1#', '2#', '3#','4#', '5#', '6#', '7#', '8#',
    'Blk 1##'
    );

 
   protected static $lorongAddress = array('Lorong 1', 'Lorong 1#', 'Lorong 2', 'Lorong 3', 'Lorong 4', 'Lorong 5', 'Lorong 6', 'Lorong 7', 'Lorong 8');
   protected static $street = array('Street 1#','Street 2#','Street 3#','Street 7#','Street 8#');
   protected static $block = array('Blk 1##','Blk 2##','Blk 3##','Blk 4##','Blk 1#','Blk 2#','Blk 3#','Blk 4#');


    public static function flatNumberPrefix() { 
        $flatnum = rand(1,18);
        if($flatnum<10) {
            $flatnum = "0".$flatnum;
        }
        return '&num;'.$flatnum;
    }


    public static function flatNumberSuffix() { 
        $flatnum = rand(1,45);
        if($flatnum<10) {
            $flatnum = "0".$flatnum;
        }
        return $flatnum;
    }


    public static function block()
{
        return static::numerify(static::randomElement(static::$block));
   }

    public static function streetAddy()
    {
        return static::numerify(static::randomElement(static::$street));
   }

    public static function lorongAddress()
    {
        return static::numerify(static::randomElement(static::$lorongAddress));
   }

    public static function streetNumber()
    {
        return static::numerify(static::randomElement(static::$streetNumber));
   }

    public static function lorong()
    {
        return static::numerify(static::randomElement(static::$lorong));
   }

    public static function majorEstates()
    {
        return static::randomElement(static::$majorEstates);
    }

    public static function towns()
    {
        return static::randomElement(static::$towns);
    }

    public static function jalanPlace()
    {
        return static::randomElement(static::$jalanPlaces);
    }


    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }



}
