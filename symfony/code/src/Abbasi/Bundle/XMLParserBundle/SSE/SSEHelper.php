<?php

namespace Abbasi\Bundle\XMLParserBundle\SSE;

abstract class SSEHelper
{
    /**
     * Make strings SSE friendly (For internal use only)
     *
     * @param string $string data to be processed
     *
     * @return string
     */
    public static function sseData($string)
    {
        return 'data:' . str_replace("\n", "\ndata: ", $string);
    }
    /**
     * For output a SSE data block (For internal use only)
     *
     * @param mixed  $id   Event ID
     * @param string $data Event Data
     * @param string $name Event Name
     */
    public static function sseBlock($id, $data, $name = null)
    {
        static::sseSend("id: $id\n");
        if (strlen($name) && $name !== null) {
            static::sseSend("event: $name\n");
        }
        static::sseSend(static::sseData($data) . "\n\n");
    }
    public static function sseSend($content)
    {
        echo $content;
    }
    /**
     * Calculate the modulus of time
     *
     * @param int $start
     * @param int $interval
     *
     * @return int
     */
    public static function timeMod($start, $interval)
    {
        return static::timeDiff($start) % $interval;
    }
    /**
     * Calculate the time difference
     *
     * @param int $start
     *
     * @return int
     */
    public static function timeDiff($start)
    {
        return time() - $start;
    }
}
