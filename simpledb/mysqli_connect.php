 <?php
    //defining constants
    Define ('DB_USER', 'horatio');
    Define ('DB_PASSWORD', 'DingDong9340');
    Define ('DB_HOST', 'localhost:3307');
    Define ('DB_NAME', 'simpledb');

    //assigning db connection to a variable called $dbcon
    try{
        $dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        mysqli_set_charset($dbcon,'utf8');
    } catch(Exception $e){
        print "The system is busy try again later";
        $e->getMessage();
    } catch(Error $e){
        print "The system is busy try again later";
        $e->getMessage();
    }

?>