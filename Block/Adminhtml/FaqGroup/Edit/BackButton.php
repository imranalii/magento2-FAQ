<?php

/**
 * ImranAli
 * Copyright (C) 2020 ImranAli <imibrohi@gmail.com>
 *
 * @package ImranAli_Faq
 * @copyright Copyright (c) 2020 ImranAli
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author Imran Ali <imibrohi@gmail.com>
 */

namespace ImranAli\Faq\Block\Adminhtml\FaqGroup\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class BackButton extends GenericButton implements ButtonProviderInterface
{

    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Back'),
            'on_click' => sprintf("location.href = '%s';", $this->getBackUrl()),
            'class' => 'back',
            'sort_order' => 10
        ];
    }

    /**
     * Get URL for back (reset) button
     *
     * @return string
     */
    public function getBackUrl()
    {
        return $this->getUrl('*/*/');
    }
}
