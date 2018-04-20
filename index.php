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
                
                <input type = "submit" name = "continue" value = "Continue">
                
            </form>
            
        </div>
        
        <div class = "select-box">
            
                <select name = "synonym">

                     <?php
                     
                        if(isset ($_POST["continue"])) {
                
                            $keywords = $_POST["phrase"];
                            
                            # get all words from phrase
                            $separator = ' ,.;';
                                
                            $word = strtok($keywords, $separator);

                            while ($word !== false) {        
                                if($word[0] == '@') {
                        
                                    echo "<option value = $word> $word ";  # only words starting with '@' goes to selection box 
                                }
                                $word = strtok($separator);
                            }
                                        
                        }
                        
                     ?>

            </select>
            
            <select name = relevance>
                
                <option value = 1> 1
                <option value = 2> 2
                <option value = 3> 3
                <option value = 4> 4
                <option value = 5> 5
                <option value = 6> 6
                <option value = 7> 7
            
            </select>
            
            <input type = "submit" name = "confirm" value = "Confirm">
        
        </div>
        
        <div class = "start-search">
            
            <input type = "submit" name = "search" value = "Search for Articles">
    
        </div>
        
        <h2 align = "center"> Found Articles: </h2> 
        
    </body>
    
</html>