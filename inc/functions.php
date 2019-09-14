<?php
// PHP - Random Quote Generator by Jenoff Van Hulle

// Array of philosophical quote elements
$quotes = array();
$quotes[] = [
    'quote' => 'Happiness is not an ideal of reason but of imagination',
    'source' => 'Immanuel Kant',
    'citation' => 'Groundwork of the Metaphysics of Morals',
    'year' => 1785,
    'movement' => 'Idealism'
];
$quotes[] = [
    'quote' => 'I don’t know why we are here, but I’m pretty sure it is not in order to enjoy ourselves',
    'source' => 'Ludwig Wittgenstein',
    'movement' => 'Analytical Philosophy'
];
$quotes[] = [
    'quote' => 'Life must be understood backward. But it must be lived forward',
    'source' => 'Søren Kierkegaard',
    'citation' => 'Journals IV A 164',
    'year' => 1843,
    'movement' => 'Existentialism'
];
$quotes[] = [
    'quote' => 'Man is condemned to be free',
    'source' => 'Jean-Paul Sartre',
    'citation' => 'Lecture',
    'year' => 1946,
    'movement' => 'Existentialism'
];
$quotes[] = [
    'quote' => 'If you would be a real seeker after truth, it is necessary that at least once in your life you doubt, as far as possible, all things',
    'source' => 'René Descartes',
    'citation' => 'Meditations on First Philosophy',
    'year' => 1641,
    'movement' => 'Rationalism'
];
$quotes[] = [
    'quote' => 'Man is the measure of all things',
    'source' => 'Protagoras',
    'movement' => 'Pre-Socratic Philosophy'
];

// This getRandomQuote function selects and returns a random quote element
function getRandomQuote($array) {
  global $quotes;
  $rand_number = rand(0, 5);
  return $array[$rand_number];
}

// This printQuote funtion calls the previous getRandomQuote function and stores the HTML output in a variable
function printQuote($array) {
  global $quotes;
  $rand_quote = getRandomQuote($array);
  if ($rand_quote['citation']) {
    $citation = "<span class=\"citation\">" . $rand_quote['citation'] . "</span>";
  }
  if ($rand_quote['year']) {
    $year = "<span class=\"year\">" . $rand_quote['year'] . "</span>";
  }
  if ($rand_quote['movement']) {
    $year = "<span class=\"movement\">" . $rand_quote['movement'] . "</span>";
  }
  $var = "<p class=\"quote\">" . $rand_quote['quote'] . "</p>" . "<p class=\"source\">" . $rand_quote['source'] . $citation . $year . $movement . "</p>";
  return $var;
}
