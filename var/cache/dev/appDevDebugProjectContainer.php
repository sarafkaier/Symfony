<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSuoqien\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSuoqien/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSuoqien.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSuoqien\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerSuoqien\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Suoqien',
    'container.build_id' => 'a070901f',
    'container.build_time' => 1547046536,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerSuoqien');
