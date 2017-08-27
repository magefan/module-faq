<?php
/**
 * Copyright © 2017 Magefan (support@magefan.com). All rights reserved.
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 *
 * Glory to Ukraine! Glory to the heroes!
 */

namespace Magefan\Faq\Block;

/**
 * Faq home block
 */
class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * Retrieve welcome text
     * @return string
     */
    public function getWelcomeText()
    {
        return 'Hello World';
    }
}
