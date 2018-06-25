<?php

class MinuteAdder
{
    /**
     * It sums an array of timestamps
     *
     * @param array $timestamps
     * @return false|string
     */
    public static function sum(array $timestamps)
    {
        $seconds = 0;

        foreach ($timestamps as $timestamp) {
            $zeroAddedSeconds = self::addZeroIfNeeds($timestamp);
            $seconds += self::convertTimestampToSeconds($zeroAddedSeconds);
        }

        return gmdate('H:i:s', $seconds);
    }

    private static function convertTimestampToSeconds($timestamp)
    {
        list($hour, $minute, $second) = explode(':', trim(self::addZeroIfNeeds($timestamp)));

        return $hour * 60 * 60 + $minute * 60 + $second;
    }

    private static function addZeroIfNeeds($timestamp)
    {
        return (substr_count($timestamp, ':') == 1) ? '00:' . $timestamp : $timestamp;
    }

}
