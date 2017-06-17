<?php

namespace App\Http\Controllers;

use App\Entities\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ArticleCreateRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Repositories\ArticleRepository;
use App\Validators\ArticleValidator;


class ArticlesController extends Controller
{

    /** ------------------------------------------Import repository Artigos-------------------------------------------------------------------------
     */
    protected $repository;

    /** ------------------------------------------Import validator Artigos-------------------------------------------------------------------------
     */
    protected $validator;
    /** ------------------------------------------Construct-------------------------------------------------------------------------
     */
    public function __construct(ArticleRepository $repository, ArticleValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    /** ------------------------------------------Index-------------------------------------------------------------------------
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $articles = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $articles,
            ]);
        }

        return view('artigo.list_artigo', compact('articles'));
    }
    /** ------------------------------------------Store-------------------------------------------------------------------------
 */
    public function store(Request $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $article = $this->repository->create($request->all());

            $response = [
                'message' => 'Article created.',
                'data'    => $article->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('artigo/index');
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
    /** ------------------------------------------Show-------------------------------------------------------------------------
     */
    public function show($id)
    {
        $article = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $article,
            ]);
        }

        return view('articles.show', compact('article'));
    }
    /** ------------------------------------------Edit-------------------------------------------------------------------------
     */
    public function edit($id)
    {
        $titulo='Editar Artigo';
        $article = $this->repository->find($id);

        return view('artigo.create-edit-artigo', compact('titulo','article'));
    }
    /** ------------------------------------------Update-------------------------------------------------------------------------
     */
    public function update(Request $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $article = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Article updated.',
                'data'    => $article->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('artigo/index');
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
    public function destroy(Request $request, $id)
    {
        $dataForm = $request->all();
        $article = Article::find($id);
        $update = $article->update($dataForm);

        if($update){
            return redirect('artigo/index');
        }
    }
    /** ------------------------------------------Formulario de cadastro-------------------------------------------------------------------------
     */
    public function form_cad()
    {
        $titulo = 'Cadastro Artigo';
        return view('artigo.create-edit-artigo',compact('titulo'));
    }
}
