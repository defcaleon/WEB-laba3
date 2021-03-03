    <?php
    try {
    	
    	if($_POST["text"]==null){
    		throw new Exception('empty text');
    	}

        $currDate= new DateTime('now');
        $date= new DateTime($_POST["text"]);
        $age = date_diff($currDate,$date);
        echo $age->format('%y years %m month, %d days');

    }
    catch (Exception $e) {
    	echo $e->getMessage();
    }

    ?>