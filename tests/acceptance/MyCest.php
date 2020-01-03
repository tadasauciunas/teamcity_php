<?php

class MyCest
{
    public function testUserInsert(AcceptanceTester $I)
    {
        $I->dontSeeInDatabase('users', ['id' => 1]);
        $I->haveInDatabase('users', ['id' => 1]);
        $I->seeInDatabase('users', ['id' => 1]);
    }
}
