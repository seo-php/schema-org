<?php

declare(strict_types=1);

use Eolica\CodingStandard\Eolica;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([__DIR__.'/generator', __DIR__.'/src', __DIR__.'/tests'])
    ->withRootFiles()
    ->withSets([Eolica::DEFAULT])
    ->withSkip([__DIR__.'/src/Properties', __DIR__.'/src/Types'])
;
