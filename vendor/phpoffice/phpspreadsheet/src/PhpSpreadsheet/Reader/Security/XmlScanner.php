<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Security;

use PhpOffice\PhpSpreadsheet\Reader;
<<<<<<< HEAD
=======
use PhpOffice\PhpSpreadsheet\Settings;
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a

class XmlScanner
{
    /**
<<<<<<< HEAD
     * Identifies whether the thread-safe libxmlDisableEntityLoader() function is available.
     *
     * @var bool
     */
    private $libxmlDisableEntityLoader = false;

    /**
=======
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
     * String used to identify risky xml elements.
     *
     * @var string
     */
    private $pattern;

    private $callback;

<<<<<<< HEAD
    private function __construct($pattern = '<!DOCTYPE')
    {
        $this->pattern = $pattern;
        $this->libxmlDisableEntityLoader = $this->identifyLibxmlDisableEntityLoaderAvailability();
=======
    private static $libxmlDisableEntityLoaderValue;

    public function __construct($pattern = '<!DOCTYPE')
    {
        $this->pattern = $pattern;

        $this->disableEntityLoaderCheck();

        // A fatal error will bypass the destructor, so we register a shutdown here
        register_shutdown_function([__CLASS__, 'shutdown']);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    }

    public static function getInstance(Reader\IReader $reader)
    {
        switch (true) {
            case $reader instanceof Reader\Html:
                return new self('<!ENTITY');
            case $reader instanceof Reader\Xlsx:
            case $reader instanceof Reader\Xml:
            case $reader instanceof Reader\Ods:
            case $reader instanceof Reader\Gnumeric:
                return new self('<!DOCTYPE');
            default:
                return new self('<!DOCTYPE');
        }
    }

<<<<<<< HEAD
    private function identifyLibxmlDisableEntityLoaderAvailability()
=======
    public static function threadSafeLibxmlDisableEntityLoaderAvailability()
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    {
        if (PHP_MAJOR_VERSION == 7) {
            switch (PHP_MINOR_VERSION) {
                case 2:
                    return PHP_RELEASE_VERSION >= 1;
                case 1:
                    return PHP_RELEASE_VERSION >= 13;
                case 0:
                    return PHP_RELEASE_VERSION >= 27;
            }

            return true;
        }

        return false;
    }

<<<<<<< HEAD
=======
    private function disableEntityLoaderCheck()
    {
        if (Settings::getLibXmlDisableEntityLoader()) {
            $libxmlDisableEntityLoaderValue = libxml_disable_entity_loader(true);

            if (self::$libxmlDisableEntityLoaderValue === null) {
                self::$libxmlDisableEntityLoaderValue = $libxmlDisableEntityLoaderValue;
            }
        }
    }

    public static function shutdown()
    {
        if (self::$libxmlDisableEntityLoaderValue !== null) {
            libxml_disable_entity_loader(self::$libxmlDisableEntityLoaderValue);
            self::$libxmlDisableEntityLoaderValue = null;
        }
    }

    public function __destruct()
    {
        self::shutdown();
    }

>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    public function setAdditionalCallback(callable $callback)
    {
        $this->callback = $callback;
    }

<<<<<<< HEAD
=======
    private function toUtf8($xml)
    {
        $pattern = '/encoding="(.*?)"/';
        $result = preg_match($pattern, $xml, $matches);
        $charset = strtoupper($result ? $matches[1] : 'UTF-8');

        if ($charset !== 'UTF-8') {
            $xml = mb_convert_encoding($xml, 'UTF-8', $charset);

            $result = preg_match($pattern, $xml, $matches);
            $charset = strtoupper($result ? $matches[1] : 'UTF-8');
            if ($charset !== 'UTF-8') {
                throw new Reader\Exception('Suspicious Double-encoded XML, spreadsheet file load() aborted to prevent XXE/XEE attacks');
            }
        }

        return $xml;
    }

>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    /**
     * Scan the XML for use of <!ENTITY to prevent XXE/XEE attacks.
     *
     * @param mixed $xml
     *
     * @throws Reader\Exception
     *
     * @return string
     */
    public function scan($xml)
    {
<<<<<<< HEAD
        if ($this->libxmlDisableEntityLoader) {
            $previousLibxmlDisableEntityLoaderValue = libxml_disable_entity_loader(true);
        }

        $pattern = '/encoding="(.*?)"/';
        $result = preg_match($pattern, $xml, $matches);
        $charset = $result ? $matches[1] : 'UTF-8';

        if ($charset !== 'UTF-8') {
            $xml = mb_convert_encoding($xml, 'UTF-8', $charset);
        }
=======
        $this->disableEntityLoaderCheck();

        $xml = $this->toUtf8($xml);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a

        // Don't rely purely on libxml_disable_entity_loader()
        $pattern = '/\\0?' . implode('\\0?', str_split($this->pattern)) . '\\0?/';

<<<<<<< HEAD
        try {
            if (preg_match($pattern, $xml)) {
                throw new Reader\Exception('Detected use of ENTITY in XML, spreadsheet file load() aborted to prevent XXE/XEE attacks');
            }

            if ($this->callback !== null && is_callable($this->callback)) {
                $xml = call_user_func($this->callback, $xml);
            }
        } finally {
            if (isset($previousLibxmlDisableEntityLoaderValue)) {
                libxml_disable_entity_loader($previousLibxmlDisableEntityLoaderValue);
            }
=======
        if (preg_match($pattern, $xml)) {
            throw new Reader\Exception('Detected use of ENTITY in XML, spreadsheet file load() aborted to prevent XXE/XEE attacks');
        }

        if ($this->callback !== null && is_callable($this->callback)) {
            $xml = call_user_func($this->callback, $xml);
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        }

        return $xml;
    }

    /**
     * Scan theXML for use of <!ENTITY to prevent XXE/XEE attacks.
     *
     * @param string $filestream
     *
     * @throws Reader\Exception
     *
     * @return string
     */
    public function scanFile($filestream)
    {
        return $this->scan(file_get_contents($filestream));
    }
}
