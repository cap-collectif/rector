<?php

namespace Rector\Php71\Tests\Rector\ClassConst\PublicConstantVisibilityRector\Fixture;

final class SomeClass
{
    const VALUE = 'hey';

    public const ALREADY = 'yep';

    private const HEARTH = 'bum';
}

?>
-----
<?php

namespace Rector\Php71\Tests\Rector\ClassConst\PublicConstantVisibilityRector\Fixture;

final class SomeClass
{
    public const VALUE = 'hey';

    public const ALREADY = 'yep';

    private const HEARTH = 'bum';
}

?>
