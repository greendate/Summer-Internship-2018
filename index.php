<!DOCTYPE html>
<html>
    
    <head>
    
        <title>iSLR</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
         
        <style>
            
             html, body {
                 
                    max-width: 100%;
                    overflow-x: hidden;
             }
            
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
                 background-color: #fff;
                 border-color: #fff;
                 border-style: solid;
             }
             
             .identifier {
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
                word-spacing: 2px;
                margin-bottom: 0;
             }
             
             .radio-botton {
                 word-spacing: 2px;
             }
             
            input[type="checkbox"] {
                
                 vertical-align: text-bottom;
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
                 color: #d3d3d3;
                 background-color: black;
                 text-align: center;
                 transition: all 0.2s;
                 border-radius: 4px;
            }
            
             .button2:hover {
                 
                 color: white;
                 background-color: #000000;
                 border-radius: 4px;
             }
             
            @media all and (max-width:30em) {
                
                 .button2 {
                     
                    display:block;
                    margin:0.4em auto;
                 }
                
            }
             
             .scrollbar {
                
                height: 200px;
                width: 100%;
                overflow-y: scroll;
                overflow-x: hidden;
             }
             
             .box {
                 
                 width: 50%;
                 margin-left: 25%;
                 padding: 5px;
                 border: 1px solid black;
                 /*background-color: #f1f1f1;*/
                 background-color: #000;
                 color: #d3d3d3;
             }
            
            #text {
                
                position: absolute;
                top: 73%;
                left: 49.7%;
                margin: 7% 0px 0px -150px;
                font-size: 18px;
                text-align: center;
                width: 300px;
            }

            /*
            #barbox_a {
                              
                position: absolute;
                top: 80%;
                left: 49.7%;
                margin: 7% 0px 0px -160px;
                width: 304px;
                height: 24px;
                background-color: black;
            }
            */
            
            .per {
                
                position: absolute;
                top: 75%;
                font-size: 20px;
                left: 38%;
                margin: 7% 0px 0px 310px;
                background-color: #FFFFFF;
            }

            .bar {
                
                position: absolute;
                top: 75%;
                left: 38%;
                margin: 7.2% 0px 0px 0px;
                width: 0px;
                height: 20px;
                background-color: #666666;
            }

            .blank {
                
                background-color: #e0e0e0;
                width: 300px;
            }
                
            input[type="text"]:focus {
                
                outline: none;
            }
            
            select {
                
                display: inline-block;
                float: right;
                margin-right: 33%;
                color: #d3d3d3;
                background-color: #000;
                border: none;
                outline: none;
            }
            
            select:hover {
                
                color: #fff;
            }
            
            .positioned-right {
                
                float: right;
                margin-bottom: 0;
                margin-right: 25%;
                margin-left: 0;
                border: none;
                outline: none;
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

                    <input type = "text" name = "phrase" value = "<?php echo isset($_POST['test']) ? $_POST['test'] : ''; ?>" placeholder = "Enter your keywords here..">

                    <button class = "button1" type = "submit" name = "search" value = ""> 
                        
                       <!-- <img src="img/Button_15-512.png" width = "20px" height= "20px">  -->
                        <i class = "ion-search"> </i> Search
                    
                    </button>

                    <?php
                        
                        ini_set('max_execution_time', 10000);
                        error_reporting(E_ALL ^ E_NOTICE); 
                        error_reporting(E_ERROR | E_PARSE);
                        ob_flush();
                        ob_clean();
                        
                    
                        # gets words and their synonyms returns appropriate mysql query 
                    
                        function form_query($matrix)
                        {
                            $query = "SELECT doi, title, author, publication, abstract
                                      FROM papers
                                      WHERE ";
                            
                            $title_part = "(";
                            $abstract_part = "(";
                            $n = count($matrix);
                            
                            for($i = 0; $i < $n; $i++) 
                            {
                                $title_part = $title_part."(";
                                $abstract_part = $abstract_part."(";
                                $m = count($matrix[$i]);
                                
                                for($j = 0; $j < $m; $j++)
                                {
                                    $title_part = $title_part."title LIKE '%".$matrix[$i][$j]."%'";
                                    $abstract_part = $abstract_part."abstract LIKE '%".$matrix[$i][$j]."%'";
                                    
                                    if($j < $m - 1)
                                    {
                                        $title_part = $title_part." OR "; 
                                        $abstract_part = $abstract_part." OR ";
                                    }
                                }
                                
                                $title_part = $title_part.")";
                                $abstract_part = $abstract_part.")";
                                
                                if($i < $n - 1)
                                {
                                    $title_part = $title_part." AND ";
                                    $abstract_part = $abstract_part ." AND ";
                                }
                            }
                            
                            $title_part = $title_part . ")";
                            $abstract_part = $abstract_part.")";
                            
                            return $query.$title_part." OR ".$abstract_part;
                        }
                    
                        
                        $doi_list = array();
                        $title_list = array();
                        $author_list = array();
                        $publication_list = array();
                        $abstract_list = array();

                        # gets matrix with synonyms array, obtains articles from the data base

                        function Search($matrix)
                        {   
                            $con=new mysqli("localhost","root","", "islr");
                            
                            $query = form_query($matrix);
                            
                            $res = mysqli_query($con, $query);
                                
                            if($res)
                            {
                                while($row = mysqli_fetch_array($res))
                                {       
                                    array_push($GLOBALS['doi_list'], $row[0]); 
                                    array_push($GLOBALS['title_list'], $row[1]);
                                    array_push($GLOBALS['author_list'], $row[2]);
                                    array_push($GLOBALS['publication_list'], $row[3]);
                                    array_push($GLOBALS['abstract_list'], $row[4]);
                                }
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
                            $articles = -1;
                            
                            while($i < $n and $articles <= 25)
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
                                    $articles += 1;
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
                    
                        
                        function printTable($brother)
                        {
                            $out0 = $GLOBALS['title_list'];
                            $out1 = $GLOBALS['author_list'];
                            $out2 = $GLOBALS['publication_list'];
                            $out3 = $GLOBALS['doi_list'];
                            
                            echo("<table class="."table-fill".">
                                    <thead>
                                        <tr>
                                            <th class="."text-left".">#</th>
                                            <th class="."text-left".">Title</th>
                                            <th class="."text-left".">Author</th>
                                            <th class="."text-left".">Publication</th>
                                            <th class="."text-left".">doi</th>
                                        </tr>
                                    </thead>
                                  <tbody class="."table-hover".">");
                            
                            $num = 1;
                            for($i = 0; $i < count($GLOBALS['doi_list']); $i++)
                            {
                                if($brother[$i] != -1) continue;
                                
                                echo("<tr>
                                        
                                        <td class="."text-left"."> $num. </td>
                                        <td class="."text-left"."> $out0[$i] </td>
                                        <td class="."text-left"."> $out1[$i] </td>
                                        <td class="."text-left"."> $out2[$i] </td>
                                        <td class="."text-left"."> $out3[$i] </td>
                                    </tr>");
                                
                                for($j = $i + 1; $j < count($GLOBALS['doi_list']); $j++)
                                {
                                    if($brother[$j] == $i) 
                                    {
                                        echo("<tr>
                                        
                                        <td class="."text-left"."> </td>
                                        <td class="."text-left"."> $out0[$j] </td>
                                        <td class="."text-left"."> $out1[$j] </td>
                                        <td class="."text-left"."> $out2[$j] </td>
                                        <td class="."text-left"."> $out3[$j] </td>
                                    </tr>");
                                    } 
                                }
                                
                                $num += 1;
                            }
                            
                             echo("</tbody>
                                </table>");
                            
                            echo "<br>";
                                
                            echo "<button class = 'button2' type='submit' name = 'reset' onclick = 'index.php'>";
                                echo "<i class = 'ion-refresh'> </i> reset";
                            echo "</button>";
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

                    
                        function sort_synonyms()
                        {
                            echo "<div class = 'radio-button'>";
                            
                            echo "<h4> <b> Sort the synonyms by: </b> <br> <br> </h4>";
                            
                            echo "<p> <b>";
                            echo "<input type='radio' name='sort'
                            value='alphabetical'> alphabetical order <br>";
                            
                            echo "<input type='radio' name='sort'
                            value='relevance'> relevance meaning";
                            echo " </b> </p> <br>";
                            
                            echo "</div>";
                            
                            echo "<button class = 'button2' type='submit' name = 'continue'>";
                                echo "continue";
                            echo "</button>";
                        }
                    
                        
                        if(isset($_POST["continue"]))
                        {
                            $file = 'keywords.txt';
                            $handle = fopen($file, 'r');
                            $keywords = fread($handle,filesize($file));
                            
                            $sort_temp = false;
                            $array = separate($keywords);
                            
                            $sort = $_POST['sort'];
                            if($sort == "alphabetical") $sort_temp = true; 
                            
                            determine_synonyms($array, $sort_temp);
                        }
                    
                        
                        if(isset($_POST['refresh']) and isset($_POST['selectsort']))
                        {
                            $file = 'keywords.txt';
                            $handle = fopen($file, 'r');
                            $keywords = fread($handle,filesize($file));
                            
                            $array = separate($keywords);
                            determine_synonyms($array, $_POST['selectsort']);
                        }
                    
                    
                        function determine_synonyms($array, $sort_temp)
                        {
                            
                            echo "<h2> <b> Choose the synonyms </b> </h2> <br>";
                            
                            echo "<form id = 'selectForm' method = 'post'>";
                            echo "<button name = 'refresh' class = 'button2 positioned-right'> <i class = 'ion-refresh'> </i> refresh </button>";
                            echo "<br>";
                            echo "<select name = 'selectsort'>";
                            echo "<option selected disabled> Sort synonyms by </option>";
                            echo "<option value = 0> relevance meaning </option>";
                            echo "<option value = 1> alphabetical order </option>";
                            echo "</select>";
                            echo "</form>"; 
                            
                            $n = count($array);
                    
                            echo "<div class = 'check-box'>";
                            echo "<form action = 'index.php' method = 'post'>";

                            for($i = 0; $i < $n; $i++)
                            {
                                echo "<div class = 'box'>";
                                echo "<h3> <b> $array[$i] </b> </h3> <br>";
                                $temp = synonyms($array[$i]);
                                
                                if($sort_temp) sort($temp);  # sort by relevance or alphabetically
                                
                                $m = count($temp);
                                echo "<div class = 'scrollbar'>";
                                for($j = 0; $j < $m; $j++)
                                {
                                    echo "<input type = 'checkbox' name = 'include[]' value = '$temp[$j]'/> $temp[$j]";
                                    echo "<br> <br>";
                                }
                                echo "</div>";
                                echo "</div>";
                                echo "<br>";
                            }
                            
                            echo "<button class = 'button2' type='submit' name = 'done'>";
                                echo "<i class = 'ion-android-done-all'> </i> done";
                            echo "</button>";
                            
                            echo "</form>";
                            echo "</div>";
                        }
                            
                    
                        # sintax rules:
                        # using " " to merge more keywords into one 

                        if(isset($_POST["search"])) {

                            echo "<br>";
                            
                            $keywords = $_POST["phrase"];
                             
                            # write entered keywords to the file 
                            $file = 'keywords.txt';
                            $handle = fopen($file, 'w') or die('Cannot open file');
                            fwrite($handle, $keywords);
                            
                            // sort_synonyms();
                            $array = separate($keywords);
                            determine_synonyms($array, 0);
                        }
                
                        
                        function separate_synonyms($array, $temp)
                        {
                            $synonym = array(); # for each entered keyword, this 2d array will contain their synonyms
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
                            
                            return $synonym;
                        }
                    
                    
                        function isAlpha($c)
                        {
                            if($c >= 'a' and $c <= 'z') return true;
                            if($c >= 'A' and $c <= 'Z') return true;
                            return false;
                        }
                    
                    
                        function getWords($sentence)
                        {
                            $answer = "";
                            $n = strlen($sentence);
                            $i = 0;

                            while($i < $n)
                            {
                                if(!isAlpha($sentence[$i]))  # separator, not relevant
                                {
                                    $i++;
                                    continue;
                                }

                                # next word is located between indices i and j
                                $j = $i;
                                $word = "";
                                while($j < $n)
                                {
                                    if(!isAlpha($sentence[$j])) break;
                                    $word = $word . $sentence[$j];
                                    $j++;
                                }

                                $answer = $answer . $word;
                                $answer = $answer . " ";
                                $i = $j;

                            }
                            
                            return $answer;
                        }
                    

                        function LevenshteinDistance($a, $b)
                        {
                            $n = count($a);
                            $m = count($b);
                            
                            // init
                            $dp = array(array());
                            $empty_array = array();
                            for($j = 0; $j <= $m; $j++) array_push($empty_array, 0);
                            for($i = 0; $i <= $n; $i++)
                            {
                                array_push($dp, $empty_array);
                            }
                            
                            // main part of algorithm
                            for($i = 0; $i <= $n; $i++)
                            {
                                for($j = 0; $j <= $m; $j++)
                                {
                                    if($i == 0) $dp[$i][$j] = $j;
                                    else if($j == 0) $dp[$i][$j] = $i;
                                    else if($a[$i - 1] == $b[$j - 1]) $dp[$i][$j] = $dp[$i - 1][$j - 1];
                                    else $dp[$i][$j] = 1 + min($dp[$i - 1][$j - 1], min($dp[$i - 1][$j], $dp[$i][$j - 1])); // costs of replace, remove and insert
                                }
                            }
                            return $dp[$n][$m];
                        }
                    
                    
                        function areSimilar($a, $b)
                        {
                            // if we need to change less than half of words we will consider two arcticles as similar
                            $edit = LevenshteinDistance($a, $b);
                            if($edit <= count($a) / 2) return 1;
                            
                            $edit_reverse = LevenshteinDistance($b, $a);
                            if($edit_reverse <= count($b) / 2) return 1;
                            return 0;
                        }
                    
                    
                        function similarContent($a, $b)
                        {
                            /*
                                                Using API
                            
                            $url = "https://api.dandelion.eu/datatxt/sim/v1/?text1=".getWords($a)."&text2=".getWords($b)."&token=d60e49c441b942b991b17bd949e6fe7c";
                            
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $result = curl_exec($ch);
                            curl_close($ch);

                            $obj = json_decode($result);
                            
                            if($obj->similarity >= 0.75) return true;
                            return false;
                            */
                            
                            $a = getWordsAsArray($a);
                            $b = getWordsAsArray($b);
                            return areSimilar($a, $b); 
                        }
                    
                    
                        function get_closest_synonyms($word)
                        {
                            $url = "https://api.datamuse.com/words?ml=".$word."&max=5";
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
                    
                    
                        function getWordsAsArray($sentence)
                        {
                            $answer = array();
                            $n = strlen($sentence);
                            $i = 0;

                            while($i < $n)
                            {
                                if(!isAlpha($sentence[$i]))  # separator, not relevant
                                {
                                    $i++;
                                    continue;
                                }

                                # next word is located between indices i and j
                                $j = $i;
                                $word = "";
                                while($j < $n)
                                {
                                    if(!isAlpha($sentence[$j])) break;
                                    $word = $word . $sentence[$j];
                                    $j++;
                                }

                                array_push($answer, $word);
                                $i = $j;

                            }
                            
                            return $answer;
                        }
                    
                    
                        function initialize_progress_bar()
                        {
                            // echo "<div id='barbox_a'></div>";
                            echo "<div class='bar blank'></div>";
                        }
                    
                        
                        function progress_bar_update($percent)
                        {
                            echo "<div class='per'>{$percent}
                                %</div>\n";
                                
                            echo "<div class='bar' style='width:", 
                                $percent * 3,"px'></div>\n";

                            ob_flush();
                            flush();
                        }
                    
                        
                        function hide_progress_bar()
                        {
                            echo "<style>
                                
                                #text {
                
                                    visibility: hidden;
                                }

                                #barbox_a {
                              
                                    visibility: hidden;
                                }
            
                                .per {
                
                                    visibility: hidden;
                                }

                                .bar {
                                
                                    visibility: hidden;
                                }
                                
                                </style>";
                        }
                    
                        
                        # We want to consider two synonyms as same word while doing a similarity test (our similarity test will be more accurate)
                        
                        # As it's too slow to look for list of synonyms for first word, and then search for second word in the that list each 
                        # time while comparing two words of different titles 
                        
                        # I decided to create special titles only for similarity comparison, some words will be replaced 
                        # with their synonym which has been used before for composing special titles
                    
                        # Our goal here is not to have case where two synonyms appear in group of words
                        # that were used to compose those special titles
                    
                        function transform_for_comparison($array)
                        {
                            $answer = array();
                            $included_words = array();
                            $n = count($array);
                            initialize_progress_bar();
                            
                            for($i = 0; $i < $n; $i++)  # iterate theough all the titles
                            {   
                                # calculate the percentage of finished progress and update the progress bar
                                
                                $percent = (($i + 1) / $n) * 100;
                                $percent = intval($percent);
                                progress_bar_update($percent);
                                
                                $alternative = "";
                                $words = getWordsAsArray($array[$i]);
                                foreach($words as $word)  # now go through each word of title
                                {
                                    # try to find synonym of that word that has been used before
                                    
                                    $synonym_included = false;
                                    $cs = get_closest_synonyms($word);  # look only for few synonyms becouse of faster execution 
                                    
                                    foreach($cs as $temp)
                                    {
                                        # look if some of his synonyms has been already included in list, if no synonym found then insert the
                                        # current word in list
                                        
                                        if(array_search($temp, $included_words) != NULL)
                                        {
                                            $alternative = $alternative . $temp . " ";  # replace the word with its synonym in special title
                                            $synonym_included = true;
                                            break;
                                        }
                                    }
                                    
                                    if(!$synonym_included)
                                    {
                                        $alternative = $alternative . $word . " ";  # include that word in special title 
                                        
                                        if(array_search($word, $included_words) == NULL) array_push($included_words, $word);
                                    }
                                }
                                
                                # echo $array[$i]."<br>".$alternative."<br> <br>";
                                
                                array_push($answer, $alternative); # push the special title to the final answer 
                            }
                            
                            hide_progress_bar();
                            return $array;
                        }
                        
                        
                        function findSimilars()
                        {
                            $arr0 = $GLOBALS['title_list'];
                            $arr0 = transform_for_comparison($arr0);
                            $n = count($arr0);
                            
                            $brother = array();
                            for($i = 0; $i < $n; $i++) array_push($brother, -1);
                            
                            for($i = 0; $i < $n; $i++)
                            {
                                
                                if($brother[$i] != -1) continue;
                                
                                for($j = $i + 1; $j < $n; $j++)
                                {
                                    if(similarContent($arr0[$i], $arr0[$j]))
                                    {
                                        $brother[$j] = $i;
                                    }
                                }
                            }
                            
                            return $brother; # for each paper points first article with similar content 
                        }
                    
                    
                        # user have choosen synonyms he wants, continue process
                    
                        if(isset($_POST['done']))
                        {   
                            echo "<br>"; 
                            
                            $temp = array();
                            
                            if(isset($_POST['include']))
                            {
                                foreach($_POST['include'] as $value)
                                {
                                    array_push($temp, $value);  # synonyms choosen 
                                }
                            }
                    
                            # get entered keywords from file 
                            $file = 'keywords.txt';
                            $handle = fopen($file, 'r');
                            $keywords = fread($handle,filesize($file));
                            
                            $array = separate($keywords);
                            
                            $synonym = separate_synonyms($array, $temp); 
                            
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
                            
                            Search($synonym);
                            
                            printTable(findSimilars());
                            
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