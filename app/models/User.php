<?php

	use Illuminate\Auth\UserTrait;
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableTrait;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class User extends Eloquent implements UserInterface, RemindableInterface {

		use UserTrait, RemindableTrait;

		protected $fillable = [ 'id_number', 'password', 'name', 'email', 'address', 'first_name', 'last_name', 'avatar' ];

		protected $with = [ 'profile' ];

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
	}
