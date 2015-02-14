<?php namespace Twitter\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Twitter\Commands\CreateRePost;
use Twitter\Http\Requests;
use Twitter\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RePostController extends Controller {

    use DispatchesCommands;

    protected $me;

    public function __construct(Guard $auth)
    {
        $this->middleware('auth');
        $this->me = $auth->user();
    }

    public function postStore(Requests\RePostRequest $request)
    {
        $postId = $request->post_id;

        $this->dispatch(new CreateRePost(
            $this->me,
            $postId
        ));

        return redirect('home');
    }
}
