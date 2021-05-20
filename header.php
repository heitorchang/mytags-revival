<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mytags</title>
        <style type="text/css">
         .posttitle { font-family: Trebuchet MS, Arial, sans-serif; font-size: 1.2em; background-color: #cff; padding: 5px; }

         .postlink { font-family: Trebuchet MS, Arial, sans-serif; font-size: 1.2em; background-color: #fff; padding: 3px 0 3px 3px; margin: 4px 0 4px 4px;}
 	 .empty { font-family: Trebuchet MS, Arial, sans-serif; background-color: #ddf; font-style: italic;}
         .tags { font-family: Arial, sans-serif; }

         a {
             text-decoration: none;
         }

         .taglink { font-family: Tahoma, sans-serif; font-size: 14px; background-color: #ff9; padding: 5px; margin: 4px;
             border-radius: 8px;
             display: inline-block;
             text-decoration: none;
             box-shadow: 2px 3px 2px 2px
             rgba(0,0,0,0.09), 0 3px 3px
             rgba(0,0,0,0.15);
         }

         .taglink_all { 
             margin-top: 15px;
         }

         .date { font-family: sans-serif; font-size: 14px; }
         .date_sm { font-family: monospace; font-size: 12px; }

         .underline { color: #FFF; background-color: #009; padding: 4px; }
         
         
         .header { position: fixed; top: 0; left: 0; background-color: #eff; font-size: 1.4em; padding-top: 12px; padding-left: 6px; }

         pre {
             font-family: sans-serif;
             padding: 1em;
             border-radius: 0.8em;
             white-space: pre-wrap;
             word-wrap: break-word;
         }
        </style>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
         $(document).ready(function() {

         });
        </script>
    </head>
    <body>
        <div class="header">
            <a href="addform.php">New</a> | 
            <a href="listbytitle.php">Titles</a> | 
            <!-- <a href="showallbytag.php">Details</a> | -->
            <a href="tags.php">Tags</a> | 
            Search
            <form action="listbytitle.php" method="get" style="display: inline">
                <input name="keyword" size="12">
                tag <input name="tagname" size="8">

                Date:
                <select name="month">
                    <option value="0">any</option>
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>
                    <option value="4">Apr</option>
                    <option value="5">May</option>
                    <option value="6">Jun</option>
                    <option value="7">Jul</option>
                    <option value="8">Aug</option>
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                </select>

                <select name="year">
                    <option value="0">this yr</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>  
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>		
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
		</select>

                <input type="submit" value="go">
            </form>

            <!--
            <i>utf-8 mode</i>
            -->
        </div>
        <br><br><br><br>

<?php

        date_default_timezone_set('America/Sao_Paulo');
?>
        
