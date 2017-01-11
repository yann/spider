<?php
/**
 * Created by yann
 * Date: 2016/12/25
 * Time: 9:35
 */
header("Content-type: text/html; charset=utf-8");
require_once 'Snoopy.class.php';
class cqupt{
    public function __construct()
    {
        $this->run();
    }
    public function run()
    {
        $snoopy = new Snoopy();
        $url = "http://job.cqupt.edu.cn/main/getClnd/2016-11-5";
       // $url = "https://movie.douban.com/j/search_subjects?type=movie&tag=可播放&sort=recommend&page_limit=20&page_start=0";
        $snoopy->fetch($url);
        $str =  $snoopy->results;
        $str = trim($str, "\xEF\xBB\xBF");
        $result = json_decode($str,true);
        print_r($result);
    }
    public function format_json($str)
    {

    }
}
new cqupt();