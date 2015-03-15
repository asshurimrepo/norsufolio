<?php

	class ProjectsController extends \BaseController {

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{
			//
		}


		/**
		 * Show the form for creating a new resource.
		 *
		 * @return Response
		 */
		public function create()
		{
			return View::make( 'users.projects.create', $this->data );
		}


		/**
		 * Store a newly created resource in storage.
		 *
		 * @return Response
		 */
		public function store()
		{
			$file            = Input::file( 'image' );
			$destinationPath = 'uploads/';
			$filename        = Str::random() . $file->getClientOriginalName();
			Input::file( 'image' )->move( $destinationPath, $filename );

			$input          = Input::all();
			$input['image'] = $filename;

			Auth::user()->projects()->create( $input );

			return Redirect::route( 'user.index' );
		}


		/**
		 * Display the specified resource.
		 *
		 * @param Project $project
		 *
		 * @return Response
		 */
		public function showProject( Project $project )
		{
			$project->load( 'user' );

			$up       = null;
			$followed = null;

			if ( Auth::check() )
			{
				$up       = $project->ups()->where( 'user_id', Auth::user()->id )->first();
				$followed = $project->user->followers()->where( 'followee_id', Auth::user()->id )->first();
			}

			$this->data['project']  = $project;
			$this->data['user']     = $project->user;
			$this->data['title']    = $project->name;
			$this->data['up']       = $up;
			$this->data['followed'] = $followed;



			$project->views += 1;
			$project->update();

			return View::make( 'users.projects.show', $this->data );
		}


		public function upProject( Project $project )
		{
			return $project->ups()->create( [ 'user_id' => Auth::user()->id ] );
		}

		public function comments(Project $project)
		{
			$comments =  $project->comments()->orderBy('id', 'desc')->get();
			$comments->load('user');
			return $comments;
		}

		public function postComment( Project $project )
		{
			$input = Input::all();
			$input['user_id'] = Auth::user()->id;

			return $project->comments()->create($input);
		}

	}
