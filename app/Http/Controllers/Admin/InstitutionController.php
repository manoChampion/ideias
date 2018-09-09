<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institution;

class InstitutionController extends Controller
{
    public function index() {

        $institutions = Institution::all();

        return view('admin.institution.view-institutions', [
            'title' => 'Instituições',
            'path'  => 'Listagem de Instituições',
            'institutions' => $institutions,
        ]);

    }

    public function create(Request $request) {

        if ($request->get('name') != null) {
            $institution = new Institution();
            $institution->name = $request->get('name');
            $institution->description = $request->get('description');
            $institution->phone = $request->get('phone');
            $institution->address = $request->get('address');
            $institution->save();
            
            return redirect()->route('view-institutions');
        }

        return view('admin.institution.create-institution', [
            'title' => 'Criar Instituição',
            'path'  => 'Instituições / Criar',
        ]);
    }

    public function update($institution_id, Request $request) {

        $institution = Institution::find($institution_id);

        if ($request->get('name') != null) {

            $institution->name = $request->get('name');
            $institution->description = $request->get('description');
            $institution->phone = $request->get('phone');
            $institution->address = $request->get('address');

            $institution->save();

            return redirect()->route('view-institutions');

        }

        return view('admin.institution.update-institution', [
            'title' => 'Editar Instituição',
            'path'  => 'Instituições / Editar Instituição',
            'institution' => $institution,
        ]);

    }

    public function delete($institution_id) {

    }
}
