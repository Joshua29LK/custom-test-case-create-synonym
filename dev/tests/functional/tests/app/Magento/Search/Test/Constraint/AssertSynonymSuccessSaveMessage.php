<?php

namespace Magento\Search\Test\Constraint;

use Magento\Search\Test\Page\Adminhtml\SynonymsIndex;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assertion to check Success Save Message for Synonyms.
 */
class AssertSynonymSuccessSaveMessage extends AbstractConstraint
{
    const SUCCESS_MESSAGE = 'You saved the synonym group.';

    /**
     * Check Success Save Message for Synonyms.
     *
     * @param SynonymsIndex $synonymsIndex
     * @return void
     */
    public function processAssert(SynonymsIndex $synonymsIndex)
    {
        $actualMessage = $synonymsIndex->getMessagesBlock()->getSuccessMessage();
        \PHPUnit_Framework_Assert::assertEquals(
            self::SUCCESS_MESSAGE,
            $actualMessage,
            'Wrong success message is displayed.'
            . "\nExpected: " . self::SUCCESS_MESSAGE
            . "\nActual: " . $actualMessage
        );
    }

    /**
     * Text success save message is displayed
     *
     * @return string
     */
    public function toString()
    {
        return 'Assert that success message is displayed.';
    }
}