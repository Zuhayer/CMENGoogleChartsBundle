<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\GeoChart\GeoChartOptions;

/**
 * @author Christophe Meneses
 */
class GeoChart extends Chart
{
    /**
     * @var GeoChartOptions
     */
    protected $options;


    public function __construct()
    {
        parent::__construct();

        $this->options = new GeoChartOptions();
    }


    /**
     * @inheritdoc
     */
    protected function getType()
    {
        return 'GeoChart';
    }

    /**
     * @inheritdoc
     */
    protected function getLibrary()
    {
        return 'visualization';
    }

    /**
     * @inheritdoc
     */
    protected function getPackage()
    {
        return 'geochart';
    }

    /**
     * @return GeoChartOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
}
