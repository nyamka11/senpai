<?php
    /* src/View/Helper/globalHelper.php */
    namespace App\View\Helper;

    use Cake\View\Helper;

    class globalHelper extends Helper  {
        public function getTimeAgo($time_ago)  {

            $t = explode(" ",$time_ago);
            $y = explode(".",$t[0]);
            $d = explode(":",$t[1]);
    
            $time_ago = mktime($d[0], $d[1], 0, $y[1], $y[2], $y[0]);
            $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
            $time  = time() - $time_ago;
    
            switch($time):
            // seconds
            case $time <= 60;
            return 'дөнгөж сая';
            // minutes
            case $time >= 60 && $time < 3600;
            return (round($time/60) == 1) ? '1 минутын өмнө' : round($time/60).' минутын өмнө';
            // hours
            case $time >= 3600 && $time < 86400;
            return (round($time/3600) == 1) ? '1 цагийн өмнө' : round($time/3600).' цагийн өмнө';
            // days
            case $time >= 86400 && $time < 604800;
            return (round($time/86400) == 1) ? '1 өдрийн өмнө' : round($time/86400).' өдрийн өмнө';
            // weeks
            case $time >= 604800 && $time < 2600640;
            return (round($time/604800) == 1) ? '7 хоногийн өмнө' : round($time/604800).' долоо хоногийн өмнө';
            // months
            case $time >= 2600640 && $time < 31207680;
            return (round($time/2600640) == 1) ? '1 сарын өмнө' : round($time/2600640).' сарын өмнө';
            // years
            case $time >= 31207680;
            return (round($time/31207680) == 1) ? '1 жилийн өмнө' : round($time/31207680).' жилийн өмнө' ;
    
            endswitch;
        }

    }
?>