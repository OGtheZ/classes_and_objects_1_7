<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }
}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
];


function getPG(array $movies): array {
    $PGMovies = [];
    for ($i = 0; $i < count($movies); $i++) {
        if ($movies[$i]->getRating() === "PG") {
            $PGMovies[] = $movies[$i];
        }
    }
    return $PGMovies;
}


$PGMovies = getPG($movies);
foreach($PGMovies as $movie) {
    echo $movie->getTitle() . PHP_EOL;
}