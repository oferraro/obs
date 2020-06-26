<?php

function truncateString($string, $limit) {
    if (strlen($string) <= $limit) { // It's already smaller of the required size
        return $string;
    }
    $newString = substr($string, 0, $limit);
    $res = explode(".", $newString); // Try with a sentence
    if (count($res) < 2) { // We don't have an ending point, no phrases available, try with text
        return rtrim(substr($res[0], 0, ($limit - 3))) . "...";
    } else { // Sentence available, since we already removed the last part, just cut the sentence before the limit
        array_pop($res);
        $res = implode(".", $res);
    }
    return $res;
}


$strings = [
    "If you’re curious about this, it’s a garbled quotation from Cicero’s De Finibus Bonorum et Malorum (On the Ends of Good and Bad), book 1, paragraph 32. It's worth reading.",
    "This is a beautiful collection of classic type samples. Check out Giambattista Bodoni’s Typographic Manual at Octavo.",
    "Tjkhkhkkdhakdkhkjhdkhhkdshjkdjskhdkajkhsakhdkhsakdkjskdakdhkjkahkhkahdkjhdhakjhkhadkjhdkjahjakjhdkajhjkahdjdjkhsaf akhfjkew",
    "Tjkhkhkkdhakdkhkjhdkhhkdshjkdjskhdkajkhsakhdkhsakdkjskdakdhkjkahkhkahdkjhdhakjhkhadkjhdkjahjakjhdkajhjkahdjdjkhefkhfjkew",
    "Three cats win.",
    " "
];

$charLimit = 121;
foreach ($strings as $string) {
    $res = truncateString($string, $charLimit); // TODO: use 121 as the question says
    echo "|$res| has " . strlen($res) . " characters of the $charLimit expected \n\n";
}