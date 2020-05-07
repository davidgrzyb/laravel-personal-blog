<?php

function getAsset(string $asset)
{
    if (config('blog.cdn.enabled')) {
        return config('blog.cdn.url') . asset($asset);
    }

    return asset($asset);
}

function getReadTime($body): string
{
    // Only count words in our estimation
    $words = str_word_count(strip_tags($body));

    // Divide by the average number of words per minute
    $minutes = ceil($words / 250);

    return sprintf('%d %s %s', $minutes, Str::plural(__('canvas::app.min'), $minutes), __('canvas::app.read'));
}