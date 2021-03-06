<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security;

use Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction;

final class IsRememberMe extends ExpressionFunction
{
    public function __construct($name = 'isRememberMe')
    {
        parent::__construct(
            $name,
            function () {
                return '$globalVariable->get(\'container\')->get(\'security.authorization_checker\')->isGranted(\'IS_AUTHENTICATED_REMEMBERED\')';
            }
        );
    }
}
