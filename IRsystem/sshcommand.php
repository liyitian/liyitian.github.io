<?php
	$searchword=$_REQUEST["q"];
	//if ($searchword!=""){
	    set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
	    include('Net/SSH2.php');

	    $ssh = new Net_SSH2('newton.cs.clemson.edu');
	    if (!$ssh->login('yitianl', 'Lyt.0504.')) {
	        exit('Login Failed');
	    }
	    //$result=$ssh->read();
	    // $ssh->write("rm -f 8470/8470-final/project1/result.log\n");
	    // $ssh->read();
	    $search='cd 8470/8470-final/project1 && spark-submit-web ' . $searchword ;
	    echo $search;
	    $ssh->exec($search);
	    // $ssh->read();
	    // $ssh->write("cat output/bm25result/rankSearchResult/part-00000 \n");
	    // $ssh->read();
	    echo $ssh->exec('cat /home/yitianl/8470/8470-final/project1/output/bm25result/rankSearchResult/part-00000');
	    // $ssh->exec('rm -f 8470/8470-final/project1/result.log');
	    // $ssh->exec('cd 8470/8470-final/project1 && spark-submit-web RankSearch  {$searchword} > result.log ');
	    //sleep(10);
	    //echo $result = $ssh->exec('cat /home/yitianl/8470/8470-final/project1/result.log');
	   	//echo $ssh->exec('cat /home/yitianl/8470/8470-final/project1/output/bm25result/rankSearchResult/part-00000');
	   	
	//}
?>