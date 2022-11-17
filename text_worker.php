
class text_worker
{

    /**
     * generat random string (code)
     * @param int $len string length
     * @return string
     */
 public function gen_code($len=32){
     $letters=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
     $code="";
     $totalletters=count($letters)-1;
     for($i=0;$i<$len;$i++) {
         $t=rand(0,$totalletters);
         $code .= $letters[$t];
     }
     return $code;
 }

    /**
     * slice or devide a text for twits for twitter (can be changed)
     * @param string $string target string.
     * @param int $len string length of each part (default 280)
     * @param string $delic which string should be delicate to separate string.(default whitespace)
     * @return array
     */
    public function twitter_twits(string $string, int $len=280, string $delic=" "){
        $array=explode($delic,$string);
        $i=0;
        $result=[];
        $result[$i]="";
        foreach ($array as $item){
            if(mb_strlen($result[$i].$delic.$item)>$len)
                $i++;
            $result[$i].=$item.$delic;
        }
        return $result;
 }
 public function simpletext(string $string){
     $item_desc = strip_tags($string);
     return html_entity_decode($item_desc);
 }
}
