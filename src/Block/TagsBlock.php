<?php

namespace zepi\Unicode\Block;

class TagsBlock extends AbstractBlock
{
    protected string $key = 'Tags';
    protected array $names = [
        'en' => 'Tags',
        'de' => 'Tags',
    ];
    protected int $blockStart = 0xE0000;
    protected int $blockEnd = 0xE007F;
    protected string $regex = '/[\x{E0000}-\x{E007F}]/u';
}