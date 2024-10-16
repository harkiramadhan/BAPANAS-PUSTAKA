<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
      
    if ( ! function_exists('tgl_indo'))
    {
        function date_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.' '.$bulan.' '.$tahun;
        }
    }

    if( ! function_exists('pekan') ){
        function pekan($date){
            $pekan = ceil((date("d",strtotime($date)) - date("w",strtotime($date)) - 1) / 7) + 1;
            return $pekan;
        }
    }
      
    if ( ! function_exists('bulan'))
    {
        function bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Januari";
                    break;
                case 2:
                    return "Februari";
                    break;
                case 3:
                    return "Maret";
                    break;
                case 4:
                    return "April";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Juni";
                    break;
                case 7:
                    return "Juli";
                    break;
                case 8:
                    return "Agustus";
                    break;
                case 9:
                    return "September";
                    break;
                case 10:
                    return "Oktober";
                    break;
                case 11:
                    return "November";
                    break;
                case 12:
                    return "Desember";
                    break;
            }
        }
    }
 
    //Format Shortdate
    if ( ! function_exists('shortdate_indo'))
    {
        function shortdate_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = short_bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.'/'.$bulan.'/'.$tahun;
        }
    }
      
    if ( ! function_exists('short_bulan'))
    {
        function short_bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "01";
                    break;
                case 2:
                    return "02";
                    break;
                case 3:
                    return "03";
                    break;
                case 4:
                    return "04";
                    break;
                case 5:
                    return "05";
                    break;
                case 6:
                    return "06";
                    break;
                case 7:
                    return "07";
                    break;
                case 8:
                    return "08";
                    break;
                case 9:
                    return "09";
                    break;
                case 10:
                    return "10";
                    break;
                case 11:
                    return "11";
                    break;
                case 12:
                    return "12";
                    break;
            }
        }
    }
 
    //Format Medium date
    if ( ! function_exists('mediumdate_indo'))
    {
        function mediumdate_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.' '.$bulan.' '.$tahun;
        }
    }

    if ( ! function_exists('mediumdate_indo_notyear'))
    {
        function mediumdate_indo_notyear($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.' '.$bulan;
        }
    }
      
    if ( ! function_exists('medium_bulan'))
    {
        function medium_bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Jan";
                    break;
                case 2:
                    return "Feb";
                    break;
                case 3:
                    return "Mar";
                    break;
                case 4:
                    return "Apr";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Jun";
                    break;
                case 7:
                    return "Jul";
                    break;
                case 8:
                    return "Ags";
                    break;
                case 9:
                    return "Sep";
                    break;
                case 10:
                    return "Okt";
                    break;
                case 11:
                    return "Nov";
                    break;
                case 12:
                    return "Des";
                    break;
            }
        }
    }
     
    //Long date indo Format
    if ( ! function_exists('longdate_indo'))
    {
        function longdate_indo($tanggal)
        {
            $ubah = gmdate($tanggal, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tgl = $pecah[2];
            $bln = $pecah[1];
            $thn = $pecah[0];
            $bulan = bulan($pecah[1]);
      
            $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
            $nama_hari = "";
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jumat";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $nama_hari.', '.$tgl.' '.$bulan.' '.$thn;
        }
    }

    if ( ! function_exists('longdate_indo_notyear'))
    {
        function longdate_indo_notyear($tanggal)
        {
            $ubah = gmdate($tanggal, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tgl = $pecah[2];
            $bln = $pecah[1];
            $thn = $pecah[0];
            $bulan = bulan($pecah[1]);
      
            $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
            $nama_hari = "";
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jumat";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $nama_hari.', '.$tgl.' '.$bulan;
        }
    }

    if(!function_exists('umur')) {
        function umur($date){
            $age = date_diff(date_create($date), date_create('now'))->y;
            return $age;
        }
    }

    if(!function_exists('pekan')){
        function pekan($mulai, $selesai){
            $start = strtotime($mulai);
            $end = strtotime($selesai);
    
            $week = ceil(abs($end - $start) / 60 / 60 / 24 / 7);
            if($week > 0){
                $hasil = $week." Pekan";
            }else{
                $hasil = "-";
            }
    
            return $hasil ;
        }
    }

    if (!function_exists('bulan')) {
        function bulan(){
            $bulan = Date('m');
            switch ($bulan) {
                case 1:
                    $bulan = "Januari";
                    break;
                case 2:
                    $bulan = "Februari";
                    break;
                case 3:
                    $bulan = "Maret";
                    break;
                case 4:
                    $bulan = "April";
                    break;
                case 5:
                    $bulan = "Mei";
                    break;
                case 6:
                    $bulan = "Juni";
                    break;
                case 7:
                    $bulan = "Juli";
                    break;
                case 8:
                    $bulan = "Agustus";
                    break;
                case 9:
                    $bulan = "September";
                    break;
                case 10:
                    $bulan = "Oktober";
                    break;
                case 11:
                    $bulan = "November";
                    break;
                case 12:
                    $bulan = "Desember";
                    break;
                default:
                    $bulan = Date('F');
                    break;
            }
            return $bulan;
        }
    }

    if(!function_exists('hari')){
        function hari($tanggal){
            $ubah = gmdate($tanggal, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tgl = $pecah[2];
            $bln = $pecah[1];
            $thn = $pecah[0];
            $bulan = bulan($pecah[1]);
      
            $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
            $nama_hari = "";
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jum'at";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $nama_hari;
        }
    }

    if(!function_exists('count_days')){
        function count_days($awal, $akhir){
            $date1=date_create($awal);
            $date2=date_create($akhir);
            $diff=date_diff($date1,$date2);
            return $diff->format("%a") + 1;
        }
    }

    function pekanan($date){
        $tanggal = date('d', strtotime($date));
        if($tanggal >= "1" && $tanggal <= "7"){
            $pekan = 1;
        }elseif($tanggal >= "8" && $tanggal <= "14"){
            $pekan = 2;
        }elseif($tanggal >= "15" && $tanggal <= "21"){
            $pekan = 3;
        }elseif($tanggal >= "22" && $tanggal <= "31"){
            $pekan = 4;
        }
        
        return $pekan;
    }

    function numberToRoman($num){ 
        // Be sure to convert the given parameter into an integer
        $n = intval($num);
        $result = ''; 
    
        // Declare a lookup array that we will use to traverse the number: 
        $lookup = array(
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 
            'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 
            'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        ); 
    
        foreach ($lookup as $roman => $value)  
        {
            // Look for number of matches
            $matches = intval($n / $value); 
    
            // Concatenate characters
            $result .= str_repeat($roman, $matches); 
    
            // Substract that from the number 
            $n = $n % $value; 
        } 

        return $result; 
    } 

    function rangeGroupId(){
        return range(1, 31);
    }

    function colorCategory($badge){
        if($badge == "badge-default"){
            $color = "rgba(3, 66, 176, 0.86)";
        }elseif($badge == "badge-primary"){
            $color = "rgba(134, 150, 244, 0.86)";
        }elseif($badge == "badge-secondary"){
            $color = "rgba(115, 115, 115, 0.86)";
        }elseif($badge == "badge-info"){
            $color = "rgba(11, 140, 162, 0.94)";
        }elseif($badge == "badge-success"){
            $color = "rgba(100, 221, 169, 0.86)";
        }elseif($badge == "badge-danger"){
            $color = "rgba(249, 148, 169, 0.86)";
        }elseif($badge == "badge-warning"){
            $color = "rgba(252, 107, 74, 0.86)";
        }else{
            $color = 'rgba(0, 71, 194, 0.86)';
        }

        return $color;
    }

    function _createOxfordCommaList($items) {
        if (count($items) == 1) {
            return array_pop($items);
        }elseif (count($items) == 2) {
            return implode(" dan ", $items);
        }else {
            $last = array_pop($items);
            $list = implode(", ", $items);
            $list .= ", dan " . $last;
            return $list;
        }
    }

    function semesterString($semester){
        if($semester == 1){
            return "1 (Gasal)";
        }else{
            return "2 (Genap)";
        }
    }

    function generate_dates($month, $year) {
        $dates = array();
        $date = new DateTime("$year-$month-01");
        $days_in_month = $date->format('t');
        for ($day = 1; $day <= $days_in_month; $day++) {
            $date_string = $date->format('Y-m-d');
            $dates[] = $date_string;
            $date->modify('+1 day');
        }

        return $dates;
    }

    function rupiah($angka){
        $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }