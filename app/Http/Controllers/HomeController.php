<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use DateTime;

class HomeController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function storeReservation(Request $request)
    {

        $rules = $this->getRules();
        $validated = $request->validate($rules);

        $reservation = new Reservation();
        $reservation = $this->formToModel($validated, $reservation);

        $reservation->save();

        return redirect()->route('main.index', []);
    }

    public function formToModel(array $validated, $reservation)

    {
        $reservation->nom = $validated['form_name'];
        $reservation->tel = $validated['tel'];
        $reservation->date = $validated['date-picker'];
        $reservation->heure = $validated['time-picker'];
        $reservation->personne = $validated['no_of_persons'];
        $now = new DateTime();
        $reservation->date = $now->format('Y-m-d');
        $reservation->heure = $now->format('H:i');
        // if (empty($validated['commentaires'])) {
        //     $reservation->commentaires = '';
        // } else {
        //     $reservation->commentaires = $validated['commentaires'];
        // }
        // if ($validated['confirmation'] == '0') {
        //     $reservation->confirmation = 0;
        // } elseif ($validated['confirmation'] == '1') {
        //     $reservation->confirmation = 1;
        // } else {
        //     $reservation->confirmation = null;
        // }
        return $reservation;
    }

    public function test()
    {
        return view('main.test');
    }

    public function postTest(Request $request)
    {
        $rules = $this->getRules();
        $validated = $request->validate($rules);

        $reservation = new Reservation();
        // $reservation = $this->formToModel($validated, $reservation);
        // $reservation->save();

    }

    public function getRules()
    {
        $today = new DateTime();
        // on fixe l'heure et les minutes à zéro
        $today->setTime(0, 0);
        // on fixe l'heure et les minutes à zéro
        return [
            "form_name" => ['required'],
            "email" => ['required'],
            "tel" => ['required'],
            "no_of_persons" => ['required'],
            "date-picker" => ['required', 'date', 'after_or_equal:' . $today->format('Y-m-d')],
            "time-picker" => ['required'],
        ];
    }
}
