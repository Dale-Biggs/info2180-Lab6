<?php

// accept a term (keyword)
// respond with a value

$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
    
];

print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";

$xmldata = '<?xml version="1.0" encoding="UTF-8"?>

    <ol>
        <li>
            <h3> Definition</h3>
            <p>A statement of the exact meaning of a word, especially in a dictionary.</p>
            <p>-Kimberly</p>
        </li>
        
        <li> 
            <h3>bar</h3> 
            <p>A place that sells alcholic beverages</p>
            <p>-Dale</p>
        </li>
            
        <li> 
            <h3>ajax</h3> 
            <p>Technique which involves the use of javascript and xml (or JSON)</p>
            <p>-Paul</p>
        </li>
            
        <li> 
            <h3>html</h3> 
            <p>The standard markup language for creating web pages and web applications.</p>
            <p>-Alec</p>
        </li>
             
        <li>
            <h3>css</h3> 
            <p>A style sheet language used for describing the presentation of a document written in a markup language.</p>
            <p>-Orville</p>
        </li>
            
        <li> 
            <h3>javascript</h3> 
            <p>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</p>
            <p>-Shea</p>
        </li>
            
        <li> 
            <h3>php</h3> 
            <p>A server-side scripting language, and a powerful tool for making dynamic and interactive websites</p>
            <p>-Anthony</p>
        </li>
    
    </ol>';

header('Content-Type: text/xml');

$xmlOutput = new SimpleXMLElement($xmldata);

echo $xmlOutput->asXML();
