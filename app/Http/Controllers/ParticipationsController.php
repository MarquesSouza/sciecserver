<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ParticipationCreateRequest;
use App\Http\Requests\ParticipationUpdateRequest;
use App\Repositories\ParticipationRepository;
use App\Validators\ParticipationValidator;


class ParticipationsController extends Controller
{

    /** ------------------------------------------Import repository Participations-------------------------------------------------------------------------
     */
    protected $repository;
    /** ------------------------------------------Import validator Participation -------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(ParticipationRepository $repository, ParticipationValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $participations = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $participations,
            ]);
        }

        return view('participacao.list_participacao', compact('participations'));
    }

    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $participation = $this->repository->create($request->all());

            $response = [
                'message' => 'Participation created.',
                'data'    => $participation->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
    /** ------------------------------------------Store-------------------------------------------------------------------------
     */
    public function show($id)
    {
        $participation = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $participation,
            ]);
        }

        return view('participations.show', compact('participation'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {
        $titulo = "Editar Participação";

        $participation = $this->repository->find($id);

        return view('participacao.create-edit',compact('titulo','participation'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $participation = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Participation updated.',
                'data'    => $participation->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->route('index_participacao');
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
    /** ------------------------------------------Destroy Logic-------------------------------------------------------------------------
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Participation deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Participation deleted.');
    }
    /** ------------------------------------------Formulario de Cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
//        return view('participacao.cad_participacao');
        $titulo = "Cadastrar Participação";
        return view('participacao.create-edit', compact('titulo'));
    }
}
