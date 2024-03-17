<?php

echo "Blog title: ";

$title = trim(fgets(STDIN));

echo "The author: ";

$author = trim(fgets(STDIN));

echo "The category: ";

$category = trim(fgets(STDIN));


$outputDirectory = isset($argv[1]) ? $argv[1] : getcwd();


$timestamp = date("YmdHis");

$filename = strtolower(str_replace(' ', '-', $title)) . '-' . strtolower(str_replace(' ', '-', $author)) . '-' . $timestamp . '.md';


$filepath = $outputDirectory . '/' . $filename;


$fileContent = <<<EOD
---
title: "$title"
author: "$author"
category: "$category"
date: "$timestamp"
---

Write your blog post content here...
EOD;


file_put_contents($filepath, $fileContent);


echo "Markdown file created: $filepath\n";
?>
