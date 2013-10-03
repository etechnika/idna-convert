<?php

namespace Etechnika\IdnaConvert;

require_once( __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR . 'phlylabs' . DIRECTORY_SEPARATOR . 'transcode_wrapper.php' );

/**
 * Transcode wrapper
 *
 * @author Tomasz Rutkowski <tomasz@rutkowski.co>
 */
class TranscodeWrapper
{
    /**
     * Convert a string to UTF-8
     *
     * @param string $strValue
     * @param string $encoding
     * @param bool $booSafemode if set to TRUE, the original string is retunred on errors
     * @return string string|false on failure
     * @see encode_utf8
     */
    public static function encode_utf8( $strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false )
    {
        return encode_utf8( $strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false );
    }


    /**
     * Convert a string from UTF-8 to any of various encodings
     *
     * @param string $strValue
     * @param string $strEncoding
     * @param bool $booSafemode if set to TRUE, the original string is retunred on errors
     * @return string|false on failure
     * @see decode_utf8
     */
    public static function decode_utf8( $strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false )
    {
        return decode_utf8( $strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false );
    }


    /**
     *
     * @param string $strValue
     * @return string
     * @see map_w1252_iso8859_1
     */
    public static function map_w1252_iso8859_1( $strValue = '' )
    {
        return map_w1252_iso8859_1( $strValue = '' );
    }


    /**
     * @param string $strValue
     * @param string $strValue
     * @return string
     * @see map_iso8859_1_w1252
     */
    public static function map_iso8859_1_w1252( $strValue = '' )
    {
        return map_iso8859_1_w1252( $strValue = '' );
    }
}
