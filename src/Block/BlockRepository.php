<?php namespace Pixney\ThreeColumnsBlockExtension\Block;

use Pixney\ThreeColumnsBlockExtension\Block\Contract\BlockRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BlockRepository extends EntryRepository implements BlockRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BlockModel
     */
    protected $model;

    /**
     * Create a new BlockRepository instance.
     *
     * @param BlockModel $model
     */
    public function __construct(BlockModel $model)
    {
        $this->model = $model;
    }
}
