<?php

use App\Models\Nickname;

beforeEach(function (): void {
    $this->nickname = Nickname::factory()->create();
});

it('can create a new nickname', function (): void {
    $this->assertDatabaseHas('nicknames', $this->nickname->toArray());
});

it('can update a nickname', function (): void {
    $newData = [
        'name' => 'NewNickname',
        'sort' => 50,
    ];

    $this->nickname->update($newData);

    $this->assertDatabaseHas('nicknames', $newData);
});

it('can delete a nickname', function (): void {
    $this->nickname->delete();

    $this->assertDatabaseMissing('nicknames', $this->nickname->toArray());
});
