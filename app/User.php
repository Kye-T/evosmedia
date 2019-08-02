<?php

namespace App;

use Laravel\Passport\HasApiTokens;

class User extends \Konekt\AppShell\Models\User
{
	use HasApiTokens;
}
