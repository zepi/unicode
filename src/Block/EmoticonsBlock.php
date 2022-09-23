<?php

namespace zepi\Unicode\Block;

class EmoticonsBlock extends AbstractBlock
{
    protected string $key = 'Emoticons';
    protected array $names = [
        'en' => 'Emoticons',
        'de' => 'Smileys',
    ];
    protected int $blockStart = 0x1F600;
    protected int $blockEnd = 0x1F64F;
    protected string $regex = '/[\x{1F600}-\x{1F64F}]/u';
}