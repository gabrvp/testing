<?php

use Webmozart\Assert\Assert;

use function StringUtils\capitalize;

Assert::eq(capitalize('hello'), 'Hello');