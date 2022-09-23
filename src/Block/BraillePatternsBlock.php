<?php

/**
 * The BraillePatternsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BraillePatternsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BraillePatternsBlock extends AbstractBlock
{
    protected string $key = 'BraillePatterns';
    protected array $names = [
        'en' => 'Braille Patterns',
        'de' => 'Braille-Zeichen',
    ];
    protected int $blockStart = 0x2800;
    protected int $blockEnd = 0x28FF;
    protected string $regex = '/[\x{2800}-\x{28FF}]/u';
}