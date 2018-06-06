<!DOCTYPE html>
<html>
    
    <head>
    
        <title>iSLR</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
         <style>
             .navbar {
                    margin-bottom: 0;
                    border-radius: 0;
                    background-color: black;
                    color: #FFF;
                    padding: 1% 0;
                    font-size: 1.2em;
                    border: 0;
             }
             
             .navbar-brand {
                 float: left;
                 min-height: 45px;
                 padding: 0 15px 5px;
             }
             
             .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus,  
             .navbar-inverse .navbar-nav .active a:hover {
                 color: #FFF;
                 background-color: black;
             }
             
             .item-active, .item {
                 background-color: black;
             }
             
             .slide {
                 margin-left: auto;
                 margin-right: auto;
             }
             
             .main-content {
                 
                 font-family: sans-serif;
                 padding-top: 2.5%;
                 padding-bottom: 20%;
                 margin-left: 35px;
                 margin-right: 35px;
                 background-color: white;
                 text-align: center;
             }
             
             .black-border {
                 background-color: black;
                 padding-top: 35px;
                 padding-bottom: 35px;
             }
             
             .container-fluid-text-center {
                 background-color: black;
                 text-align: center;
                 color: #FFF;
                 padding-bottom: 25px;
             }
             
             .main-title {
                 margin-bottom: 30px;
             }
             
             .button1 {
                 border-radius: 4px;
                 margin-bottom: 35px;
             }
             
             .identifier{
                 font-family: sans-serif;
                 margin: 0;
                 margin-left: 25%;
                 margin-right: 25%;
                 text-align: left;
             }
             
             .table-fill {
              background: white;
              border-radius:3px;
              border-collapse: collapse;
              height: 320px;
              margin: auto;
              max-width: 600px;
              padding:5px;
              width: 100%;
              box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
              animation: float 5s infinite;
            }

            th {
              color:#D5DDE5;;
              background:#1b1e24;
              border-bottom:4px solid #9ea7af;
              border-right: 1px solid #343a45;
              font-size:14px;
              font-weight: 100;
              padding:24px;
              text-align:left;
              text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
              vertical-align:middle;
            }

            th:first-child {
              border-top-left-radius:3px;
            }

            th:last-child {
              border-top-right-radius:3px;
              border-right:none;
            }

            tr {
              border-top: 1px solid #C1C3D1;
              border-bottom: 1px solid #C1C3D1;
              color:#666B85;
              font-size:10px;
              font-weight:normal;
              text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
            }

            tr:hover td {
              background:#4E5066;
              color:#FFFFFF;
              border-top: 1px solid #22262e;
            }

            tr:first-child {
              border-top:none;
            }

            tr:last-child {
              border-bottom:none;
            }

            tr:nth-child(odd) td {
              background:#EBEBEB;
            }

            tr:nth-child(odd):hover td {
              background:#4E5066;
            }

            tr:last-child td:first-child {
              border-bottom-left-radius:3px;
            }

            tr:last-child td:last-child {
              border-bottom-right-radius:3px;
            }

            td {
              background:#FFFFFF;
              padding:20px;
              text-align:left;
              vertical-align:middle;
              font-weight:300;
              font-size:12px;
              text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
              border-right: 1px solid #C1C3D1;
            }

            td:last-child {
              border-right: 0px;
            }

            th.text-left {
              text-align: left;
            }

            th.text-center {
              text-align: center;
            }

            th.text-right {
              text-align: right;
            }

            td.text-left {
              text-align: left;
            }

            td.text-center {
              text-align: center;
            }

            td.text-right {
              text-align: right;
            }
             
            .check-box {
                text-align: center;
                word-spacing: 5px;
                margin-bottom: 0;
             }
             
            .button2 {
                
                 display: inline-block;
                 padding: 0.35em 1.2em;
                 border: 0.1em solid #FFFFFF;
                 margin: 0 0.3em 0.3em 0;
                 border-radius: 0.12em;
                 box-sizing: border-box;
                 text-decoration: none;
                 font-family: 'Roboto' ,sans-serif;
                 font-weight: 300;
                 color: #FFFFFF;
                 text-align: center;
                 transition: all 0.2s;
            }
            
             .button2:hover {
                 
                 color: darkgray;
                 background-color: #FFFFFF;
            }
             
            @media all and (max-width:30em) {
                
                 .button2 {
                     
                    display:block;
                    margin:0.4em auto;
                 }
                
            }
                
        </style>
        
    </head>
    
    
    <body>
        
        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
                        <span class = "icon-bar"> </span>
                        <span class = "icon-bar"> </span>
                        <span class = "icon-bar"> </span>
                    </button>
                    <a class = "navbar-brand" href = "index.php"> <img height= 100% src = "img/innopolis-logo.png"></a>
                </div>
                <div class = "collapse navbar-collapse" id = "myNavbar">
                    <ul class = "nav navbar-nav navbar-right">
                        <li class = "active"> <a href="index.php"> Home </a> </li>
                        <li> <a href="about.html"> About </a> </li>
                        <li> <a href="contact.html"> Contact </a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id = "myCarousel" class = "carousel slide" data-ride = "carousel">
            
                <ol class = "carousel-indicators">
                    <li data-target = "#myCarousel" data-slide-to = "0" class = "active"> </li>
                    <li data-target = "#myCarousel" data-slide-to = "1"> </li>
                    <li data-target = "#myCarousel" data-slide-to = "2"> </li>
                </ol>
            
                <div class = "carousel-inner" role = "listbox">
                    <div class = "item active">
                        <img class = "slide" src = "img/first.jpg" style="margin:0; background-size:cover; height: 325px; width:100%;">
                    </div>
                    <div class = "item">
                        <img class = "slide" src = "img/second.jpg" style="margin:0; background-size:cover; height: 325px; width:100%;">
                    </div>
                    <div class = "item">
                        <img class = "slide" src = "img/business-people-working-on-computer-web-header.jpg" 
                             style="margin:0; background-size:cover; height: 325px; width:100%;">
                    </div>
                </div>
                <a class = "left carousel-control" href = "#myCarousel" role = "button" data-slide = "prev">
                    <span class = "glyphicon glyphicon-chevron-left" aris-hidden = "true"> </span>
                    <span class = "sr-only"> Previous </span>
                </a>
                <a class = "right carousel-control" href = "#myCarousel" role = "button" data-slide = "next">
                    <span class = "glyphicon glyphicon-chevron-right" aris-hidden = "true"> </span>
                    <span class = "sr-only"> Next </span>
                </a>
        </div>
        
        <div class = "black-border">
            
            <div class = "main-content">

                <form name ="form1" method = "post" action="index.php">

                    <h1 class = "main-title"> <b> iSLR </b> </h1>

                    <input type = "text" name = "phrase" value = "<?php echo isset($_POST['test']) ? $_POST['test'] : ''; ?>">

                    <button class = "button1" type = "submit" name = "search" value = ""> 
                        
                        <img src="img/Button_15-512.png" width = "20px" height= "20px"> 
                    
                    </button>

                    <?php
                        
                        error_reporting(E_ALL ^ E_NOTICE); 
                        ob_flush();
                        ob_clean();

                    
                        function swap(&$a, &$b)
                        {
                            $c = $a;
                            $a = $b;
                            $b = $c;
                        }
                        
                        $doi_list = array();
                        $title_list = array();
                        $author_list = array();
                        $publication_list = array();
                        
                        # find all permutations of given keywords, search for them in title and abstract of all articles in the db 
                        function permute(&$array, $i, $n)
                        {
                            if($i == $n)
                            {
                                # we need expression appropriate for LIKE clause
                                $like = "%";
                                for($j = 0; $j < $n; $j++)
                                {
                                    $temp = $array[$j];
                                    $like = $like . str_replace(' ', '%', $temp, $count[$temp]);
                                    $like = $like . "%";
                                }
                                
                                $con=new mysqli("localhost","root","", "islr");
                                $query = "SELECT doi, title, author, publication
                                          FROM papers
                                          WHERE title LIKE '".$like."' OR abstract LIKE '".$like."'";
                                
                                $res = mysqli_query($con, $query);
                                
                                if($res)
                                {
                                    while($row = mysqli_fetch_array($res))
                                    {
                                        if(array_search($row[0], $GLOBALS['doi_list']) != NULL) continue; # paper already printed
                                        
                                        array_push($GLOBALS['doi_list'], $row[0]); 
                                        array_push($GLOBALS['title_list'], $row[1]);
                                        array_push($GLOBALS['author_list'], $row[2]);
                                        array_push($GLOBALS['publication_list'], $row[3]);
                                    }
                                }
                                return;
                            }
                            
                            for($j = $i; $j < $n; $j++)
                            {
                                swap($array[$i], $array[$j]);
                                permute($array, $i + 1, $n);
                                swap($array[$i], $array[$j]);
                            }
                        }
                    
                        
                        function Search($array)
                        {   
                            sort($array);
                            permute($array, 0, count($array));
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
                                if($keywords[$i] == ' ')  # separator, not important for query
                                {
                                    $i++;
                                    continue;
                                }

                                # next keyword is located between indices i and j
                                $j = $i;
                                while($j < $n)
                                {
                                    if($keywords[$j] == '"')  # by syntax rules this sign merges more keywords into one 
                                    {
                                        if($i != $j)  # end of the group of keywords
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
                        
                    
                        # store individual article into data base
                        function store($doi, $title, $author, $publication, $abstract)
                        {
                            $con=new mysqli("localhost","root","", "islr");
                            $query = "INSERT INTO papers
                                      VALUES ('$doi', '$title', '$author', '$publication', '$abstract')";   
                            $con->query($query);
                        }
                    
                    
                        # makes request and stores results in the data base 
                        function XploreAPI($query)
                        {
                            $url = "http://ieeexploreapi.ieee.org/api/v1/search/articles?apikey=456f9m7nsgtr8vdrs8aapyxx&format=json&max_records=25&start_record=1&sort_order=asc&sort_field=publication_title&article_title=" .$query. "&abstract=" .$query;
                            
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $result = curl_exec($ch);
                            curl_close($ch);

                            $obj = json_decode($result);
                            $n = $obj->total_records;
                            
                            # find all articles
                            for($i = 0; $i < $n; $i++)
                            {
                                $title = $obj->articles[$i]->title;
                                $author = $obj->articles[$i]->authors->authors[0]->full_name;
                                $conference = $obj->articles[$i]->publication_title;
                                $abstract = $obj->articles[$i]->abstract;
                                $doi = $obj->articles[$i]->doi;
                                # echo($title." <br> ".$author." <br> ".$conference." <br> ".$abstract." <br> ".$doi." <br> <br> ");
                                store($doi, $title, $author, $conference, $abstract);
                            }
                        }
                        
                    
                        function SpringerAPI($query)
                        {
                            $url = "http://api.springer.com/metadata/json?api_key=ac2cc2740c58bf970ca18f82fc874f69&q=" . $query. "&s=1&p=25";
                            
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $result = curl_exec($ch);
                            curl_close($ch);

                            $obj = json_decode($result);
                            
                            $n = $obj->result[0]->recordsDisplayed;
                            
                            for($i = 0; $i < $n; $i++)
                            {
                                $title = $obj->records[$i]->title;
                                $author = $obj->records[$i]->creators[0]->creator;
                                $publication = $obj->records[$i]->publicationName;
                                $abstract = $obj->records[$i]->abstract;
                                $doi = $obj->records[$i]->doi;
                                # echo($title." <br> ".$author." <br> ".$publication." <br> ".$abstract." <br> ".$doi." <br> <br> ");
                                store($doi, $title, $author, $publication, $abstract);
                            }
                        }
                    
                        
                        function ACM($query)
                        {
                             $url = "https://dl.acm.org/exportformats_search.cfm?query=".$query."&filtered=&within=owners%2Eowner%3DHOSTED&dte=&bfr=&srt=%5Fscore&expformat=endnote";
                            
                            $curl = curl_init($url);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            $data = curl_exec($curl);
                            curl_close($curl);
                            
                            $n = strlen($data); 
                            $title = "";
                            $author = "";
                            $publication = "";
                            $doi = "";
                            $i = 0;
                            
                            while($i < $n)
                            {
                                $temp = "";
                                $j = $i;
                                while($j < $n)
                                {
                                    $temp = $temp . $data[$j];
                                    $j = $j + 1;
                                    if($data[$j] == '%') break;
                                }
                                $i = $j;
                                
                                if($temp[1] == '0')  # store article in the db and reset 
                                {
                                    if($title != "")
                                    {    
                                        store($doi, $title, $author, $publication, "");
                                    }
                                    $title = "";
                                    $author = "";
                                    $publication = "";
                                    $doi = "";
                                }
                                else if($temp[1] == 'T')  # temp contains title
                                {
                                    $title = $temp;
                                    $title = str_replace("%T", "", $title);
                                }
                                else if($temp[1] == 'A' and $author == "")  # author name in temp
                                {
                                    $author = $temp;
                                    $author = str_replace("%A", "", $author);
                                }
                                else if($temp[1] == 'B')  # conference 
                                {
                                    $publication = $temp;
                                    $publication = str_replace("%B", "", $publication);
                                }
                                else if($temp[1] == 'R')  # doi
                                {
                                    $doi = $temp;
                                    $doi = str_replace("%R", "", $doi);
                                }
                            }
                        }
                    
                    
                        function split_keywords($array)
                        {
                            $n = count($array);
                            $answer = "";
                            for($i = 0; $i < $n; $i++)
                            {
                                $tmp = str_replace(' ', '+', $array[$i], $count[$array[$i]]);
                                $tmp = str_replace('@', '', $tmp, $count[$tmp]);
                                $answer = $answer . $tmp;
                                if($i < $n - 1) $answer = $answer . "+";
                            }
                            return $answer;
                        }
                    
                    
                        # return query format reqiured in ACM Digital Library
                        
                        function ACM_split_keywords($array)
                        {
                            $n = count($array);
                            $answer = "";
                            for($i = 0; $i < $n; $i++)
                            {
                                $tmp = str_replace(' ', '+', $array[$i], $count[$array[$i]]);
                                $tmp = str_replace('@', '', $tmp, $count[$tmp]);
                                $answer = $answer . $tmp;
                                if($i < $n - 1) $answer = $answer . "%20";
                            }
                            return $answer;
                        }
                    
                        
                        function printTable()
                        {
                            $out0 = $GLOBALS['title_list'];
                            $out1 = $GLOBALS['author_list'];
                            $out2 = $GLOBALS['publication_list'];
                            $out3 = $GLOBALS['doi_list'];
                            
                            echo("<table class="."table-fill".">
                                    <thead>
                                        <tr>
                                            <th class="."text-left".">Title</th>
                                            <th class="."text-left".">Author</th>
                                            <th class="."text-left".">Publication</th>
                                            <th class="."text-left".">doi</th>
                                        </tr>
                                    </thead>
                                  <tbody class="."table-hover".">");
        
                            for($i = 0; $i < count($GLOBALS['doi_list']); $i++)
                            {
                                echo("<tr>
                                        <td class="."text-left"."> $out0[$i] </td>
                                        <td class="."text-left"."> $out1[$i] </td>
                                        <td class="."text-left"."> $out2[$i] </td>
                                        <td class="."text-left"."> $out3[$i] </td>
                                    </tr>");
                            }
                            
                             echo("</tbody>
                                </table>");
                        }
                    
                    
                        # returns array of synonyms from most to least significant
                    
                        function synonyms($word)
                        {
                            $url = "https://api.datamuse.com/words?ml=".$word;
                            $curl = curl_init($url);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            $data = curl_exec($curl);
                            curl_close($curl);
                            
                            $answer = array();
                            $i = 1;
                            $n = strlen($data) - 1;
                            
                            while($i < $n)
                            {
                                if($data[$i] != '{') 
                                {
                                    $i = $i + 1;
                                    continue;
                                }
                                
                                $i = $i + 1;
                                $word = "";
                                $flag = true;
                                
                                while($data[$i] != '}')
                                {
                                    if($data[$i] == ',') $flag = false;
                                    if($flag) $word = $word . $data[$i]; 
                                    $i = $i + 1;
                                }
                                
                                # get the exact word we are looking for, insert into $answer list
                                $temp = "";
                                for($j = 8; $j < strlen($word) - 1; $j++)
                                {
                                    $temp = $temp . $word[$j];
                                }
                                array_push($answer, $temp);
                            }
                            return $answer;
                        }

                    
                        function determine_synonyms($array)
                        {
                            echo "<h2> <b> Choose the synonyms </b> </h2> <br>";
                            $n = count($array);
                            echo "<div class = check-box>";
                            echo "<form action = 'index.php' method = 'post'>";
                            for($i = 0; $i < $n; $i++)
                            {
                                echo "<pre>";
                                echo "<h3> <b> $array[$i] </b> </h3> <br>";
                                $newline = 1;
                                $temp = synonyms($array[$i]);
                                $m = count($temp);
                                for($j = 0; $j < $m; $j++)
                                {
                                    echo "<input type = 'checkbox' name = 'include[]' value = '$temp[$j]'/>$temp[$j] ";
                                    if($newline % 7 == 0) echo "<br> <br>";
                                    $newline += 1;
                                }
                                echo "</pre> <br>";
                            }
                            
                            echo "<button class = 'button2' type='submit' name = 'done'>";
                                echo "done";
                            echo "</button>";
                            
                            echo "</form>";
                            echo "</div>";
                        }
                    
                            
                        # sintax rules:
                        # using " " to merge more keywords into one 

                        if(isset ($_POST["search"])) {

                            echo "<br>";
                            
                            $keywords = $_POST["phrase"];
                                
                            $array = separate($keywords);
                             
                            # write entered keywords to the file 
                            $file = 'keywords.txt';
                            $handle = fopen($file, 'w') or die('Cannot open file');
                            fwrite($handle, $keywords);
                            
                            determine_synonyms($array);
                            
                        }
                    
                        
                        # user have choosen synonyms he wants, continue process
                        
                        if(isset($_POST['done']))
                        {
                            echo "<br>";
                            
                            $synonym = array(); # for each entered keyword, this 2d array will contain their synonyms 
                            
                            $temp = array();
                            foreach($_POST['include'] as $value)
                            {
                                array_push($temp, $value);  #synonyms choosen 
                            }
                            
                            #get entered keywords from file 
                            $file = 'keywords.txt';
                            $handle = fopen($file, 'r');
                            $keywords = fread($handle,filesize($file));
                            
                            $array = separate($keywords);
                            
                            $n = count($array);
                            $m = count($temp);
                            $j = 0;
                            
                            # separate synonyms of keywords into groups(2d array) 
                            for($i = 0; $i < $n; $i++)
                            {
                                $current = array();
                                array_push($current, $array[$i]);
                                $syn = synonyms($array[$i]);
                                
                                while($j < $m)
                                {
                                    if(array_search($temp[$j], $syn) != NULL)
                                    {
                                        array_push($current, $temp[$j]);
                                    }
                                    else break; # make cut when synonym doesn't belong to group 
                                    $j++;
                                }
                                
                                array_push($synonym, $current);  # pushing group into matrix 
                            }
                            
                            /*
                                        matrix
                            
                            for($i = 0; $i < $n; $i++)
                            {
                                for($j = 0; $j < count($synonym[$i]); $j++)
                                {
                                    echo $synonym[$i][$j]." ";
                                }
                                echo "<br>";
                            }
                            
                            */
                            
                            # extend future queries with synonyms
                            foreach($temp as $tmp) 
                            {
                                array_push($array, $tmp);
                            }
                            
                            $query = split_keywords($array);
                            
                            $ACMquery = ACM_split_keywords($array);
                            
                            XploreAPI($query);
                            
                            SpringerAPI($query);
                            
                            ACM($ACMquery);
                            
                            Search(separate($keywords));
                            
                            printTable();
                        }

                    ?>
                    
                </form>

            </div> 
        
        </div>
        
        <footer class = "container-fluid-text-center">
            
            <a href="mailto: n.novarlic@innopolis.ru"> <img src = "img/subscribe.png" height = "40px" width="40px"></a>
            <div class = "row">
                <p> Cyber-Physical Systems Lab </p>
            </div>
        
        </footer>
        
    </body>
    
</html>