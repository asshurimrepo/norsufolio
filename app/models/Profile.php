<?php

class Profile extends Eloquent{
        
     protected $fillable = ['user_id', 'about_me', 'facebook_link', 'web_link', 'college', 'course'];
    
}