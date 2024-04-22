<?php

namespace App\Http\Controllers;

use App\Models\Horoscop;
use App\Models\Lang;
use App\Http\Requests\StoreHoroscopRequest;
use App\Http\Requests\UpdateHoroscopRequest;
use Carbon\Carbon;

class HoroscopController extends Controller
{
    /**
     * Mostra una llista dels recursos.
     */
    public function index()
    {
        // A implementar: Retorna una vista amb una llista dels horòscops
    }

    /**
     * Mostra el formulari per a crear un nou recurs.
     */
    public function create()
    {
        // A implementar: Retorna una vista amb el formulari per a crear un nou horòscop
    }

    /**
     * Emmagatzema un nou recurs creat.
     */
    public function store(StoreHoroscopRequest $request)
    {
        // A implementar: Emmagatzema les dades enviades pel formulari en la base de dades
    }

    /**
     * Mostra el recurs especificat.
     */
    public function show(Horoscop $horoscop)
    {
        // A implementar: Retorna una vista amb els detalls d'un horòscop específic
    }

    /**
     * Mostra el formulari per a editar el recurs especificat.
     */
    public function edit(Horoscop $horoscop)
    {
        // A implementar: Retorna una vista amb el formulari per a editar un horòscop específic
    }

    /**
     * Actualitza el recurs especificat emmagatzemat.
     */
    public function update(UpdateHoroscopRequest $request, Horoscop $horoscop)
    {
        // A implementar: Actualitza les dades d'un horòscop específic en la base de dades
    }

    /**
     * Elimina el recurs especificat emmagatzemat.
     */
    public function destroy(Horoscop $horoscop)
    {
        // A implementar: Elimina un horòscop específic de la base de dades
    }

    /**
     * Importa horòscops des d'una font externa i els emmagatzema a la base de dades.
     */
    public function importarHoroscop()
    {
        // Obtenim totes les llengües disponibles
        $langs = Lang::all();

        // Definim els signes del zodíac en un array
        $horoscops = ['aquarius', 'pisces', 'aries', 'taurus', 'gemini', 'cancer', 'leo', 'virgo', 'libra', 'scorpio', 'sagittarius', 'capricorn'];
        $temps = ['today'];

        // Recorrem els signes del zodíac i els temps
        foreach ($temps as $temp) {
            foreach ($horoscops as $horoscop) {
                // Obtenim el text del horòscop des d'una font externa
                $text = file_get_contents("https://www.astrology-zodiac-signs.com/api/call.php?time=$temp&sign=$horoscop");
                // Emmagatzemem el horòscop a la base de dades
                Horoscop::create([
                    'date' => Carbon::now()->format('d/m/y'),
                    'lang' => 'en',  // S'assigna anglès com a idioma per defecte, podria ser variable segons la configuració de l'aplicació
                    'sign' => $horoscop,
                    'time' => 'today',  // El temps pot variar, aquí està fixat a 'avui'
                    'phrase' => $text,  // La frase del horòscop obtinguda de la font externa
                ]);
            }
        }

        // Retornem un missatge de confirmació
        return response()->json(['message' => 'Horòscop importat']);
    }
}
