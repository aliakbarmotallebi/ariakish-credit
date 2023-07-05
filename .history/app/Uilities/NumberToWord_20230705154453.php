<?php  namespace App\Uilities;

class NumberToWord {

    public static function convter($num) 
    {
        $num        = (string)$num;
        $one = array('','یک','دو','سه','چهار','پنج','شش','هفت','هشت','نه');
        $ten = array('','','بیست','سی','چهل','پنجاه','شصت','هفتاد','هشتاد','نود',);
        $hundred = array('','یکصد','دویست','سیصد','چهارصد','پانصد','ششصد','هفتصد','هشتصد','نهصد',);
        $categories = array('','هزار','میلیون','میلیارد','بیلیون','بیلیارد','تریلیون','تریلیارد','کوآدریلیون',);
        $exceptions = array('ده','یازده','دوازده','سیزده','چهارده','پانزده','شانزده','هفده','هجده','نوزده',);
        $out = '';
        $j   = 0;
        $cnt = strlen($num);
        if($cnt==1)
        return $one[$num];
        for($i=--$cnt;$i>=0;$i-=3){
            $add = '';
            $i1 = $num[$i];
            $i2 = isset($num[$i-1]) ? $num[$i-1] : '';
            $i3 = isset($num[$i-2]) ? $num[$i-2] : '';
            if(!empty($i3))
            $add .= $hundred[$i3].' و ';
            if($i2>1)
            $add .= $ten[$i2].' و '.$one[$i1].' ';
            elseif($i2==1)
            $add .= $exceptions[$i1].' ';
            else
            $add .= $one[$i1].' ';
            if($add!=' ')
            $add .= $categories[$j++].' و ';
            else
            $j++;
            $out = $add.$out;
        }
        return mb_substr($out,0,-4);
    }
}