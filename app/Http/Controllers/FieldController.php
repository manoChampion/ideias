<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;

class FieldController extends Controller
{
    public function index() {

        $fields = Field::all();

        return view('admin.esp.field.view-fields', [
            'title' => 'Áreas',
            'path'  => 'Especialização / Áreas'
        ])->with('fields', $fields);

    }

    public function create(Request $request) {

        if ($request->get('name')) {

            $field = new Field();

            $field->name = $request->get('name');
            $field->description = $request->get('description');

            $field->save();

            return redirect()->route('view-fields');
        }


        return view('admin.esp.field.create-field', [
            'title' => 'Criar Área',
            'path'  => 'Especialização / Áreas / Criar Área',
        ]);
    }

    public function update($field_id, Request $request) {
        $field = Field::find($field_id);

        if ($request->get('name')) {
            $field->name = $request->get('name');
            $field->description = $request->get('description');
            $field->save();

            return redirect()->route('view-fields');
        }

        return view('admin.esp.field.update-field', [
            'title' => 'Editar Área',
            'path'  => 'Especialização / Áreas / Editar Área',
        ])->with([
            'field' => $field,
        ]);
    }

    public function delete($filed_id) {
        $field = Field::find($filed_id);

        $field->delete();
        return redirect()->route('view-fields');
    }

}
