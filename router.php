<?php
//check if "?page=" exists
if (isset($_GET["page"])) {
  //set $page to whatever is after ?page=
  $route = $_GET["page"];
} else {
  //default
  $route = "home";
}
