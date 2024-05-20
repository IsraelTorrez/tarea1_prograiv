<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bonuses;

class BonusesController extends Controller
{
/**
     * Lista de todos los Bonos
     * Tipo-metodo: GET
     * @author-Estudiante: Israel Mariaca
     */
    public function listBonuses(){
        $bonuses = bonuses::get();
        
        return response()->json([
            'bonuses' => $bonuses,
            'status'   => true
        ]);
    }

    public function findBonuses($codigo){
        $bonuses = Bonuses::findOrFail($codigo);
        
        return response()->json([
            'bonuses' => $bonuses,
            'status'   => true
        ]);
    }


    /**
     * Realiza el registro de un nuevo Bono
    * Tipo-metodo: POST
     * @author-Estudiante: Israel Mariaca
     */
    public function saveBonuses(Request $request){
        // Crea un nuevo usuario en la base de datos
        try{
            $bonuses = new Bonuses;
            $bonuses->name    = $request->name;
            $bonuses->description   = $request->description;
            $bonuses->Bonus_type   = $request->Bonus_type;
            $bonuses->amount = $request->amount;
            $bonuses->exchange_rate = $request->exchange_rate;
            $bonuses->state= $request->state;

            $bonuses->save();

            return response()->json([
                'message' => 'Bono registrado con éxito, gracias',
                'status'  => true]);

        }catch(Exception $e){
            return response()->json([
                'message' => 'Error en registro de bono, intente de nuevo',
                'status'  => false]);
        }
    }

    /**
     * Realiza la actualizacion de un nuevo Bono
     * Tipo-metodo: POST
     * @author-Estudiante: Israel Mariaca
     */
    public function updateBonuses(Request $request, $codigo){
        // Crea un nuevo usuario en la base de datos
        try{
            $bonuses = Bonuses::findOrFail($codigo);
           $bonuses->name    = $request->name;
            $bonuses->description   = $request->description;
            $bonuses->Bonus_type   = $request->Bonus_type;
            $bonuses->amount = $request->amount;
            $bonuses->exchange_rate = $request->exchange_rate;
            $bonuses->state= $request->state;

            $bonuses->update();

            return response()->json([
                'message' => 'Bono actualizado con éxito, gracias',
                'status'  => true]);

        }catch(Exception $e){
            return response()->json([
                'message' => 'Error en actualizacion de bono, Intente de nuevo',
                'status'  => false]);
        }
    }
}
