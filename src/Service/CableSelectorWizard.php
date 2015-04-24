<?php

namespace Service;

class CableSelectorWizard 
{
    public function getStep2FormKey($categorySlug)
    {
        $result = '';
        switch ($categorySlug) {
            case 'modulation':
                $result = 'two-gears-selector';
                break;
            case 'alim':
                $result = 'single-gear-selector';
                break;
            case 'hp':
                $result = 'amp-speakers-selector';
                break;
        }

        return $result;
    }
}
