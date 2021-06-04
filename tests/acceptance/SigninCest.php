<?php

class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function signInSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Search');
    }


}