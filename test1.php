
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test program1</title>
    </head>
    <style>

    </style>
    <body>
    <?php
    error_reporting(0);
$List = $search = $select = $result = $select_1 = $select_2= $select_3= $position="";

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if(isset($_POST['List']) && isset($_POST['search']) && isset($_POST['select'])){
    $List = $_POST['List'];
    $search = $_POST['search'];
    $select = $_POST['select'];

    // if($select == "1"){
    // //    function Linear_Search(){
    //     $select_1 = explode(",",$List);
    //     for($i = 0;$i<count($select_1);$i++){

    //         $loop = $select_1[$i];
    //         if($loop == $search){
    //             $position = $loop;
    //         break;
    //         }
    //         else{
    //             $position="error";
    //         }
    //     }
    // //    echo $position;
    // //    }
       
    // }


}
}
?>
        <br>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            List:<input type="text" name="List" value="<?php echo $List?>">
            <br>
            ค้นหา:<input type="text" name="search" value="<?php echo $search?>">
            <button type="submit" >ค้นหา</button>
            <br>
            <h1>ประเภทการค้นหา</h1>
            <br>
            <select name="select" id="select">
                <?php if(isset($select) && $select == "1"){?>
                <option value="1" selected>Linear Search</option>
                <option value="2">Binary Search</option>
                <option value="3"> Bubble Search</option>
                <?php } elseif(isset($select) && $select == "2"){?>
                <option value="1" >Linear Search</option>
                <option value="2" selected>Binary Search</option>
                <option value="3"> Bubble Search</option>
                <?php } elseif(isset($select) && $select == "3"){?>
                <option value="1" >Linear Search</option>
                <option value="2">Binary Search</option>
                <option value="3" selected> Bubble Search</option>
                <?php } else { ?>
                <option value="1">Linear Search</option>
                <option value="2">Binary Search</option>
                <option value="3"> Bubble Search</option>
                <?php } ?>
            </select>
        
        <br>
        <h1>ผลลัพธ์:</h1>
                <textarea rows="10" cols="50" id="sum" type="text" name="result" ><?php 
                echo "List:".$List."\n";
                echo "Search:".$search."\n";
                echo "Result::\n";

                if($select=="1"){
                $select_1 = explode(",",$List);
                $out="";
                for($i = 0;$i<count($select_1);$i++){

                    $loop = $select_1[$i];
                    if(($loop!=$search)&&($i<count($select_1))){
                    echo "Round:".$i."===>".$search."!=".$loop."\n";
                    $out++;
                }

                    elseif(($loop==$search)&&($loop!="")){
                        echo "Round:".$i."===>".$search."!=".$loop."Found!!"."\n";
                        break;
                    }  

                }if($out==count($select_1)){
                    echo "not found";

                }
            }    if($select == "2"){
                    $arr = explode(",",$List);
                    $x=$search;
                    function binarySearch(Array $arr, $x) 
                    { 
                        // check for empty array 
                        if (count($arr) === 0) return false; 
                        $low = 0; 
                        $high = count($arr) - 1; 
                        echo "low:".$low."\n";
                        echo "high:".$high."\n";
                        while ($low <= $high) { 
                            
                            // compute middle index 
                            $mid = floor(($low + $high) / 2); 
                            echo "Point:".(floor(($low + $high) / 2)+1)."\n"; 
                            // element found at mid 
                            if($arr[$mid] == $x) { 
                                return true;
                                //return $mid; 
                            } 
                    
                            if ($x < $arr[$mid]) { 
                                // search the left side of the array 
                                $high = $mid -1; 
                            } 
                            else { 
                                // search the right side of the array 
                                $low = $mid + 1; 
                            } 
                        } 
                        
                        // If we reach here element x doesnt exist 
                        return false; 
                    } 

                    if(binarySearch($arr, $search) == true) { 
                        echo $search." Found"; 
                    } 
                    else { 
                        echo $search." Not Found"; 
                    }
 
                
                }
                if($select == "3"){
                    $arr = explode(",",$List);

                    function bubbleSort(&$arr) 
                    { 
                        $n = sizeof($arr); 
                      
                        // Traverse through all array elements 
                        for($i = 0; $i < $n; $i++)  
                        { 
                            // Last i elements are already in place 
                            for ($j = 0; $j < $n - $i - 1; $j++)  
                            { 
                                // traverse the array from 0 to n-i-1 
                                // Swap if the element found is greater 
                                // than the next element 
                                if ($arr[$j] > $arr[$j+1]) 
                                { 
                                    $t = $arr[$j]; 
                                    $arr[$j] = $arr[$j+1]; 
                                    $arr[$j+1] = $t; 
                                } 
                            } 
                        } 
                    } 
                      
                    // Driver code to test above 
                     
                      
                    $len = sizeof($arr); 
                    bubbleSort($arr); 
                      
                    echo "Sorted array : \n"; 
                      
                    for ($i = 0; $i < $len; $i++) 
                        echo $arr[$i]." "; 


                        $out="";
                        for($i = 0;$i<count($arr);$i++){
        
                            $loop = $arr[$i];
                            if(($loop!=$search)&&($i<count($arr))){
                            echo "\nRound:".$i."===>".$search."!=".$loop."\n";
                            $out++;
                        }
        
                            elseif(($loop==$search)&&($loop!="")){
                                echo "Round:".$i."===>".$search."!=".$loop."Found!!"."\n";
                                break;
                            }  
        
                        }if($out==count($arr)){
                            echo "not found";
        
                        }
                }


                ?></textarea>
        </form>
    </body>
</html>

