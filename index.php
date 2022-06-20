<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;
use Httpful\Request;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            $square = new Square(8);
            $square->displayName();
            $square->newLine();
            $square->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            $rectangle = new Diamond(8);
            $rectangle->displayName();
            $rectangle->newLine();
            $rectangle->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            $rectangle = new Rectangle(8);
            $rectangle->displayName();
            $rectangle->newLine();
            $rectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            $url = 'http://pokeapi.co/api/v2/pokemon/mewtwo/';
            $response = Request::get($url)->followRedirects()->send();
            echo('name=>'. $response->body->name . '<br />');
            echo('weight=>'. $response->body->weight .'<br />');
            echo('height=>'. $response->body->height);
        ?>

        <h2>Recommendations</h2>

        <p>
            Include some more questions regarding Object Oriented Programming . Need more questions covering concepts of php like static functions traits and about usage of various libraries
        </p>
    </body>
</html>
