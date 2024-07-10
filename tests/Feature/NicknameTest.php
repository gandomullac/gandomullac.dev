<?php

use App\Models\Nickname;

beforeEach(function () {
    $this->nickname = Nickname::factory()->create();
});

it('can create a new nickname', function () {
    $this->assertDatabaseHas('nicknames', $this->nickname->toArray());
});

it('can update a nickname', function () {
    $newData = [
        'name' => 'NewNickname',
        'sort' => 50,
    ];

    $this->nickname->update($newData);

    $this->assertDatabaseHas('nicknames', $newData);
});

it('can delete a nickname', function () {
    $this->nickname->delete();

    $this->assertDatabaseMissing('nicknames', $this->nickname->toArray());
});
