<?php

namespace Faker\Provider\en_SG;

   /**
     *  Includes NRIC, Citizenship and Country of Origin, Name tied to Salutation
     *  
     *  $maleNameWithSalutation / $femaleNameWithSalutation - this creates a combo fullname plus first or last name salutation
     *  that can be used in tandem. Otherwise the script generates random values for each and they do not
     *  correspond to each other. With English names the first/last combo means that this is not an issues. But once
     *  you mix chinese names in, it's not so easy to figure out which is the correct name to use in correspondance so it is better
     *  to specify this directly
     *  
     */


class Enhanced extends \Faker\Provider\Person
{

    /**
     * NRIC - this does not do a strict calculatin of NRIC using the checksum constraints of actual numbers
     * For details on the checksum constraints, see here: http://www.arjun.com.np/blog/all-about-nric-number-in-singapore/
     */


    private static $nricPrefix = array(
        'S#######','S#######', 'S#######','S#######','S#######',
        'S#######','S#######', 'S#######','S#######','S#######',
        'S#######','S#######', 'S#######','S#######','S#######',
        'S#######','S#######', 'T#######','F#######','G#######',
        );

    private static $nricSuffix = array(
        'J', 'Z', 'I', 'H', 'G', 'F', 'E', 'D', 'C', 'B', 'A', 
        'X', 'W', 'U', 'T', 'R', 'Q', 'P', 'N', 'M', 'L', 'K', 
        );

   protected static $nric = array(
        '{{nricPrefix}}{{nricSuffix}}'
    );

    public function nricPrefix()
    {
        return static::numerify(static::randomElement(static::$nricPrefix));
    }

    public function nricSuffix()
    {
        return static::randomElement(static::$nricSuffix);
    }

    public function nric()
    {
        $format = static::randomElement(static::$nric);
        return $this->generator->parse($format);
    }



    /**
     * Citizenship and Country of Origin - this feeds back (1) Singaporean / PR / Expat and
     * gives a country of origen which is a subset of all countries based on a more likely country of 
     * origen for residents.
     * 
     */
    

    protected static $citizenship = array(
        'Singaporean', 'Singaporean', 'Singaporean', 'Singaporean', 'Singaporean', 'Singaporean', 
        'PR', 'PR','Expatriat',

     );

         protected static $countryOfOrigin = array(
         
        'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'China', 
        'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'China', 
        'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'India', 'China', 'China', 
        'Indonesia',  'Japan', 'South Korea', 'Pakistan', 'Bangladesh', 'Malaysia', 'Philippines', 'Sri Lanka',       
        'Taiwan', 'Thailand', 'Timor-Leste', 'Vietnam',
        'Indonesia',  'Japan', 'South Korea', 'Pakistan', 'Bangladesh', 'Malaysia', 'Philippines', 'Sri Lanka',       
        'Taiwan', 'Thailand', 'Vietnam',
        'Australia',  'Denmark', 'Finland', 'France', 'Germany',  'Norway','Canada', 'Austria','Belgium','New Zealand',  'South Africa',
        'Spain', 'United Kingdom', 'United States of America', 
        'Bahrain', 'Laos', 'Mauritius', 'Myanmar', 'Nepal', 'Hong Kong',  'Bhutan', 'Papua New Guinea', 'Brunei',  'Cambodia', 
        'Tajikistan', 'Turkey', 'Yemen',
    
    );

     public function citizenship()
    {
        $format = static::randomElement(static::$citizenship);
        return $this->generator->parse($format);
    }   

         public function countryOfOrigin()
    {
        $format = static::randomElement(static::$countryOfOrigin);
        return $this->generator->parse($format);
    }  


    /**
     * Name with Salutation - this creates a salutation based on a given name then feeds both back as a singale
     * variable which can be split with an explode "|" function
     */

        protected static $maleNameWithSalutation = array(
        '|{{englishNameMale}} {{chineseFamilyName}}',
        '{{englishNameMale}} |{{chineseFamilyName}} (formal)',
        '{{englishNameMale}} |{{chineseFamilyName}} (formal)',
        '|{{englishNameMale}} {{chineseFamilyName}}',
        '{{englishNameMale}} |{{chineseFamilyName}} (formal)',
        '{{englishNameMale}} |{{chineseFamilyName}} (formal)',
        '{{englishNameMale}} |{{chineseFamilyName}} (formal)',
        '{{chineseFamilyName}} {{chineseNameMale}} |{{englishNameMale}}',
        '|{{englishNameMale}} {{chineseFamilyName}} {{chineseNameMale}}',
        '|{{chineseFamilyName}} {{chineseNameMale}} (formal)',
        '|{{malayNameMale}} {{malayFamilyName}}',
        '{{englishNameMale}} |{{mixedfamilyName}} (formal)',
    );

   
        protected static $femaleNameWithSalutation = array(
        '|{{englishNameFemale}} {{chineseFamilyName}}',
        '{{englishNameFemale}} |{{chineseFamilyName}} (formal)',
        '{{englishNameFemale}} |{{chineseFamilyName}} (formal)',
        '|{{englishNameFemale}} {{chineseFamilyName}}',
        '{{englishNameFemale}} |{{chineseFamilyName}} (formal)',
        '{{englishNameFemale}} |{{chineseFamilyName}} (formal)',
        '{{englishNameFemale}} |{{chineseFamilyName}} (formal)',
        '{{chineseFamilyName}} {{chineseNameFemale}} |{{englishNameFemale}}',
        '|{{englishNameFemale}} {{chineseFamilyName}} {{chineseNameFemale}}',
        '|{{chineseFamilyName}} {{chineseNameMale}} (formal)',
        '|{{malayNameFemale}} {{malayFamilyName}}',
        '{{englishNameFemale}} |{{mixedfamilyName}} (formal)',
    );     

     public function nameWithSalutation($gender='female')
    {
        if($gender=='female'){
        $input =  static::randomElement(static::$femaleNameWithSalutation);
        } else {
        $input =  static::randomElement(static::$maleNameWithSalutation);

        }
        $haystack = $this->generator->parse($input);

        // determine if there will be a formal or informal greeting
        
        $needle = "(formal)";
        if(strpos($haystack, $needle))
            {
                    if($gender=='female'){
                    $prefix = static::randomElement(static::$titleFemale)." "; 
                    } else {
                    $prefix = static::randomElement(static::$titleMale)." ";
                    }
  
            } else {
                $prefix = ""; 
            }
        
        $haystack = str_replace ($needle,"",$haystack);
        $start = strpos($haystack, "|"); 
        $end =  strpos($haystack, " ", $start);
        $salutation = trim(substr($haystack, $start+1, $start+$end));
        $fullname = trim(str_replace ("|","",$haystack));
        $format = $fullname."|".$prefix.$salutation;

        return $this->generator->parse($format);
     }   


    protected static $localFreeEmailDomain = array(
     'gmail.com', 'gmail.com', 'gmail.com', 'gmail.com',
     'gmail.com', 'gmail.com', 'gmail.com', 'gmail.com',
     'hotmail.com', 'yahoo.com.sg', 'hotmail.com', 'yahoo.com.sg',
    );

    protected static $localEmailDomain = array(
     'signet.com.sg', 'mccy.gov.sg', 'nus.edu.sg', 'ntu.edu.sg', 'a-star.edu.sg',
    );

    public function localFreeEmailDomain()
    {
        $format = static::randomElement(static::$localFreeEmailDomain);
        return $this->generator->parse($format);
    }

    public function localEmailDomain()
    {
        $format = static::randomElement(static::$localEmailDomain);
        return $this->generator->parse($format);
    }
    
}
