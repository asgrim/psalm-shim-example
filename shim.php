<?php
/** @noinspection AutoloadingIssuesInspection */

declare(strict_types=1);

namespace ThirdPartyLibrary
{
    if (!class_exists(A::class) && class_exists(B::class)) {
        class A extends B
        {
        }
    }
}
