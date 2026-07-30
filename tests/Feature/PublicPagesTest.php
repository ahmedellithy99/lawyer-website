<?php

test('all public pages render successfully', function () {
    $urls = ['/', '/about', '/practice-areas', '/founder', '/contact', '/privacy-policy', '/legal-disclaimer'];

    foreach (array_keys(config('lawoffice.practices')) as $slug) {
        $urls[] = "/practice-areas/{$slug}";
    }

    foreach ($urls as $url) {
        $this->get($url)->assertOk();
    }
});
