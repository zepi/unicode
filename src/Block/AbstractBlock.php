<?php

/**
 * The AbstractBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AbstractBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
abstract class AbstractBlock
{
    /**
     * @var string
     */
    protected string $key = '';

    /**
     * @var array
     */
    protected array $names = ['en' => ''];

    /**
     * @var int
     */
    protected int $blockStart = 0;

    /**
     * @var int
     */
    protected int $blockEnd = 0;

    /**
     * @var string
     */
    protected string $regex = '';

    /**
     * Returns the string of the block
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Returns the name for the given locale
     *
     * @param string $locale
     * @return string
     */
    public function getName(string $locale): string
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

    /**
     * Returns all the available names for the block
     *
     * @return array
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * Returns the block start value
     *
     * @return int
     */
    public function getBlockStart(): int
    {
        return $this->blockStart;
    }

    /**
     * Returns the block end value
     *
     * @return int
     */
    public function getBlockEnd(): int
    {
        return $this->blockEnd;
    }

    /**
     * Returns the regex pattern as string
     * s
     * @return string
     */
    public function getRegex(): string
    {
        return $this->regex;
    }
}