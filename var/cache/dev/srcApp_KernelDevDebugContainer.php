<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBVFEWVJ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBVFEWVJ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBVFEWVJ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBVFEWVJ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBVFEWVJ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BVFEWVJ',
    'container.build_id' => '52e89a5a',
    'container.build_time' => 1574077999,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBVFEWVJ');
