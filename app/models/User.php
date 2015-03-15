<?php

	use Illuminate\Auth\UserTrait;
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableTrait;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class User extends Eloquent implements UserInterface, RemindableInterface {

		use UserTrait, RemindableTrait;

		protected $fillable = [ 'id_number', 'password', 'name', 'email', 'address', 'first_name', 'last_name', 'avatar', 'facebook_id' ];

		protected $with = [ 'profile' ];

		protected $appends = ['avatarUrl'];

		/**
		 * The database table used by the model.
		 *
		 * @var string
		 */
		protected $table = 'users';

		/**
		 * The attributes excluded from the model's JSON form.
		 *
		 * @var array
		 */
		protected $hidden = array( 'password', 'remember_token' );


		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasMany
		 */
		public function projects()
		{
			return $this->hasMany( 'Project' );
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasOne
		 */
		public function profile()
		{
			return $this->hasOne( 'Profile' );
		}

		public function aboutMe()
		{
			return nl2br( $this->profile->about_me );
		}

		public function getAvatarUrlAttribute( )
		{
			return $this->imageUrl();
		}

		public function imageUrl()
		{
			if($this->avatarExists()){
				return $this->avatar;
			}

			if ( $this->imageProfileExists() )
			{
				return asset( "profiles/{$this->id}.jpg" );
			}

			if($this->facebook_id){
				return "https://graph.facebook.com/{$this->facebook_id}/picture?type=large";
			}

			return asset( "profiles/default.jpg" );

		}

		/**
		 * @return bool
		 */
		private function imageProfileExists()
		{
			return file_exists( public_path( "profiles/{$this->id}.jpg" ) );
		}


		public function fullName()
		{
			return "{$this->first_name} {$this->last_name}";
		}

		public function upsCount()
		{
			$ups = 0;

			$this->load('projects');

			foreach($this->projects as $p){
				$ups += $p->upsCount();
			}

			return $ups;
		}

		public function projectViews()
		{
			return $this->projects()->sum('views');
		}

		private function avatarExists()
		{
			return $this->avatar;
		}

		public function otherProjects( $limit = 4, $current_project_id = 0 )
		{
			return $this->projects()->where('id', '!=', $current_project_id)->limit($limit)->orderBy(DB::raw('RAND()'))->get();
		}

		public function following()
		{
			return $this->hasMany('Follow', 'followee_id');
		}

		public function followers()
		{
			return $this->hasMany('Follow', 'followed_id');
		}
	}
