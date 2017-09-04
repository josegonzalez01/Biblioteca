<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Penalty;
use App\TypePenalty;
use DateTime;

class PenaltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function autentificacion(){

         if(Auth::User() != null){//esta logeado
           if(Auth::User()->employee2() == null){//verficiaca si no  es empleado
              Auth::logout();
           }
         }
       }
    public function index()
    {
       $this->autentificacion();

        /*
        \App\Penalty::create([
         'userId' => 1,
         'employeeId' => 1,
         'penaltyOrderId' => 1,
         'categoryId' => 1,
         'objectId' => 1,
         'startPenalty' => null,
         'endPenalty' => null,
         'activity' => 1,
         'event' => null,
      ]);
      */

        $users = User::with(['user_type'])->get();
        return view('admin.md_sanciones.index',[

            "users"=>$users,
            'pedidos'=>null

            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario=User::with(['penalties'])->find($request->usuarioId);
        $tipoSancion=TypePenalty::with(['penaltyOrders'])->find($request->typePenalty);
        if($usuario->ultimatePunishmentId!=null){
            //dd("no esta vacio");
        }else{
            //dd("esta vacio");
            //$request->typePenalty;
            //$fecha_actual=date("d/m/Y");
            //$fecha= time() ;
            $fecha = new DateTime ( 'NOW' );
            //dd($fecha->format('h/i/s'));
            $fecha->modify( '-5 hour' );
            $arregloCastigos=$usuario->penalties;
            $contador=0;
            foreach($arregloCastigos as $castigo){
                if($castigo->belongsTime){
                    $contador++;
                }
            }
            //$contador+1;
            $cantidadOrden=count($tipoSancion->penaltyOrders);
            if(($contador+1)>$cantidadOrden){
                //Esta mal
                dd("Esta mal");
            }else{
                $orden=$tipoSancion->penaltyOrders[$contador];
                if($orden->penaltyTime == "ciclo"){
                    \App\Penalty::create([
                         'userId' => $request->usuarioId,
                         'employeeId' => 1,
                         'penaltyOrderId' => $orden->id,
                         'categoryId' => 1,
                         'objectId' => 1,
                         'startPenalty' => $fecha,
                         'endPenalty' => null,
                         'activity' => 1,
                         'event' => $request->contexto,
                         'belongsTime' => true,
                      ]);
                }
                else{
                    $fechaFinal=$fecha;
                    $fechaFinal->modify('+'.$orden->penaltyTime.' day');
                    $sanciones=Penalty::all();
                    \App\Penalty::create([
                         'userId' => $request->usuarioId,
                         'employeeId' => 1,
                         'penaltyOrderId' => $orden->id,
                         'categoryId' => 1,
                         'objectId' => 1,
                         'startPenalty' => $fecha,
                         'endPenalty' => $fechaFinal,
                         'activity' => 1,
                         'event' => $request->contexto,
                         'belongsTime' => true,
                      ]);
                }
                $sanciones=Penalty::all();

                $usuario->ultimatePunishmentId=count($sanciones);
                
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penalties = Penalty::get();
        return view('admin.md_sanciones.show',[
            "penalties"=>$penalties
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
