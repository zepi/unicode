<?php

/**
 * The IdeographicDescriptionCharactersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The IdeographicDescriptionCharactersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class IdeographicDescriptionCharactersBlock extends AbstractBlock
{
    protected string $key = 'IdeographicDescriptionCharacters';
    protected array $names = [
        'en' => 'Ideographic Description Characters',
        'de' => 'Ideographische Beschreibungszeichen',
    ];
    protected int $blockStart = 0x2FF0;
    protected int $blockEnd = 0x2FFF;
    protected string $regex = '/[\x{2FF0}-\x{2FFF}]/u';
}