<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Repositories\EventRepository;
use App\Validators\EventValidator;


class EventsController extends Controller
{

    /**
     * @var EventRepository
     */
    protected $repository;

    /**
     * @var EventValidator
     */
    protected $validator;

    public function __construct(EventRepository $repository, EventValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $events = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $events,
            ]);
        }

        return view('eventos.list_evento', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EventCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function form_cad()
    {
        $cursos= Course::all();
        return view('evento.cad_evento',compact('cursos'));
    }
    public function store(EventCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $event = $this->repository->create($request->all());

            $response = [
                'message' => 'Event created.',
                'data'    => $event->toArray(),
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


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
              'data' => $events,
           ]);
      }

        return view('eventos.exibir_evento',compact('events'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $event = $this->repository->find($id);

        return view('events.edit', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  EventUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(EventUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $event = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Event updated.',
                'data'    => $event->toArray(),
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Event deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Event deleted.');
    }
}
