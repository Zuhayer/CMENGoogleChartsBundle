<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Months
{
    /**
     * @var string
     */
    protected $format;

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }
}