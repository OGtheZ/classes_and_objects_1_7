<?php

class Point
{
    private int $pointX;
    private int $pointY;

    public function __construct(int $pointX, int $pointY)
    {
        $this->pointX = $pointX;
        $this->pointY = $pointY;
    }

    public function getPointX(): int {
        return $this->pointX;
    }

    public function getPointY(): int {
        return $this->pointY;
    }

    public function setPointX(int $pointX) {
        $this->pointX = $pointX;
    }

    public function setPointY(int $pointY) {
        $this->pointY = $pointY;
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

function swapPoints($p1, $p2) {
    $x = $p1->getPointX();
    $y = $p1->getPointY();
    $p1->setPointX($p2->getPointX());
    $p1->setPointY($p2->getPointY());
    $p2->setPointX($x);
    $p2->setPointY($y);
}

swapPoints($p1, $p2);
echo "(" . $p1->getPointX() . ", " . $p1->getPointY() . ")" . PHP_EOL;
echo "(" . $p2->getPointX() . ", " . $p2->getPointY() . ")" . PHP_EOL;