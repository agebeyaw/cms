<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\events;

use craft\elements\User;
use yii\base\Event;

/**
 * LoginFailureEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class LoginFailureEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var string|null The authentication error key, if the reason is known.
     * @see User
     */
    public $authError;

    /**
     * @var User|null The user that the login was attempted for, if there was a username/email match
     */
    public $user;
}
