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
     * @param $svgFilename
     * @param $outputFilename
     * @param $format 'png', 'ps', 'eps', 'pdf', 'plain-svg'
     * @throws Exception
     */
    public function convert($svgFilename, $outputFilename, $format)
    {
        $ink = new \Inkscape($svgFilename);
        $ink->export($format, $outputFilename);
    }
}