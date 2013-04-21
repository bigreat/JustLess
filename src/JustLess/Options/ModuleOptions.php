<?php

namespace JustLess\Options;

use Zend\Stdlib\AbstractOptions;

/**
 *
 */
class ModuleOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $destinationDir = 'css/';

    /**
     * @var string
     */
    protected $publicDir = '../public/';

    /**
     * @var string
     */
    protected $minify = true;

    /**
     * @param $minify
     */
    public function setMinify($minify)
    {
        $this->minify = $minify;
    }

    /**
     * @return bool
     */
    public function getMinify()
    {
        return $this->minify;
    }

    /**
     * @param $destinationDir
     */
    public function setDestinationDir($destinationDir) {
        $this->destinationDir = rtrim($destinationDir, '/') . '/';
    }

    /**
     * @return string
     */
    public function getDestinationDir() {
        return $this->destinationDir;
    }

    /**
     * @param $publicDir
     */
    public function setPublicDir($publicDir) {
        $this->publicDir = rtrim($publicDir, '/') . '/';
    }

    /**
     * @return string
     */
    public function getPublicDir() {
        return $this->publicDir;
    }
}