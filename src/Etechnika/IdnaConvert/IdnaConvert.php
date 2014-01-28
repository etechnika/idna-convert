<?php
namespace Etechnika\IdnaConvert;

require_once( __DIR__ . DIRECTORY_SEPARATOR. '..' . DIRECTORY_SEPARATOR .'..' . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR .'phlylabs' . DIRECTORY_SEPARATOR .'idna_convert.class.php' );
use Etechnika\PhlymailDe\idna_convert;

/**
 * Converter
 */
class IdnaConvert extends idna_convert
{
    /**
     * Return instance
     *
     * @return IdnaConvert
     */
    public static function get()
    {
        return new static();
    }

    /**
     * Decode domain name
     *
     * @param string $strValue
     *
     * @return string
     */
    public static function decodeString($strValue)
    {
        return static::get()->decode($strValue);
    }

    /**
     * Encode domain name
     *
     * @param string $strValue
     *
     * @return string
     */
    public static function encodeString($strValue)
    {
        return static::get()->encode($strValue);
    }
}
