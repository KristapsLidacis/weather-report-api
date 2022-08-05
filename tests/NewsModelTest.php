<?php

test('Gets everything from NewsModel class', function () {
    $NewsTrhead = new \App\Models\NewsModel('crash course','Bitcoin Crashes', 'Kristaps', 'All goes according to plan', 'www.crash.kill', 'www/crash.kill/img.jpg', '2022-21-13');

    expect($NewsTrhead->getTitle())->toBe('Bitcoin Crashes');
    expect($NewsTrhead->getAuthor())->toBe('Kristaps');
    expect($NewsTrhead->getDescription())->toBe('All goes according to plan');
    expect($NewsTrhead->getUrl())->toBe('www.crash.kill');
    expect($NewsTrhead->getImageUrl())->toBe('www/crash.kill/img.jpg');
    expect($NewsTrhead->getPublishedTime())->toBe('2022-21-13');

});