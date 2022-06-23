<?php

namespace CodelyTv\Mooc\Videos\Application\Update;

use CodelyTv\Mooc\Videos\Domain\VideoId;
use CodelyTv\Mooc\Videos\Domain\VideoTitle;
use CodelyTv\Shared\Domain\Bus\Command\CommandHandler;

class UpdateVideoTitleCommandHandler implements CommandHandler
{
    private VideoTitleUpdater $updater;

    public function __construct(VideoTitleUpdater $updater)
    {
        $this->updater = $updater;
    }

    public function __invoke(UpdateVideoTitleCommand $command): void
    {
        $id     = new VideoId($command->id());
        $title  = new VideoTitle($command->title());

        $this->updater->__invoke($id, $title);
    }
}