<?php

use FunctionalTester;

class TaskCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/');
    }

    // tests
    public function seDeschidePagina(FunctionalTester $I)
    {
        $I->see('New Task', 'div');
    }

    public function adaugaTask(FunctionalTester $I)
    {
        $I->fillField(['name' => 'name'], 'Task 1');
        $I->click('Add Task');
    }

    public function verificaAdaugareTask(FunctionalTester $I)
    {
        $I->see('Task 1', 'div');
    }

    public function stergeTask(FunctionalTester $I)
    {
        $I->fillField(['name' => 'name'], 'Task 2');
        $I->click('Add Task');
        $I->click('//*[@id="app-layout"]/div/div/div[2]/div[2]/table/tbody/tr[2]/td[2]/form/button');
    }

    public function verificaStergereTask(FunctionalTester $I)
    {
        $I->dontSee('Task 2', 'div');
    }
}
