<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use DataTables;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Tournament::with('status')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return view('components.status_badge', ['row' => $row]);
                })
                ->addColumn('action', function ($row) {
                    return view('settings.tournaments.actions', ['row' => $row]);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $statuses = Status::all();
        return view('settings.tournaments.tournaments', ['statuses' => $statuses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validations($request);

        Tournament::create($request->all());
        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournament $tournament)
    {
        $statuses = Status::all();
        return view('settings.tournaments.tournaments', ['statuses' => $statuses, 'tournament' => $tournament]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        $this->validations($request);
        $tournament->update($request->all());

        return redirect()->route('tournaments.index')
            ->with('success', 'Tournament updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        try {
            return $tournament->delete();
        } catch (QueryException $e) {
            print_r($e->errorInfo);
        }
    }

    private function validations($request, $update = null)
    {

        $validationArr = [
            'name' => 'required|string|max:255',
            'published' => 'required|integer',
            'start_date' => 'required',
            'end_date' => 'required',
            'number_of_request' => 'required|integer',
            'registration_fee' => 'required|integer',
            'terms_and_condition' => 'required|max:2048',
            'status_id' => 'required|integer',
        ];

        $request->validate($validationArr, [
            'name.required' => 'Name is required!',
            'published.required' => 'Published is required!',
            'start_date.required' => 'Start Date is required!',
            'end_date.required' => 'End Date is required!',
            'number_of_request.required' => 'Number of Request is required!',
            'registration_fee.required' => 'Registration Fee is required!',
            'terms_and_condition.required' => 'Terms and Condistion is required!',
            'status_id.required' => 'Select the status!'
        ]);
    }
}
