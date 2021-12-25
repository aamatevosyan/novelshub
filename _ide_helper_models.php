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
 * App\Models\Author
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperAuthor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Genre
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Novel[] $novels
 * @property-read int|null $novels_count
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperGenre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GenreNovel
 *
 * @property int $id
 * @property int $genre_id
 * @property int $novel_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel whereNovelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreNovel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperGenreNovel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $locale
 * @property bool $rtl
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereRtl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Novel
 *
 * @property int $id
 * @property string $original_name
 * @property array $name
 * @property int $novel_type_id
 * @property int $author_id
 * @property int $language_id
 * @property array|null $data
 * @property int $view_count
 * @property float $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Author|null $author
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Genre[] $genres
 * @property-read int|null $genres_count
 * @property-read array $translations
 * @property-read \App\Models\Language|null $language
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\NovelType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Novel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Novel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Novel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereNovelTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereOriginalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Novel whereViewCount($value)
 * @mixin \Eloquent
 */
	class IdeHelperNovel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NovelTag
 *
 * @property int $id
 * @property int $novel_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag whereNovelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperNovelTag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NovelType
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType query()
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NovelType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperNovelType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Novel[] $novels
 * @property-read int|null $novels_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperTag extends \Eloquent {}
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
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[] $abilities
 * @property-read int|null $abilities_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser extends \Eloquent {}
}

