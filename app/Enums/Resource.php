<?php

namespace App\Enums;

use Pariwo\Resources\Contracts\ResourceModelInterface;
use App\Repositories\EventRepository;
use App\Repositories\EventTypeRepository;
use App\Repositories\MediaRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\RegistrationCodeRepository;
use App\Repositories\RegistrationRepository;
use App\Repositories\PostRepository;
use App\Repositories\SeriesRepository;
use App\Repositories\DocumentRepository;
use App\Repositories\UserProfileRepository;
use App\Repositories\UserRepository;

enum Resource: string
{
    case Events = 'events';
    case EventTypes = 'event_types';
    case Media = 'media';
    case Notification = 'notifications';
    case RegistrationCodes = 'registration_codes';
    case Registrations = 'registrations';
    case Posts = 'posts';
    case Series = 'series';
    case Documents = 'documents';
    case UserProfiles = 'user_profiles';
    case Users = 'users';

    public function singular(): string
    {
        return match ($this) {
            Resource::Events => 'event',
            Resource::EventTypes => 'event_type',
            Resource::Media => 'media',
            Resource::Notification => 'notification',
            Resource::RegistrationCodes => 'registration_code',
            Resource::Registrations => 'registration',
            Resource::Posts => 'post',
            Resource::Series => 'series',
            Resource::Documents => 'document',
            Resource::UserProfiles => 'user_profile',
            Resource::Users => 'user',
        };
    }

    public static function repository(string $name): string
    {
        return match ($name) {
            'event', 'events' => EventRepository::class,
            'event_type', 'event_types' => EventTypeRepository::class,
            'media', => MediaRepository::class,
            'notification', 'notifications' => NotificationRepository::class,
            'registration_code', 'registration_codes' => RegistrationCodeRepository::class,
            'registration', 'registrations' => RegistrationRepository::class,
            'post', 'posts' => PostRepository::class,
            'series', => SeriesRepository::class,
            'document', 'documents' => DocumentRepository::class,
            'user_profile', 'user_profiles' => UserProfileRepository::class,
            'user', 'users' => UserRepository::class,
        };
    }

    public function response(): string
    {
        $response = ucfirst($this->singular()) . 'Resource';
        return '\App\Http\Resources\\' . $response;
    }

    public function model(): ResourceModelInterface
    {
        $model = ucfirst($this->singular());
        $model = '\App\Models\\' . $model;
        return new $model;
    }

    public function modelName()
    {
        $model = ucfirst($this->singular());
        return '\App\Models\\' . $model;
    }
}
