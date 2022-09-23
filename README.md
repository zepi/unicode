# unicode
A library with all unicode blocks. For every block the library contains the english and the german name as well as the start and end code and the regex pattern to match the block.

```text
composer require zepi/unicode
```

## Usage
To use the library, use the following options:

### a) Use the `UnicodeIndex`
```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

use zepi\Unicode\UnicodeIndex;

$unicodeIndex = new UnicodeIndex();

// Get all blocks
var_dump($unicodeIndex->getIndex());

// Get a block by key
var_dump($unicodeIndex->getBlockByKey('BasicLatin'));
```

### b) Initialize the block directly
```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

use zepi\Unicode\Block\BasicLatinBlock;

$basicLatinBlock = new BasicLatinBlock();

var_dump($basicLatinBlock);
```

## License

MIT (see [LICENSE](LICENSE))

## Copyright

Copyright 2022 Matthias Zobrist