<?php

namespace CodelyTv\Mooc\Videos\Application\Update;

use CodelyTv\Shared\Domain\Bus\Command\Command;

final class UpdateVideoTitleCommand implements Command
{
    public function __construct(
        private readonly string $id,
        private readonly string $title
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }
}
