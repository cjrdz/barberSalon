<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view for appointment show
        $appointment = Appointment::select(

            "appointment.id_appointment",
            "appointment.date",
            "appointment.fk_user",
            "appointment.fk_status",
            "appointment.fk_service",

            "users.id",
            "users.name as user",

            "status.id_status",
            "status.name_status as status",

            "service.id_service",
            "service.name_service as service",

        )
        ->join("users", "users.id", "=", "appointment.fk_user")
        ->join("status", "status.id_status", "=", "appointment.fk_status")
        ->join("service", "service.id_service", "=", "appointment.fk_service")
        ->get();

        return view('/appointment/AppointmentShow')->with(['appointment' => $appointment]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        $appointment = Appointment::all();
        $users = User::all();
        $status = Status::all();
        $service = Service::all();
        // $tarea = TareaModel::all();
        return view('/appointment/AppointmentCreate')
        ->with([
        'appointment' => $appointment,
        'users' => $users,
        'status' => $status,
        'service' => $service]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
