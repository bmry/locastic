<?php


namespace App\Tests\Unit;


use App\Exception\Scope\InvalidScopeException;
use App\Validation\ScopeBodyValidator;
use PHPUnit\Framework\TestCase;

class ScopeBodyValidatorTest extends TestCase
{
    public function testThatErrorIsThrownnIfScopeNameisMissingInBody()
    {
        $scopeBody = "{
          \"scopes\": [
                { \"description\": \"Edit Profile\"}
            ]
        }";

        $scopeValidator = new ScopeBodyValidator();
        $this->expectException(InvalidScopeException::class);
        $scopeValidator->validate($scopeBody);

    }

    public function testThatErrorIsThrownIfScopeDescriptionMissingInBody()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"edit_profile\"}
            ]
        }";

        $scopeValidator = new ScopeBodyValidator();
        $this->expectException(InvalidScopeException::class);
        $scopeValidator->validate($scopeBody);

    }

    public function testThatExceptionIsThrownIfScopeNameIsSetButEmpty()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"\", \"description\": \"Edit Profile\"}
            ]
        }";

        $scopeValidator = new ScopeBodyValidator();
        $this->expectException(InvalidScopeException::class);
        $scopeValidator->validate($scopeBody);
    }

    public function testThatExceptionIsThrownIfScopeDescriptionIsSetButEmpty()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"edit_profile\", \"description\": \"\"}
            ]
        }";

        $scopeValidator = new ScopeBodyValidator();
        $this->expectException(InvalidScopeException::class);
        $scopeValidator->validate($scopeBody);
    }

    public function testThatNoExcpetionIsNotThrownIfScopeBodyIsValid()
    {
        $scopeBody = "{
          \"scopes\": [
                {\"name\": \"edit_profile\", \"description\": \"Edit Profile\"}
            ]
        }";

        $scopeValidator = new ScopeBodyValidator();
        $scopeValidator->validate($scopeBody);
    }
}