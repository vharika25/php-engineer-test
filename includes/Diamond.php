<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

/**
 *
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name = 'Diamond';
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;
    }

    /**
     * Draws the diamond.
     */
    public function draw()
    {
        for ($i = 1; $i <= ($this->sideLength * 2) - 1; $i++) {
            for ($j = 1; $j <= ($this->sideLength * 2) - 1; $j++) {
                if (($i+$j == $this->sideLength + 1) 
                    || ($i + $j == (($this->sideLength * 2) + ($this->sideLength - 1))) 
                    || ($i + $j == ($this->sideLength + (($i * 2) - 1))) 
                    || ($i + $j == ($this->sideLength + (($j * 2) - 1)))
                ) {
                    echo $this->pixel;
                } else {
                    echo $this->padding(2);
                }
            }
            $this->newLine();
        }
    }
}

