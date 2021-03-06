<?php

namespace Birke\Rememberme\Token;

require_once(dirname(__FILE__) . "/AbstractToken.php");

/**
 * A token generated based on the PHP function random_bytes
 *
 */
class DefaultToken extends AbstractToken
{
    /**
     * @inheritdoc
     * @return string
     */
    public function createToken()
    {
        return $this->formatBytes(random_bytes($this->tokenBytes));
    }
}
