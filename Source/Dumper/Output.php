<?php

namespace Liloi\Dumper;

class Output
{
    /**
     * Print simple text.
     *
     * @param string $text Printed text.
     * @param bool $flagNewLine Flag: `true` if insert new line char, `false` otherwise.
     * @return string Output text for logging.
     */
    public static function out(string $text, bool $flagNewLine = true): string
    {
        if($flagNewLine)
        {
            $text .= "\n";
        }

        echo $text;
        return $text;
    }
}