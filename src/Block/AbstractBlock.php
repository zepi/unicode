<?php

namespace zepi\Unicode\Block;

abstract class AbstractBlock
{
    protected string $key = '';
    protected array $names = ['en' => ''];
    protected int $blockStart = 0;
    protected int $blockEnd = 0;
    protected string $regex = '';

    public function getKey(): string
    {
        return $this->key;
    }

    public function getName($locale): string
    {
        if (isset($this->names[$locale])) {
            return $this->names[$locale];
        }

        if (strpos($locale, '_') !== false) {
            $mainLocale = substr($locale, 0, 2);

            if ($mainLocale !== false && isset($this->names[$mainLocale])) {
                return $this->names[$mainLocale];
            }
        }

        return $this->names['en'];
    }

    public function getBlockStart(): int
    {
        return $this->blockStart;
    }

    public function getBlockEnd(): int
    {
        return $this->blockEnd;
    }

    public function getRegex(): string
    {
        return $this->regex;
    }
}