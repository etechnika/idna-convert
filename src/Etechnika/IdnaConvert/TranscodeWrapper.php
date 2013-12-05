<?php
namespace Etechnika\IdnaConvert;

require_once( __DIR__ . DIRECTORY_SEPARATOR. '..' . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'phlylabs' . DIRECTORY_SEPARATOR . 'transcode_wrapper.php' );

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
     * Return the encoded string or false on failure
     *
     * @param string $strValue
     * @param string $strEncoding
     * @param bool   $booSafemode
     *
     * @return string string|false on failure
     *
     * @see encode_utf8
     */
    public static function encodeUtf8($strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false)
    {
        return encode_utf8($strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false);
    }

    /**
     * Convert a string from UTF-8 to any of various encodings
     *
     * Return if set to TRUE, the original string is retunred on errors
     *
     * @param string $strValue
     * @param string $strEncoding
     * @param bool   $booSafemode
     *
     * @return string|false on failure
     *
     * @see decode_utf8
     */
    public static function decodeUtf8($strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false)
    {
        return decode_utf8($strValue = '', $strEncoding = 'iso-8859-1', $booSafemode = false);
    }

    /**
     * Convert cp-1252 to iso-8859-1
     *
     * @param string $strValue
     *
     * @return string
     *
     * @see map_w1252_iso8859_1
     */
    public static function mapW1252Iso88591($strValue = '')
    {
        return map_w1252_iso8859_1($strValue = '');
    }

    /**
     * Convert iso-8859-1 to cp-1252
     *
     * @param string $strValue
     *
     * @return string
     *
     * @see map_iso8859_1_w1252
     */
    public static function mapIso88591W1252($strValue = '')
    {
        return map_iso8859_1_w1252($strValue = '');
    }
}
