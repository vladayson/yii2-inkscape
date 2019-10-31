<?php

namespace vladayson\Inkscape;

use Exception;
use yii\base\Component;

require_once dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'inkscape.php';

/**
 * Class Inkscape
 * @package vladayson\Inkscape
 */
class Inkscape extends Component
{
    /**
     * @var null|int
     */
    private $width = null;

    /**
     * @var null|int
     */
    private $height = null;

    /**
     * @param $svgFilename
     * @param $outputFilename
     * @param $format 'png', 'ps', 'eps', 'pdf', 'plain-svg'
     * @throws Exception
     */
    public function convert($svgFilename, $outputFilename, $format)
    {
        $ink = new \Inkscape($svgFilename);
        if ($this->width && $this->height) {
            $ink->setSize($this->width, $this->height);
        }
        $ink->export($format, $outputFilename);
    }

    /**
     * @param $width
     * @param $height
     * @return $this
     */
    public function setSize($width, $height): self
    {
        $this->width = $width;
        $this->height = $height;

        return $this;
    }
}