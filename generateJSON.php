<?php


try{
    $conn = new PDO("mysql:host=localhost;dbname=jobportal","root","");
}catch(PDOException $pe){
    die('Connection error, because: ' .$pe->getMessage());
}

function daj_sve_poslove()
{
    try{
        include 'connect.php';
        include 'authorizeEmployer.php';
        print_r("ID:");
        print_r($eid);
        $poslovi = array();
        $sql = "SELECT p.id, p.date,p.name, p.category, p.minexp,p.desc,p.salary, p.industry,p.role, p.employmentType, p.status, e.name as emp FROM post p JOIN employer e on p.eid = e.id where p.eid = $eid";
        $bindings = array();
        global $conn;
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $res = $conn->prepare($sql);
        if(!$res)
        {
            echo "\nPDO::errorInfo():\n";
            print_r($res->errorInfo());
        }
        $res->execute($bindings);
        $res->setFetchMode(PDO::FETCH_ASSOC);

        if($res->rowCount() > 0)
        {
            while($result = $res->fetch())
            {
                $poslovi[] = $result;
            }

            return $poslovi;
        }else{
            return false;
        }


    }catch (PDOException $e)
    {
        print_r($e);
    }

}

$svi_poslovi = daj_sve_poslove();

	if ($svi_poslovi) {
		$JSONdata = '{"poslovi":';

		$JSONdata .= json_encode ($svi_poslovi);
		$JSONdata .= '}';
	}else {
		$JSONdata = '{"error":"No results"}';
	}

$JSONfile = fopen('json/JSONdata.json', 'w');
fwrite($JSONfile, $JSONdata);
fclose($JSONfile);

?>