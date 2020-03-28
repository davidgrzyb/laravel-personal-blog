<?php

function getAsset(string $asset)
{
    if (config('blog.cdn.enabled')) {
        return config('blog.cdn.url') . asset($asset);
    }

    return asset($asset);
}