<?php

namespace App\Policies;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Offer $offer): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Offer $offer): bool
    {
        return $this->isAuthor($user, $offer);
    }

    private function isAuthor(User $user, Offer $offer): bool
    {
        return $user->id === $offer->author_id;
    }

    public function delete(User $user, Offer $offer): bool
    {
        return $this->isAuthor($user, $offer);
    }

    public function isOfferAuthor(User $user, Offer $offer): bool
    {
        return $this->isAuthor($user, $offer);
    }
}
