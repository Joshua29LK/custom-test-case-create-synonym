<?php

namespace Magento\Search\Test\TestCase;

use Magento\Mtf\TestCase\Injectable;
use Magento\Search\Test\Fixture\Synonym;
use Magento\Search\Test\Page\Adminhtml\SynonymsIndex;
use Magento\Search\Test\Page\Adminhtml\SynonymsNew;

/**
 * Steps:
 * 1. Log in to Admin.
 * 2. Open the Search Synonym page.
 * 3. Click the "New Synonym Group" button.
 * 4. Enter data according to a data set. For each variation, the synonyms must have unique identifiers.
 * 5. Click the "Save Synonym Group" button.
 * 6. Verify the synonym group saved successfully
 */
class CreateSynonymEntityTest extends Injectable
{
    /**
     * Search Synonyms Index page.
     *
     * @var SynonymsIndex
     */
    private $synonymsIndex;

    /**
     * New Synonym Group page.
     *
     * @var SynonymsNew
     */
    private $synonymsNew;

    /**
     * Inject pages.
     *
     * @param SynonymsIndex $synonymsIndex
     * @param SynonymsNew $synonymsNew
     * @return void
     */
    public function __inject(
        SynonymsIndex $synonymsIndex,
        SynonymsNew $synonymsNew
    ) {
        $this->synonymsIndex = $synonymsIndex;
        $this->synonymsNew = $synonymsNew;
    }

    /**
     * Create Synonym group test.
     *
     * @param Synonym $synonym
     * @return void
     */
    public function test(Synonym $synonym)
    {
        // Steps
        $this->synonymsIndex->open();
        $this->synonymsIndex->getPageActionsBlock()->addNew();
        $this->synonymsNew->getSynonymForm()->fill($synonym);
        $this->synonymsNew->getFormPageActions()->save();
    }
}