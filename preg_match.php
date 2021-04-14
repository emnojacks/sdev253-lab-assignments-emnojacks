   <?php
   //Emily Jackson
   //April 3 2021
   //M02 Lab Assignment String & Regular Expressions
   
   /*
   //EXAMPLES
$userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";
        
$line = "Vim is the greatest word processor ever created!";
if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";
   
$domain = "http://www.sdev253.net/home.html";
if (preg_match("/\bsdev253.net\b/i", $domain)) print "Domain name is ";
          

$domainname = "<a>http://www.sdev253.net/home.html</a>";
preg_match_all ("/<a>(.*)<\/a>/U", $domainname, $pat_array);
echo $pat_array[0];
echo "<br>";
echo "Domain name is:" $pat_array[1];
echo "<br>";
       


   $url = "<a>http://www.sdev253.net/home.html</a>";
   // break $url down into distinct pieces:
   // "http://www", "sdev253", "net/home", and "html"
   // preg_match_all(pattern, input, matches, flags, offset)
   $urlparts = preg_match_all("/<a>(.*)<\/a>/U", $url, $matches_array);
   //$urlparts = preg_match_all("^(http://www)\.(sdev253)\.(net/home)\.(html)", $url, $matches_array);

   echo $matches_array[0];     // outputs the entire string "http://www.sdev253.net/home.html"
   echo "<br>";
   echo $matches_array[1];     // outputs "http://www"
   echo "<br>";

   echo $matches_array[2];     // outputs "sdev253"
   echo "<br>";
   echo $matches_array[3];     // outputs "net/home"
   echo "<br>";
   echo $matches_array[3];     // outputs "html"

*/

// simpler way using preg match with no array 
$url = "http://www.sdev253.net/home.html";
if (preg_match("/sdev253/", $url)) {
    echo "<br>";
    echo "domain name is sdev253";
} else {
   echo "<br>";
   echo "No match was found.";
}
?>