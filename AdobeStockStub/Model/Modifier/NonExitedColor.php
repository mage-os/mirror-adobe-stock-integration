<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\AdobeStockStub\Model\Modifier;

use Magento\Framework\DataObject;

/**
 * Modify File if the search request is on non existed color.
 */
class NonExitedColor implements ModifierInterface
{
    /**
     * Modify file data if request is for the non existed color.
     *
     * @param array $files
     * @param string $url
     * @param array $headers
     *
     * @return array
     */
    public function modify(array $files, string $url, array $headers): array
    {
        return (preg_match('(\[colors\]=none)', $url)) ?
            []
            : $files;
    }
}
