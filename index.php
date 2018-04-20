<!DOCTYPE html>
<html>
    
    <head>
    
        <title>iSLR</title>
        <link rel = "stylesheet" type = "text/css" href= "style.css">
        
    </head>
    
    
    <body>
        
        <div class="vertical-line1"></div>
        
        <div class="vertical-line2"></div>
        
        <h2 align = "center"> iSLR </h2>
        
        <div class = "main-content">
            
            <form name ="form1" method = "post" action="index.php">
                
                <p align> Enter the phrase here: </p>
                
                <input type = "text" name = "phrase" value ="">
                
                <input type = "submit" name = "search" value = "Search for Articles">
                
                <?php
                        
                    function swap(&$a, &$b)
                    {
                        $c = $a;
                        $a = $b;
                        $b = $c;
                    }
                
                    function permute(&$array, $i, $n)
                    {
                        if($i == $n)
                        {
                            for($j = 0; $j < $n; $j++)
                            {
                                echo $array[$j], ' ';
                            }
                            echo "<br>";
                            return;
                        }
                        for($j = $i; $j < $n; $j++)
                        {
                            swap($array[$i], $array[$j]);
                            permute($array, $i + 1, $n);
                            swap($array[$i], $array[$j]);
                        }
                    }
                    
                    # separate the keywords based on syntax rules, function returns array of strings
                    function separate($keywords)
                    {
                        $keyword = '';
                        $array = array();
                        $n = strlen($keywords);
                        $i = 0;
                        
                        while($i < $n)
                        {
                            if($keywords[$i] == ' ') # separator, not important for query
                            {
                                $i++;
                                continue;
                            }
                            
                            # next keyword is located between indices i and j
                            $j = $i;
                            while($j < $n)
                            {
                                if($keywords[$j] == '"') # by syntax rules this sign merges more keywords into one 
                                {
                                    if($i != $j) # end of the group of keywords
                                    {
                                        $j++;
                                        break;
                                    }
                                    else 
                                    {
                                        # don't include it in keyword
                                        $j++;
                                        continue;
                                    }
                                }
                                else if($keywords[$j] == ' ')  
                                {
                                    # if there is no syntax for merged keywords this is the end of keyword
                                    if($keywords[$i] != '"') break;
                                }
                                $keyword .= $keywords[$j];
                                $j++;
                            }
                            
                            # push the keyword to array and make it suitable for next iteration
                            array_push($array, $keyword);
                            $keyword = "";
                            $i = $j;
                                
                        }
                        return $array;
                        
                    }
                    
                
                    # sintax rules:
                    # using " " to merge more keywords into one
                    # assigning @ to words which can be replaced by empty string (not necessarily included in query) 
                      
                    if(isset ($_POST["search"])) {
                
                        $keywords = $_POST["phrase"];
                        
                        $array = separate($keywords);
                        
                        echo "<br>";
                        # find all possible permutations of array
                        sort($array);
                        permute($array, 0, count($array));
                    
                    }
                        
                ?>
                
            </form>
            
        </div>
        
        <h2 align = "center"> Found Articles: </h2> 
        
    </body>
    
</html>