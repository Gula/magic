<?php
class magic
{
  static public function slugify($text)
  {
    $text = Doctrine_Inflector::unaccent($text);
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);

    // trim and lowercase
    $text = strtolower(trim($text, '-'));

    return $text;
    /**********************

    // Remove all non url friendly characters with the unaccent function
    $text = Doctrine_Inflector::unaccent($this->get('title'));

    if (function_exists('mb_strtolower')) {
      $text = mb_strtolower($text);
    } else {
      $text = strtolower($text);
    }

    // Remove all none word characters
    $text = preg_replace('/\W/', ' ', $text);

    // More stripping. Get rid of all non-alphanumeric.
    $text = strtolower(preg_replace('/[^A-Z^a-z^0-9^\/]+/', '', $text));

    return trim($text, '-');
*/


  }
}