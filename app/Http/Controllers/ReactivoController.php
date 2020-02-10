<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReactivoRequest;
use App\Http\Requests\UpdateReactivoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Reactivo;
use Illuminate\Http\Request;
use Flash;
use Response;

class ReactivoController extends AppBaseController
{
    /**
     * Display a listing of the Reactivo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Reactivo $reactivos */
        $reactivos = Reactivo::all();

        return view('reactivos.index')
            ->with('reactivos', $reactivos);
    }

    /**
     * Show the form for creating a new Reactivo.
     *
     * @return Response
     */
    public function create()
    {
        return view('reactivos.create');
    }

    /**
     * Store a newly created Reactivo in storage.
     *
     * @param CreateReactivoRequest $request
     *
     * @return Response
     */
    public function store(CreateReactivoRequest $request)
    {
        $input = $request->all();

        /** @var Reactivo $reactivo */
        $reactivo = Reactivo::create($input);

        Flash::success('Reactivo saved successfully.');

        return redirect(route('reactivos.index'));
    }

    /**
     * Display the specified Reactivo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Reactivo $reactivo */
        $reactivo = Reactivo::find($id);

        if (empty($reactivo)) {
            Flash::error('Reactivo not found');

            return redirect(route('reactivos.index'));
        }

        return view('reactivos.show')->with('reactivo', $reactivo);
    }

    /**
     * Show the form for editing the specified Reactivo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Reactivo $reactivo */
        $reactivo = Reactivo::find($id);

        if (empty($reactivo)) {
            Flash::error('Reactivo not found');

            return redirect(route('reactivos.index'));
        }

        return view('reactivos.edit')->with('reactivo', $reactivo);
    }

    /**
     * Update the specified Reactivo in storage.
     *
     * @param int $id
     * @param UpdateReactivoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReactivoRequest $request)
    {
        /** @var Reactivo $reactivo */
        $reactivo = Reactivo::find($id);

        if (empty($reactivo)) {
            Flash::error('Reactivo not found');

            return redirect(route('reactivos.index'));
        }

        $reactivo->fill($request->all());
        $reactivo->save();

        Flash::success('Reactivo updated successfully.');

        return redirect(route('reactivos.index'));
    }

    /**
     * Remove the specified Reactivo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Reactivo $reactivo */
        $reactivo = Reactivo::find($id);

        if (empty($reactivo)) {
            Flash::error('Reactivo not found');

            return redirect(route('reactivos.index'));
        }

        $reactivo->delete();

        Flash::success('Reactivo deleted successfully.');

        return redirect(route('reactivos.index'));
    }
}
