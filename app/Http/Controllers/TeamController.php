<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Displays the team member profile page for Jessica Lugo.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */

    public function jessicaLugo()
    {
        return view('pages.team.jessica-lugo');
    }
    /**
     * Displays the team member profile page for Oscar Merlo.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function oscarMerlo()
    {
        return view('pages.team.oscar-merlo');
    }

    /**
     * Displays the team member profile page for Glorie.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function glorieAcevedo()
    {
        return view('pages.team.glorie-acevedo');
    }
    /**
     * Displays the team member profile page for Marta.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function martaLuna()
    {
        return view('pages.team.marta-luna');
    }
    /**
     * Displays the team member profile page for Luz Ortiz.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function luzOrtiz()
    {
        return view('pages.team.luz-ortiz');
    }
    /**
     * Displays the team member profile page for Ondina Gonzalez.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function ondinaGonzalez()
    {
        return view('pages.team.ondina-gonzalez');
    }
    /**
     * Displays the team member profile page for Wilson Fernandes Junior.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function wilsonFernandes()
    {
        return view('pages.team.wilson-fernandes-junior');
    }
    /**
     * Displays the team member profile page for Shaila Munoz.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function shailaMunoz()
    {
        return view('pages.team.shaila-munoz');
    }
    /**
     * Displays the team member profile page for Coralys Santos .
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function coralysSantos()
    {
        return view('pages.team.coralys-santos');
    }
    /**
     * Displays the team member profile page for Sophia Porter.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function sophiaPorter()
    {
        return view('pages.team.sophia-porter');
    }
    /**
     * Displays the team member profile page for Jeremy.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function jeremyVilloch()
    {
        return view('pages.team.jeremy-villoch');
    }
    /**
     * Displays the team member profile page for Yahely.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function yaheliVargas()
    {
        return view('pages.team.yaheli-vargas');
    }
    /**
     * Displays the team member profile page for Maylin.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function maylinEscala()
    {
        return view('pages.team.maylin-escala');
    }
    /**
     * Displays the team member profile page for Yajaira.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function yajairaRuiz()
    {
        return view('pages.team.yajaira-ruiz');
    }
    /**
     * Displays the team member profile page for Juan Martinez.
     *
     * This method returns the view associated with profile page.
     *
     * @return \Illuminate\View\View Returns the view for team member profile.
     */
    public function juanMartinez()
    {
        return view('pages.speakers.juan-martinez');
    }


    public function davi()
    {
        return view('pages.speakers.david-vazquez-levy');
    }


    public function perea()
    {
        return view('pages.speakers.guesnerth-perea');
    }


    public function tapia()
    {
        return view('pages.speakers.lori-tapia');
    }


    public function harris()
    {
        return view('pages.speakers.marty-harris');
    }


    public function romero()
    {
        return view('pages.speakers.romero');
    }
    public function estrada()
    {
        return view('pages.speakers.wilmer-estrada');
    }
    public function oscar()
    {
        return view('pages.speakers.oscar-garcia-johnson');
    }


    public function justo()
    {
        return view('pages.speakers.justo-gonzalez');
    }

    public function alma()
    {
        return view('pages.speakers.alma-tinoco-ruiz');
    }

    public function zareth()
    {
        return view('pages.speakers.alexandra-zareth');
    }
    public function salvatierra()
    {
        return view('pages.speakers.alexia-salvatierra');
    }
    public function canales()
    {
        return view('pages.speakers.andrea-canales');
    }
    public function segura()
    {
        return view('pages.speakers.harold-segura');
    }
    public function anabalon()
    {
        return view('pages.speakers.pablo-anabalon');
    }
    public function delgado()
    {
        return view('pages.speakers.yenny-delgado');
    }

    /*   *

    Route::get('/alexandra-zareth', [TeamController::class, 'zareth'])->name('zareth');
    Route::get('/alexia-salvatierra', [TeamController::class, 'salvatierra'])->name('salvatierra');
    Route::get('/andrea-canales', [TeamController::class, 'canales'])->name('canales');
    Route::get('/harold-segura', [TeamController::class, 'segura'])->name('segura');
    Route::get('/pablo-anabalon', [TeamController::class, 'anabalon'])->name('anabalon');
    Route::get('/yenny-delgado', [TeamController::class, 'delgado'])->name('delgado');
    */



}
