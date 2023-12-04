<?php

/**
 * Http Status Code Class
 *
 * @author  hfisaquiel <hfisaquiel@github.com>
 * @license GNU General Public License v3.0
 */

namespace Modulity\HttpCodes;

use Modulity\HttpCodes\Codes\ClientErrorInterface;
use Modulity\HttpCodes\Codes\InformationalInterface;
use Modulity\HttpCodes\Codes\RedirectionInterface;
use Modulity\HttpCodes\Codes\ServerErrorInterface;
use Modulity\HttpCodes\Codes\SuccessfulInterface;

class StatusCode implements
    InformationalInterface,
    SuccessfulInterface,
    RedirectionInterface,
    ClientErrorInterface,
    ServerErrorInterface
{

    /**
     * Http Code Number
     *
     * @var integer
     */
    private int $code;

    /**
     * Http Code Reason Phrase
     *
     * @var string
     */
    private string $reasonPhrase;


    /**
     * Function __construct
     *
     * @param integer $code HTTP Code Number
     */
    private function __construct(int $code)
    {
        $this->code         = $code;
        $this->reasonPhrase = $this->getLocaleReasonPhrase($code);
    }


    /**
     * *
     * Function create
     *
     * @param integer $code HTTP Code Number
     *
     * @return self
     */
    public static function create(int $code): self
    {
        return new self($code);
    }


    /**
     * Function getCode
     *
     * @return integer
     */
    public function getCode(): int
    {
        return $this->code;
    }


    /**
     * Function getReasonPhrase
     *
     * @return string
     */
    public function getReasonPhrase(): string
    {
        return $this->reasonPhrase;
    }


    /**
     * Function getLocaleReasonPhrase
     *
     * @param integer $code HTTP Code number
     *
     * @return string
     */
    private function getLocaleReasonPhrase(int $code): string
    {
        $locale = self::getSystemLocale('en_US');

        $shortDescription = static::getTranslate($locale, 'short');

        return $shortDescription[$code] ?? '';
    }


    /**
     * Function getSystemLocale
     *
     * @param string $default default locale code if is unset. Eg.: en_US or pt_BR
     *
     * @return string
     */
    private static function getSystemLocale(string $default = ''): string
    {
        $defaultLocale = setlocale(LC_MESSAGES, "0");
        if ($defaultLocale === true && $defaultLocale !== 'C') {
            return $defaultLocale;
        }

        return $default;
    }


    /**
     * Function getTranslate
     *
     * @param string $locale locale code. Eg.: en_US or pt_BR
     * @param string $group  filename translate group
     *
     * @return array list of translations texts from $locale/$group
     */
    private static function getTranslate(string $locale, string $group): array
    {
        $filePath = __DIR__.'/locale/'.$locale.'/'.$group.'.php';
        if (file_exists($filePath) === false) {
            return [];
        }

        // @SuppressWarnings({"php:S2003", "php:S4833"})
        return include $filePath;
    }


}
