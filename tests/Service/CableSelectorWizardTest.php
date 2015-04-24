<?php

namespace Test\Service;

use Service\CableSelectorWizard;

class CableSelectorWizardTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Service\CableSelectorWizard */
    protected $instance;

    protected function setUp()
    {
        $this->instance = new CableSelectorWizard();
    }

    /**
     * @TODO handle exception
     */
    public function testGetStep2FormKeyShouldReturnString()
    {
        // PREPARE
        // RUN
        $result = $this->instance->getStep2FormKey('foo');
        // ASSERT
        $this->assertInternalType('string', $result);
    }

    public function getDataForTestGetStep2FormKeyDoesTheJob()
    {
        return [
            ['modulation', 'two-gears-selector'],
            ['alim', 'single-gear-selector'],
            ['hp', 'amp-speakers-selector'],
        ];
    }

    /**
     * @dataProvider getDataForTestGetStep2FormKeyDoesTheJob
     */
    public function testGetStep2FormKeyDoesTheJob(
        $categorySlug,
        $expectedResult
    ) {
        // PREPARE

        // RUN
        $result = $this->instance->getStep2FormKey($categorySlug);

        // ASSERT
        $this->assertEquals($expectedResult, $result);
    }
}
