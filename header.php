<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mytags</title>
    <style type="text/css">
      .posttitle { font-family: Trebuchet MS, Arial, sans-serif; font-weight: bold; background-color: #cff; padding: 5px; }
      .tags { font-family: Arial, sans-serif; }
      .taglink { font-family: Tahoma, sans-serif; font-size: 14px; background-color: #ffc; padding: 5px; text-decoration: none; }
      .taglink_all { font-family: Tahoma, sans-serif; font-size: 14px; padding: 5px; text-decoration: none; }
      .date { font-family: sans-serif; font-size: 14px; }
      .header { position: fixed; top: 0px; background-color: #fff; }
    </style>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

      });
    </script>
  </head>
  <body>
<div class="header">
<a href="addform.php">New post</a> | 
<a href="showallbytag.php">All posts</a> |
<a href="tags.php">All tags</a> | 
Search tag <form action="showallbytag.php" method="get" style="display: inline"><input name="tagname" size="8"> keyword <input name="keyword" size="12">

    month:
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

    year:
    <select name="year">
        <option value="0">any</option>
        <option value="2012">2012</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select>

    <input type="submit" value="go">
</form>

<!--
<i>utf-8 mode</i>
-->
</div>
<br><br>
