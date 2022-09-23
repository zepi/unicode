<?php

/**
 * The SpacingModifierLettersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SpacingModifierLettersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SpacingModifierLettersBlock extends AbstractBlock
{
    protected string $key = 'SpacingModifierLetters';
    protected array $names = [
        'en' => 'Spacing Modifier Letters',
        'de' => 'Spacing Modifier Letters',
    ];
    protected int $blockStart = 0x02B0;
    protected int $blockEnd = 0x02FF;
    protected string $regex = '/[\x{02B0}-\x{02FF}]/u';
}