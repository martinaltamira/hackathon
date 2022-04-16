<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Developer
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $email
 * @property string $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Developer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Developer whereUpdatedAt($value)
 */
	class Developer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hackaton
 *
 * @property int $id
 * @property string $name
 * @property string $place
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Developer[] $bestDevelopers
 * @property-read int|null $best_developers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Developer[] $winners
 * @property-read int|null $winners_count
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hackaton whereUpdatedAt($value)
 */
	class Hackaton extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

