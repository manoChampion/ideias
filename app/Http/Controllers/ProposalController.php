<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\Course;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function index() {
        $proposals = Proposal::all();

        return view('admin.proposal.view-proposals', [
            'title' => 'Propostas',
            'path'  => 'Propostas',
        ])->with('proposals', $proposals);
    }

    public function create(Request $request) {
        $courses = Course::all();

        if ($request->get('description-proposal')) {
            $proposal = new Proposal();

            $proposal->description = $request->get('description-proposal');
            $proposal->user()->associate(Auth::user());
            $proposal->save();
            $proposal->courses()->attach($request->get('courses-proposal'));
            $proposal->save();

            return redirect()->route('view-proposals');
        }

        return view('admin.proposal.create-proposal', [
            'title' => 'Criar Proposta',
            'path'  => 'Propostas / Criar Proposta',
        ])->with('courses', $courses);
    }

    public function update($proposal_id, Request $request) {

        $courses = Course::all();
        $proposal = Proposal::find($proposal_id);

        if ($request->get('description-proposal')) {

            $proposal = Proposal::find($proposal_id);

            $proposal->description = $request->get('description-proposal');
            $proposal->courses()->sync($request->get('courses-proposal'));
            $proposal->save();

            return redirect()->route('view-proposals');

        }

        return view('admin.proposal.update-proposal', [
            'title' => 'Editar Proposta',
            'path'  => 'Propostas / Editar Propostas',
        ])->with([
            'proposal' => $proposal,
            'courses'   => $courses,
        ]);

    }

    public function delete($proposal_id) {
        $proposal = Proposal::find($proposal_id);

        $proposal->delete();

        return redirect()->route('view-proposals');
    }
}
