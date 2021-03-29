<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class RoleExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('role', [$this, 'roleRenamer']),
        ];
    }

    public function roleRenamer($role)
    {

        $roles =  [
            'ROLE_ADMIN' =>    'Administrateur',
            'ROLE_MODERATOR' => 'Moderateur',
            'ROLE_WRITTER' => 'Auteur',
            'ROLE_SCHOOL' =>    'Ecole',
            'ROLE_USER' => "Utilisateur"
        ];
        return $roles[$role] ?? $role;
    }
}
