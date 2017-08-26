<?php
/**
 * Copyright © 2017 Magefan (support@magefan.com). All rights reserved.
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 *
 * Glory to Ukraine! Glory to the heroes!
 */
namespace Magefan\Faq\Controller\Index;

/**
 * FAQ home page view
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * View FAQ homepage action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        echo 'Hello World';
        exit();
    }

}
