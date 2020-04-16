<?php 

include "header.php";
include "db.php";

$getTags_result = $dbh->query("SELECT t.name FROM tag t INNER JOIN post p ON p.tags LIKE CONCAT('%|', t.name, '|%') GROUP BY name ORDER BY name");

foreach($getTags_result as $row) {
  echo '<a class="taglink taglink_all" href="listbytitle.php?tagname=' . $row['name'] . '">' . $row['name'] . "</a> ";
}
