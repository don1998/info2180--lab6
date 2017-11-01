<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$endpoint = $_SERVER['QUERY_STRING'];

$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];

$xmlvar='<?xml version="1.0" encoding="UTF-8"?>
<dictionary>
    <entry> 
        <word>Definition</word>
        <author>Jon</author>
        <definition>A statement of the exact meaning of a word, especially in a dictionary.</definition> 
    </entry>
    <entry> 
        <word>HTML</word>
        <author>Robert</author>
        <definition>A standard markup language for creating web pages and web applications.</definition> 
    </entry> 
    <entry> 
        <word>Bar</word>
        <author>Kimberly</author>
        <definition>A place that sells alcoholic beberages.</definition> 
    </entry> 
    <entry> 
        <word>Ajax</word>
        <author>Stannis</author>
        <definition>Technique which involves the use of javascript and xml(or JSON)</definition> 
    </entry> 
    <entry> 
        <word>CSS</word>
        <author>William</author>
        <definition>A stylesheet language used for describing the presentation of a document written in a markup language.</definition> 
    </entry>
    <entry> 
        <word>PHP</word>
        <author>Kyle</author>
       <definition>A sever-side scripting language, and a powerful tool for making dynamic and interactive website.</definition> 
    </entry> 
    <entry> 
        <word>Javascript</word>
        <author>Aegon</author>
        <definition>A lightweight, interpreted programming language with firts-class function that add interactivity to your website.</definition> 
    </entry> 
</dictionary>';

if ($endpoint=="q=&all=true"){
    header('Content-Type: text/xml');
    $xmlOutput = new SimpleXMLElement($xmlvar);
    echo $xmlOutput->asXML();
    }
else{
    print "<h3>" . strtoupper($query) . "</h3>";
    print "<p>" . $definition[$query] . "</p>";
}

