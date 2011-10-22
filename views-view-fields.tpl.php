<?php

foreach ($fields as $id => $field) {
  $field->separator && print $field->separator;
  print $field->content;
}

