<?php
namespace Magelearn\Customsection\CustomerData;
use Magento\Customer\CustomerData\SectionSourceInterface;
 
class CustomSection implements SectionSourceInterface
{
    public function getSectionData()
    {
        return [
            'customdata' => "We are getting data from custom section",
        ];
    }
}