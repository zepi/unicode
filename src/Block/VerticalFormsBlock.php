<?php

namespace zepi\Unicode\Block;

class VerticalFormsBlock extends AbstractBlock
{
    protected string $key = 'VerticalForms';
    protected array $names = [
        'en' => 'Vertical Forms',
        'de' => 'Vertikale Formen',
    ];
    protected int $blockStart = 0xFE10;
    protected int $blockEnd = 0xFE1F;
    protected string $regex = '/[\x{FE10}-\x{FE1F}]/u';
}