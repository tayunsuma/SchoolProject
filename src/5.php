<?php
// School Project
function getRandomSchoolProject() {
  $projects = array("Mathematics", "Science", "English", "History", "Geography");
  return $projects[array_rand($projects)];
}
?>
