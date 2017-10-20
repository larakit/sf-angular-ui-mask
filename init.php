<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-mask')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('mask.js');

\Larakit\LkNgModule::register('ui.mask');